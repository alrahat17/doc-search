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

                                <form action="{{URL::to('/patients')}}" method="post" id="pat_signup_form" enctype="multipart/form-data">
                                   {{csrf_field()}}

                                   <div class="row">
                                       <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="first_name">* First name</label>
                                            <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name') }}" name="first_name" id="first_name" aria-describedby="FirstnameHelp" required="" placeholder="">
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
                                        <span id="error_email"></span>
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
                      <button type="submit" name="register" class="btn btn-primary">Valider</button>
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
<script src="{{ asset('doc_front/cun_tel/js/intlTelInput.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.min.js"></script>

<script>
    var input = document.querySelector("#phone_no");
    window.intlTelInput(input, {
      utilsScript: "{{ asset('doc_front/cun_tel/js/utils.js?1537727621611')}}",
      autoHideDialCode: true,
      hiddenInput: "phone_no",
      defaultCountry: "aus",
      numberType: "MOBILE",
      separateDialCode:true,
  });
</script>
<script>
$("#pat_signup_form").validate();
</script>
{{-- <script>

        $(document).ready(function(){
          
          $('#name').blur(function(){
          var error_name = '';
          var name = $('#name').val();
          if(name.length<5){
           $('#error_name').html('<label class="text-danger"><h6><small>Name must be atleast 5 characters long</small></h6></label>');
           $('#name').addClass('has-error');
           $('#register').attr('disabled',false );
          }
          else{
             $('#error_name').html('');
             $('#name').removeClass('has-error');
             $('#register').attr('disabled', 'disabled');
          }
          })

      
          $('#user_name').blur(function(){
          var error_user_name = '';
          var user_name = $('#user_name').val();
          if(user_name.length<3){
           $('#error_user_name').html('<label class="text-danger"><h6><small><i>User Name must be atleast 3 characters long</i></small></h6></label>');
           $('#user_name').addClass('has-error');
           $('#register').attr('disabled',false );
          }
          else{
             $('#error_user_name').html('');
             $('#user_name').removeClass('has-error');
             $('#register').attr('disabled', 'disabled');
          }
          })

          
         $('#email').keyup(function(){
          var error_email = '';
          var email = $('#email').val();
          var _token = $('input[name="_token"]').val();
          var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!filter.test(email))
          {    
           $('#error_email').html('<label class="text-danger"><h6><small><i>Invalid Email</i></small></h6></label>');
           $('#email').addClass('has-error');
           $('#register').attr('disabled', 'disabled');
         }
         else
         {
           $.ajax({
            url:"{{ route('email_available.check') }}",
            method:"POST",
            data:{email:email, _token:_token},
            success:function(result)
            {
             if(result == 'unique')
             {
            
              $('#error_email').html('<label class="text-success"><h6><small><i>Email Available</i></small></h6></label>');
              $('#email').removeClass('has-error');
              $('#register').attr('disabled', false);
            }
            else
            {
              $('#error_email').html('<label class="text-danger"><h6><small><i>Email already taken</i></small></label>');
              $('#email').addClass('has-error');
              $('#register').attr('disabled', 'disabled');
            }
          }
        })
         }
       });

      
          $('#phone').blur(function(){
          var error_phone = '';
          var phone = $('#phone').val();
          if(phone.length<7){
           $('#error_phone').html('<label class="text-danger"><h6><small>Phone no must be atleast 7 characters long</small></h6></label>');
           $('#phone').addClass('has-error');
           $('#register').attr('disabled',false );
          }
          else{
             $('#error_phone').html('');
             $('#phone').removeClass('has-error');
             $('#register').attr('disabled', 'disabled');
          }
          })

          $('#password').blur(function(){
          var error_password = '';
          var password = $('#password').val();
          if(password.length<6){
           $('#error_password').html('<label class="text-danger"><h6><small><i>Password must be atleast 6 charcters long</i></small></h6></label>');
           $('#password').addClass('has-error');
           $('#register').attr('disabled',false );
          }
          else{
             $('#error_password').html('');
             $('#password').removeClass('has-error');
             $('#register').attr('disabled', 'disabled');
          }
          })


         $('#photo').blur(function(){
          var error_photo = '';
          var error_photo_type = '';
          var file_size = $('#photo')[0].files[0].size;
          var file = this.files[0];
          var fileType = file["type"];
          //alert(fileType);
          var validImageTypes = ["image/jpg", "image/jpeg", "image/png"];
          if ($.inArray(fileType, validImageTypes) < 0) {
              // invalid file type code goes here.
              $('#error_photo_type').html('<label class="text-danger"><h6><small>Invalid Type Photo</small></h6></label>');
              $('#photo').addClass('has-error');
              $('#register').attr('disabled',false );
            }
          else{
            //alert('success');
             $('#error_photo_type').html('');
             $('#photo').removeClass('has-error');
             $('#register').attr('disabled', 'disabled');
          }
          if(file_size>1000000){
           $('#error_photo').html('<label class="text-danger">Photo Size Exceeds</label>');
           $('#photo').addClass('has-error');
           $('#register').attr('disabled',false );
          }
          else{
             $('#error_photo').html('');
             $('#photo').removeClass('has-error');
             $('#register').attr('disabled', 'disabled');
          }
          })

       });

     </script>
 --}}

@endsection