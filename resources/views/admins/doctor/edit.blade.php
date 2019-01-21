@extends('layouts.admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{ asset('doc_back/cun_tel/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{ asset('doc_back/cun_tel/css/')}}">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4>Edit Doctor</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 offset-1">
                            <form action="{{ route('doctor_update', $user->id )}}" method="POST">
                                @csrf                          
                                <div class="form-group">
                                    <label for="single-select">* Title</label>
                                    <select id="single-select" name="title" class="form-control">
                                        <option value="{{ $user->title }}"<?php if($user->title == "Dr.") echo "selected"; ?>>{{ $user->title }}</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="first_name" class="form-control-label">* First Name</label>
                                    <input type="text" name="first_name" id="first_name" value="{{ $user->first_name }}" class="form-control" placeholder="Enter the first name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="form-control-label">*Last Name</label>
                                    <input type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" class="form-control" placeholder="Enter the last name">
                                    <input type="hidden" name="user_type" value="doctor" >
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-control-label">* Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}" id="email" class="form-control" placeholder="Enter the email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-control-label">* Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter the password">
                                </div>
                                <div class="form-group">
                                    <label for="title" class="form-control-label">* Confirmation of password</label>
                                    <input type="password" name="password_confirmation" id="password_confirm" value="{{ old('password_confirmation')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="speciality">Specialty (ies)</label>
                                    <select name="specialty_id" id="specialty_id" class="form-control">
                                        @foreach($specialtys as $specialty)
                                        <option value="{{ $specialty->id }}" <?php if($specialty->id == $user->specialty_id) echo "selected"; ?>>{{ $specialty->spcl_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <select id="city" name="city_id" class="form-control">
                                        <option value="">--Select City--</option>
                                        @foreach($citys as $city)
                                        <option value="{{ $city->id }}"<?php if($city->id == $user->city_id) echo "selected"; ?>>{{ $city->city }}</option>
                                        @endforeach                    
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address">Number and street of the cabinet</label>
                                    <textarea id="address" name="address" class="form-control" rows="6">
                                        {{ $user->address }}
                                    </textarea>
                                </div>     
                                <div class="form-group">
                                    <label for="phone_no" class="form-control-label">Telephone number (cabinet)</label>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone_no" id="phone_no" value="{{ $user->phone_no }}" class="form-control">               
                                </div>     
                                <div class="form-group">
                                    <label for="phone_portable">Number of Portable</label>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone_portable" value="{{ $user->phone_portable }}" id="phone_portable" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <div class="mb-4">                 
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <script src="{{ asset('doc_back/cun_tel/js/intlTelInput.js')}}"></script>
  <script>
    var iti='';
    $( document ).ready(function() {
    var input = document.querySelector("#phone_no");

        iti = intlTelInput(input, {
        utilsScript: "{{ asset('doc_back/cun_tel/js/utils.js?1537727621611')}}",
        autoHideDialCode: true,
        autoPlaceholder: "off",
        hiddenInput: "phone_no",
        defaultCountry: "aus",
        numberType: "MOBILE",
        separateDialCode:true,
        });
    });
  </script>
  <script>
    var input = document.querySelector("#phone_portable");
    window.intlTelInput(input, {
      utilsScript: "{{ asset('doc_back/cun_tel/js/utils.js?1537727621611')}}",
      autoHideDialCode: true,
      hiddenInput: "phone_portable",
      defaultCountry: "aus",
      numberType: "MOBILE",
      separateDialCode:true,
    });
  </script>
@endsection