<?php

namespace App\Http\Controllers;

use App\company;
use App\company_contact_information;
use App\company_meta;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function index(){



        return view('pages.home');
    }


    public function partners(){

        $companyDataArr = [];
        $companies = company::where('partner', '=', true)->get();
        foreach($companies as $company){
            $companyData['company'] = $company;
            $companyData['company_contact_information'] = company_contact_information::where('company_id', '=', $company->id)->first();
            $companyData['company_meta'] = company_meta::where('company_id', '=', $company->id)->first();
            $companyDataArr[] = $companyData;
        }

        return view('pages.partners')->with([
            'companyDataArr' => $companyDataArr
        ]);
    }

    public function dashboard(){

        $companyDataArr = [];
        $companies = company::where('partner', '=', false)->get();
        foreach($companies as $company){
            $companyData['company'] = $company;
            $companyData['company_meta'] = company_meta::where('company_id', '=', $company->id)->first();
            $companyDataArr[] = $companyData;
        }


        return view('account.dashboard')->with([
            'companyDataArr' => $companyDataArr
        ]);
    }

    public function angular(){

        return view('pages.angular');
    }


    
    
    
}
