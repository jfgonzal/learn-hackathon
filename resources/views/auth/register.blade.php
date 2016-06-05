@extends('layout')
@section('content')
@include('errors')
<div class="row">
    <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
        <div class="col-md-12">
            <h2>Company Information</h2>
            <hr>
            <div class="row-md-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                    <label for="name">Company Name</label>
                </div>
                <div class="form-group">
                    <input type="text" name="address1" class="form-control" id="address1" value="{{ old('address1') }}">
                    <label for="address1">Address Line</label>
                </div>
                <div class="form-group">
                    <input type="text" name="address2" class="form-control" id="address2" value="{{ old('address2') }}">
                    <label for="address2">Address Line 2</label>
                </div>
            </div>
            <div class="row-md-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="city" class="form-control" id="city" value="{{ old('city') }}">
                    <label for="city">City</label>
                </div>
                <div class="form-group">
                    <input type="text" name="state" class="form-control" id="state" value="{{ old('state') }}">
                    <label for="state">State / Province / Region</label>
                </div>
                <div class="form-group">
                    <input type="text" name="zip" class="form-control" id="zip" value="{{ old('zip') }}">
                    <label for="zip">Zip</label>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <h2>Contact Information</h2>
            <hr>
            <div class="row-md-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') }}" required>
                    <label for="first_name">First Name</label>
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name') }}" required>
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row-md-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                    <label for="phone">Phone</label>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                    <label for="email">Email</label>
                </div>
            </div>
        </div>
            <hr>
        <div class="col-md-12">
            <h3><b>What services are you interested in receiving assistance with? Check all services that apply</b></h3>
            @include('partial.meta')
        </div>
            <hr>
        <div class="col-md-12">
                <h3><b>What is your preferred contact method?</b></h3>
                <input type="radio" name="contact" value="email-contact" checked> Email<br>
                <input type="radio" name="contact" value="phone-contact"> Phone<br>
                <input type="radio" name="contact" value="both-contact"> Both
        </div>
        <div class="col-md-12"></div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form>
</div>
@stop