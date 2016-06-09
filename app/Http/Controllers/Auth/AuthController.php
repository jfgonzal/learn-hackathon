<?php

namespace App\Http\Controllers\Auth;

use App\company_meta;
use App\User;
use App\company;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User();
        $user->type = 'company';
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->preferred_contact = $data['preferred_contact'];
        $user->password = $data['password'];
        $user->save();

        $company = new company();
        $company->user_id = $user->id;
        $company->name = $data['name'];
        $company->partner = false;
        $company->save();


        DB::table('company_contact_information')->insert([
            'company_id' => $company->id,
        ]);

        $company_meta = new company_meta();
        $company_meta->company_id = $company->id;
        $company_meta->type = 'need';
        $company_meta->save();

        if(count($data['attribute']) > 0){
            foreach($data['attribute'] as $meta){
                $company_meta->{$meta} = true;
            }
        }
        $company_meta->save();


        DB::table('company_address')->insert([
            'company_id' => $company->id,
            'address' => $data['address1'],
            'address2' => $data['address2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'country' => 'us',
        ]);


        DB::table('company_phone')->insert([
            'company_id' => $company->id,
            'type' => 'cellphone',
            'number' => $data['phone'],
        ]);


        $info = ['data' => $data];

            Mail::send('emails.signUp', $info, function($message){
                $message->to('admins@terranando.com', 'Administrators')->subject('A new user has signed up!');
            });

        return $user;
    }
}
