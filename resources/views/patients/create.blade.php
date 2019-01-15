@extends('layouts.front_layout')
@section('front_content')
<link rel="stylesheet" href="{{ asset('doc_front/cun_tel/css/intlTelInput.css')}}">
<!-- =======ss body========= -->
<div class="main_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ss_heading">
                    <h3> Patients <span>Registration</span> </h3> 
                    <p>To make your profile visible on DabaDoc</p>
                </div>
            </div>

            <div class="col-sm-12" id="ss_registration_content">
                <div class="ss_registration_content_top">

                    <div class="registration_form">
                        <div class="row justify-content-md-center">
                            <div class="col-sm-8">

                                <form action="{{URL::to('/patients')}}" method="post" enctype="multipart/form-data">
                                   {{csrf_field()}}

                                   <div class="row">
                                       <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="first_name">* First name</label>
                                            <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name') }}" name="first_name" id="first_name" aria-describedby="FirstnameHelp" placeholder="">
                                            @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="last_name">* Name</label>
                                            <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="{{ old('last_name') }}" name="last_name" id="last_name" aria-describedby="nameHelp" placeholder="">
                                            @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">* Email</label>
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" id="email" aria-describedby="emailHelp" placeholder="">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                <input type="hidden" class="form-control" name="user_type" id="user_type" value="patient" placeholder="">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="country_id">* Country</label>

                                        <select class="form-control{{ $errors->has('country_id') ? ' is-invalid' : '' }}" value="{{ old('country_id') }}" name="country_id">
                                          <option value="">Select Here..</option>
                                          @foreach ($countries as $country)
                                          <option value="{{$country->id}}">{{$country->country_name}}</option>
                                          @endforeach

                                      </select>
                                      @if ($errors->has('country_id'))
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                    @endif	 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">* Password</label>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" aria-describedby="passwordHelp" placeholder="" required="">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password-confirm">* Confirmation of password</label>
                                    <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" value="{{ old('password_confirmation') }}" id="password-confirm" name="password_confirmation" aria-describedby="passwordcrfHelp" placeholder="" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone_no">* Numéro de Téléphone (cabinet)</label>
                                    <input type="tel"  class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" value="{{ old('phone_no') }}" id="phone_no" name="phone_no">
                                    @if ($errors->has('phone_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>


                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">* You have read and accepted the <a href="#">terms of use</a> </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Valider</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
<!-- =======ss body end========= -->
<script src="{{ asset('public/doc_front/cun_tel/js/intlTelInput.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
    var input = document.querySelector("#phone_no");
    window.intlTelInput(input, {
      utilsScript: "{{ asset('public/doc_front/cun_tel/js/utils.js?1537727621611')}}",
      autoHideDialCode: true,
      hiddenInput: "phone_no",
      defaultCountry: "aus",
      numberType: "MOBILE",
      separateDialCode:true,
  });
</script>


@endsection