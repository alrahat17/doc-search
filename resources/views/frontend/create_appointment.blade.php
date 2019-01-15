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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> 
    <link rel="stylesheet" type="text/css" href="{{asset('doc_front/assets/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="assets/css/intlTelInput.min.css"/>
    <link href="{{asset('doc_front/assets/css/style.css')}}" rel="stylesheet">
    <title>.:: Doctors and Online Appointment - DabaDoc ::.</title>
  </head>
  <body>
    <!-- =======ss header========= -->
        <header>
            <div class="container">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"><img src="{{URL::to('doc_front/assets/img/logo.png')}}" class="img-fluid"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                         
                        <div class="navbar-collapse collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav ">
                                        <li class="nav-item">
                                          <a class="nav-link " href="doctor_dashboard.html">Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html" >Diary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="doctor_message.html">Messages</a>
                                        </li>
                                        
                                        <form class="form-inline my-2 my-lg-0 inline-search">
                                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn  my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-user"></i>  Profile
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item "> Dr. Floor Ssssssss</a>
                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item " href="#"> <i class="fa fa-user"></i> See my profile</a>
                                                <a class="dropdown-item" href="doctor_profile_edit.html"><i class="fa fa-pencil"> </i> Edit my profile</a> 
                                                <a class="dropdown-item" href="index.html"><i class="fa fa-sign-out"></i> Sign Out</a>
                                            </div>
                                        </li> 
                                      </ul>
                                       
                           
                        </div>
                      </nav>
                </div>
            </div>
        </header>
     <!-- =======ss header end========= -->
     <!-- =======ss body========= -->
        <div class="main_area">
            <div class="container">
                <div class="row">
                     
                    <div class="col-sm-12" id="ss_registration_content">
                        <div class="ss_registration_content_top">
                             
                            <div class="doctor_booking">
                                    <div class="ss_heading">
                                            <h3>Your current   <span>schedule</span> </h3>
                                            </div>
                          <form class="form-inline">  
                                <div class="row" id="ss_registration_content_edit">
                                   <?php //echo '<pre>';print_r($schedules);?>

                                    @foreach($schedules as $key => $val)
                                    <?php //echo '<pre>';print_r($val['start']);?>
                                    <div class="col-sm-4">
                                        <h4>{{$val['day']}}</h4>

                                        <?php if(isset($val['start'])){foreach($val['start'] as $schedule){?>
                                        <div class="ss_cock_ap">
                                          @php
                                            //$endTime = $schedule->modify('+20 minutes')->format('H:i');
                                          $a =20;
                                            $dur = '-'.$a.'minutes';
                                            $end = date('H:i',strtotime($dur,strtotime($schedule)));

                                          @endphp
                                         
                                          <div class="input-group date" id="sdatetimepicker'+i+'" data-target-input="nearest"> <input type="text"  class="form-control datetimepicker-input" value="{{$end}}" data-target="#sdatetimepicker'+i+'"/ ><div class="input-group-append" data-target="#sdatetimepicker'+i+'" data-toggle="datetimepicker"> <div class="input-group-text"><i class="fa fa-clock-o"></i></div></div></div>

                                          <div></div>
                                          <div class="input-group date" id="sdatetimepickerd'+i+'" data-target-input="nearest"> <input type="text" class="form-control datetimepicker-input" value="{{$schedule}}" data-target="#sdatetimepickerd'+i+'"/><div class="input-group-append" data-target="#sdatetimepickerd'+i+'" data-toggle="datetimepicker"> <div class="input-group-text"><i class="fa fa-clock-o"></i></div></div></div> <span class="ss_close_d"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <?php }}?>
                                        
                                        
                                        <div class="add_time_area">  </div>
                                        <button type="button" class="add_time_btn monday btn btn-primary">+</button>
                                    </div>
                                    @endforeach
                                    
                                    
                                </div>
                            </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- =======ss body end========= -->
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
                    <div><img src="{{URL::to('doc_front/assets/img/logo.png')}}" class="img-fluid"/></div>
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
                          <form action="" method="post">	
                          <div class="form-group"><label class="control-label">Email</label><input class="form-control " type="email" value="" name="doctor[email]" id="doctor_email"></div>
                          <div class="form-group"><label class="control-label">Mot de passe</label><input class="form-control " type="password" name="doctor[password]" id="doctor_password"></div>
                          <input type="submit" name="commit" value="Se connecter" class="btn btn-success " id="doctor-login" >
                          <br>
                          <br>
                          <b>
                          <a href="#">Mot de passe oublié ?</a>
                          </b>
                          </form>
                          <hr>
                          <a class="btn btn-form-connexion btn-default btn-block btn-primary" href="#">Inscrivez-Vous</a>
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
                    <form action="" method="post">		
                      <div class="text-center social-btn">
                          <a href="#" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
                          
                    <a href="#" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                      </div>
                  <div class="or-seperator"><b>or</b></div>
                      <div class="form-group">
                        <input type="email" class="form-control input-lg" name="username" placeholder="Username" required="required">
                      </div>
                         
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-lg btn-block login-btn">Accéder à mes rendez-vous</button>
                      </div>
                  </form>
                  <div class="text-center"><span class="text-muted">Don't have an account?</span> <a href="patients_signup.html">Sign up here</a></div>
                </div>  
            </div>
        </div>
        
    </div>
  </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('doc_front/assets/js/jquery-3.3.1.min.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/14.0.6/js/intlTelInput.min.js"></script>    
    <script src="{{asset('doc_front/assets/js/jquery-ui.min.j')}}" ></script>
   
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
  
    <script type="text/javascript">
       $(function () {
        $('#datetimepicker1,#datetimepicker2,#datetimepicker3,#datetimepicker4,#datetimepicker5,#datetimepicker6,#datetimepicker7,#datetimepicker8,#datetimepicker9,#datetimepicker10,#datetimepicker11,#datetimepicker12,#datetimepicker13,#datetimepicker14').datetimepicker({
            format: 'LT'
        });
    });
  
    </script>
    <script>
         
       $(document).ready(function() {
        
        $(".ss_close_d").click(function () {
 $(this).parents(".ss_cock_ap").remove();
});
 
        var i=0;
        $(".add_time_btn.monday, .add_time_btn.tuesday, .add_time_btn.wednesday, .add_time_btn.thursday,.add_time_btn.friday,.add_time_btn.saturday,.add_time_btn.sunday").click(function() {
            i++; i.toString();
        var domElement = $('<div class="ss_cock_ap"><div class="input-group date" id="sdatetimepicker'+i+'" data-target-input="nearest"> <input type="text"  class="form-control datetimepicker-input" data-target="#sdatetimepicker'+i+'"/><div class="input-group-append" data-target="#sdatetimepicker'+i+'" data-toggle="datetimepicker"> <div class="input-group-text"><i class="fa fa-clock-o"></i></div></div></div><div class="input-group date" id="sdatetimepickerd'+i+'" data-target-input="nearest"> <input type="text" class="form-control datetimepicker-input" data-target="#sdatetimepickerd'+i+'"/><div class="input-group-append" data-target="#sdatetimepickerd'+i+'" data-toggle="datetimepicker"> <div class="input-group-text"><i class="fa fa-clock-o"></i></div></div></div> <span class="ss_close_d"><i class="fa fa-times-circle" aria-hidden="true"></i></span></div>');
        
        $(this).before(domElement);
        $('#sdatetimepicker'+i).datetimepicker({
            format: 'LT'
        });
        $('#sdatetimepickerd'+i).datetimepicker({
            format: 'LT'
        });
parseInt(i);
    });
    
   
        $('#calendar').fullCalendar({
            header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-03-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-03-01',
        },
        {
          title: 'Long Event',
          start: '2018-03-07',
          end: '2018-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-03-11',
          end: '2018-03-13'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T10:30:00',
          end: '2018-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-03-28'
        }
      ]
 

          });
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
     
  </body>
</html>