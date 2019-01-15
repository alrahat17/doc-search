<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> 
    <link rel="stylesheet" type="text/css" href="{{asset('doc_front/assets/css/slick.css')}}"/>
    <link href="{{asset('doc_front/assets/css/style.css')}}" rel="stylesheet">
    <title>.:: Doctors and Online Appointment - DabaDoc ::.</title>
  </head>
  <body>
    <!-- =======ss header========= -->
        <header>
            <div class="container">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"><img src="{{asset('doc_front/assets/img/logo.png')}}" class="img-fluid"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="navbar-collapse collapse justify-content-end" id="navbarSupportedContent">
                          <ul class="navbar-nav ">
                            <li class="nav-item">
                              <a class="nav-link  btn btn-primary " href="#">Are you a practitioner?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  btn btn-outline-primary " href="#" data-toggle="modal" data-target="#ss_sign_in">My account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-primary " href="#">عربي</a>
                            </li>
                          
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  btn btn-outline-primary " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Morocco
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Algeria</a>
                                  <a class="dropdown-item" href="#">Tunisia</a> 
                                  <a class="dropdown-item" href="#">Nigeria</a>
                                  <a class="dropdown-item" href="#">South Africa</a>
                                </div>
                              </li>
                          </ul>
                           
                        </div>
                      </nav>
                </div>
            </div>
        </header>
     <!-- =======ss header end========= -->
     @yield('front_content')
     <!-- =======ss footer========= -->
     <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h3> <strong>  Need help ?  </strong> <a href="tel: 06 0808 5656"><i class="fa fa-phone"></i> 06 0808 5656</a>   <a href="mailto:contact@dabadoc.com "><i class="fa fa-envelope-o" ></i> contact@dabadoc.com </a></h3>
           </div>
          </div>
      </div>
    </div>
     <footer>   
            <div class="container">
             
              <div class="row">
                <div class="col-md-3">
                  
                  <div class="footer_contact">
                    <div><img src="{{ asset('doc_front/assets/img/logo.png')}}" class="img-fluid"/></div>
                    <p>Ipsum is simply dummy text of the love printing and typesetting industry. Lorem  has been the industry's standard dummy text e since the 1500s, when an unknown been </p>
                    <ul class="footer_social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                  </div>         
                </div>
                <div class="col-md-3">
                    <h4> Contact us</h4>
                    <div class="contact_info">
                        <ul>
                            <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> House No 36, Road No 03
          Rampura, Dhaka, Bangladesh</li>
          <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> Username@gmail.com<br>
          Damo@gmail.com</li>
          <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> (+660 256 24857)<br>
          (+660 256 24857)</li>
                        </ul>
                    </div>
                  </div>
                <div class="col-md-3">
                  <h4>DabaDoc </h4> 
                  <ul> 
                    <li><a href="#">About DabaDoc </a></li>
                    <li><a href="#">DabaDoc in the press </a></li>
                    <li><a href="#">Frequently asked Questions</a></li>
                    <li><a href="#"> Recruitment</a></li>
                    <li><a href="#"> Health professionals: join us!</a></li>
                    <li><a href="#"> DabaDoc in English</a></li>
                    <li><a href="#"> DabaDoc بالعربي</a></li>
                    <li><a href="#"> Directory by district Casablanca</a></li>
                     
                  </ul> 
                </div>
                <div class="col-md-3">
                    <div class="suscrible_footer">
                  <h4> Newsletter </h4>
        
                  <form>
                    <p>psum is simply dummy text of the love printing and typesetting industry. Lorem has been the industry's </p>
                      <div class="form-group">
               
                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email address...">
                       <button type="submit">subscribe</button>
                     </div>
                    
                   </form>
                   </div>
                </div>
                
                
              </div>
            
             
            </div>
                 
            
               <div class="copyright"> 
                <div class="container">
                     <p  class="text-center"><a href="#">Privacy Policy</a>  | <a href="#">Terms of use</a> </p> 
                      <p  class="text-center"> © <span>Dabadoc</span>  2018. All Rights Reserved. Designed by Therssoftware </p>
                </div>
               
              </div>
          </footer>
     <!-- =======ss footer end========= -->

     <!-- user login -->
 
<div class="modal fade" id="ss_sign_in" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-body">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            <ul class="nav nav-tabs" id="tabContent">
                <li><a href="#professionalarea" data-toggle="tab" class="show active">Professional Area</a></li>
                <li><a href="#patientsarea" data-toggle="tab">Patients Area</a></li>
                 
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="professionalarea">
                      <div class="professionalarea_top">
                        <button class="btn btn-outline-primary professional_professional">Professional</button>
                        <button class="btn btn-primary professional_assistant">Assistant (e)</button>
                      </div>

                      <div id="professional_professional" class="form-inputs">
                          <form method="POST" action="{{ route('login') }}">
                          @csrf    
                          <div class="form-group"><label class="control-label">Email</label><input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " type="email" name="email" value="{{ old('email') }}" required autofocus id="doctor_email"></div>
                          <div class="form-group"><label class="control-label">Mot de passe</label><input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} " type="password" name="password" required value="{{old('password')}}" id="doctor_password"></div>
                          <input type="submit" name="commit" value="Se connecter" class="btn btn-success " id="doctor-login" >
                          <br>
                          <br>
                          <b>
                          <a href="#">Mot de passe oublié ?</a>
                          </b>
                          </form>
                          <hr>
                          <a class="btn btn-form-connexion btn-default btn-block btn-primary" href="{{ route('doctor.create') }}">Inscrivez-Vous</a>
                      </div>
                      <div id="professional_assistant" class="form-inputs" style="display:none;">
                          <form action="" method="post">    
                            <div class="form-group"><label class="control-label ">Email</label><input class="form-control " type="email" value="" ></div>
                            <div class="form-group"><label class="control-label">Mot de passe</label><input class="form-control " type="password"></div>
                            <input type="submit" name="commit" value="Se connecter" class="btn btn-success" >
                          </form>
                      </div>
                </div> 
                <div class="tab-pane" id="patientsarea">
                    <h2 class="text-center">Have you already made an appointment on DabaDoc?</h2>
                    <h4  class="text-center">Espace Patients</h4>
                    <form action="{{ route('login') }}" method="POST"> 
                        @csrf     
                      <div class="text-center social-btn">
                          <a href="#" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
                          
                    <a href="#" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                      </div>
                  <div class="or-seperator"><b>or</b></div>
                      <div class="form-group">
                        <input type="email" class="form-control input-lg" name="email" placeholder="Username" required="required">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
                      </div>
                         
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-lg btn-block login-btn">Accéder à mes rendez-vous</button>
                      </div>
                  </form>
                  <div class="text-center"><a href="{{ route('password.request') }}">Forget Password?</a></div>
                  <div class="text-center"><span class="text-muted">Don't have an account?</span> <a href="{{route('patients.create')}}">Sign up here</a></div>
                </div>
                </div>    
            </div>
        </div>
        
    </div>
  </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="{{asset('doc_front/assets/js/slick.min.js')}}"></script>
    <script>
       $(document).ready(function() {
        $('.js-example-basic-single').select2();

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
    {{-- <script>
        var input = document.querySelector("#phone");
        
        var input2 = document.querySelector("#phone2"); 
        window.intlTelInput(input,{
            autoHideDialCode: false, 
            defaultCountry: "auto",
            numberType: "MOBILE",
            separateDialCode:true,
            autoPlaceholder:"polite",
            placeholderNumberType:"MOBILE",
            });
            window.intlTelInput(input2,{
            autoHideDialCode: false, 
            defaultCountry: "auto",
            numberType: "MOBILE",
            separateDialCode:true,
            autoPlaceholder:"polite",
            placeholderNumberType:"MOBILE",
            }); 
    </script> --}}
  </body>
</html>

	

	
