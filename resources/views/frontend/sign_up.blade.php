@extends('layouts.front_layout')
@section('title') Doctor Registration @endsection
@section('front_content')

@push('css')
<link rel="stylesheet" href="{{ asset('doc_back/cun_tel/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{ asset('doc_back/cun_tel/css/')}}">
@endpush
<!-- =======ss body========= -->
<div class="main_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ss_heading">
					<h3> Professional Health <span>Registration</span> </h3>
					<p>To make your profile visible on DabaDoc</p>
				</div>
			</div>
			<div class="col-sm-12" id="ss_registration_content">
				<div class="ss_registration_content_top">
					
					<div class="step_registration">
						<div class="row">
							<div class="col-sm-8">
								<ul>
									<li> <span>1</span> Create your profile DabaDoc</li>
									<li> <span>2</span> A member of the DabaDoc team will contact you to confirm your account</li>
									<li> <span>3</span> Choose a DabaDoc Pro package</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<div class="step_registration_right">
									<button class="btn btn-primary">Rates (including VAT, per month)</button>
									<p>6 months <strong>350 DHS</strong> </p>
									<p>12 months <strong>275 DHS</strong></p>
									<p>24 months <strong>225 DHS</strong></p>
								</div>
							</div>
						</div>
					</div>
					<div class="registration_form">
						<div class="row justify-content-md-center">
							<div class="col-sm-8">
								
								<form action="{{ route('doctor.store')}}" method="POST">
									@csrf
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleFormControlSelect2">* Title</label>
												<select class="form-control" name="title" id="title" id="exampleFormControlSelect2">
													<option value="Dr.">Dr.</option>
													<option value="Pr.">Pr.</option>
													<option value="">--</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleInputEmail1">* Email</label>
												<input type="email" name="email" class="form-control" value="{{ old('email')}}" id="email" aria-describedby="emailHelp" placeholder="">
												<input type="hidden" name="user_type" value="doctor" >
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleInputFirstname">* First name</label>
												<input type="text" name="first_name" id="first_name" value="{{ old('first_name')}}" class="form-control"  aria-describedby="FirstnameHelp" placeholder="">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleInputname">* Name</label>
												<input type="text" name="last_name" id="last_name" value="{{ old('last_name')}}" class="form-control" aria-describedby="nameHelp" placeholder="">
											</div>
										</div>
									</div>
									<p><small>Nous ne divulguerons pas votre adresse email. Celle-ci nous sert uniquement à vous communiquer des informations importantes.</small></p>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleInputpassword">* Password</label>
												<input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleInputpasswordcrf">* Confirmation of password</label>
												<input type="password" name="password_confirmation" class="form-control" id="password_confirm" aria-describedby="passwordcrfHelp" placeholder="">
											</div>
										</div>
									</div>
									<p><small>Choisissez un mot de passe pour votre compte DabaDoc. Le mot de passe doit comporter au moins 8 caractères</small></p>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleInputpasswordcrf">* Specialty (ies)</label>
												<select class="js-example-basic-multiple form-control" name="specialty_id" multiple="multiple">
													<option value="">Select your speciality</option>
													@foreach($specialtys as $specialty)
													<option value="{{ $specialty->id}}">{{ $specialty->spcl_name }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="exampleInputpasswordcrf">* City</label>
												<select class="js-example-basic-single form-control" name="city_id" >
													<option value="AL">Select City</option>
													@foreach($citys as $city)
													<option value="{{ $city->id  }}">{{ $city->city}}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="phone_no">* Numéro de Téléphone (cabinet)</label>
												<input type="tel" name="phone_no"  class="form-control" id="phone_no">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="phone_portable">* Numéro de Portable</label>
												<input type="tel" name="phone_portable" class="form-control" id="phone_portable">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="exampleFormControlTextarea1">* Number and street of the cabinet</label>
												<textarea class="form-control" name="address" id="address" rows="3"></textarea>
											</div>
										</div>
									</div>
									
									<div class="form-check">
										<input type="checkbox" name="status" value="1" class="form-check-input" id="status">
										<label class="form-check-label" for="exampleCheck1">I certify on the honor to be a health professional</label>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
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

@endsection

@push('js')
<script src="{{ asset('doc_back/cun_tel/js/intlTelInput.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
       
       $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.js-example-basic-multiple').select2();
  
        $(".professional_professional").click(function(){
          $("#professional_assistant").hide();
          $("#professional_professional").show();
        });

        $(".professional_assistant").click(function(){
          $("#professional_assistant").show();
          $("#professional_professional").hide();
        });
      });
    
    $('.ss_to_doctor_item_list').slick({
                dots: true, 
                prevArrow: false,
                nextArrow: false,
                autoplay: true,
                infinite: true,
                speed: 1500,
                slidesToShow: 4,
                slidesToScroll: 4, 
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3, 
                      dots: true
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
                ]
             });
    $('.ss_top_supp').slick({
                dots: true, 
                prevArrow: false,
                nextArrow: false,
                autoplay: true,
                infinite: true,
                speed: 700,
                slidesToShow: 4,
                slidesToScroll: 4, 
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3, 
                      dots: true
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
                ]
             });
             $('.ss_testmonial').slick({
              dots: true, 
                prevArrow: false,
                nextArrow: false,
                autoplay: true,
                infinite: true,
                speed: 800,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
             });
    </script>
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
@endpush