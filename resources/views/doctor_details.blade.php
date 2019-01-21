@extends('layouts.front_layout')
@section('front_content')
<div class="main_area">
	<div class="cover_image">
		<img src="{{ asset('doc_front/assets/img/c_p.png')}}" class="img-fluid">
		<div class="profile_content_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-9">
						<h3>{{ $doctor->title }} {{ $doctor->first_name}} {{ $doctor->last_name}}</h3>
						<h6>{{ strtoupper ($doctor->user_type) }}</h6>
						<span class="doc-stars"><span style="width:80%"></span> </span> 3500 views
						<button class="nav-link  btn btn-primary ">MAKE AN APPOINTMENT!</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 dctor_details_area" id="left_sitebar">
				<div class="wegith_area">
					<div class="profile_img"> <img src="{{URL::to($doc_image[0]->image)}}" class="img-fluid">
						<h3>Contact info</h3>
						<p> <i class="fa fa-map-marker"></i>
							<span>{{ $doctor->address}}</span>
						</p>
						<p> <i class="fa fa-map-marker"></i>
							<span>{{ $doctor->image}}</span>
						</p>
						<p> <i class="fa fa-phone"></i>
							<span>{{ $doctor->phone_no }}</span>
						</p>
						<p> <i class="fa fa-envelope-o"></i>
							<span>{{ $doctor->email }}</span>
						</p>
						<p><i class="fa fa-fax"></i> <span></span> </p>
						<p><i class="fa fa-link"></i> <a href="#" target="_blank"></a></p>
						<ul class="profile_social">
							<li class="tg-facebook"><a target="_blank" href="#" style="background:#3b5998"><i class="fa fa-facebook"></i></a></li>
							<li class="tg-twitter"><a target="_blank" href="#" style="background:#55acee"><i class="fa fa-twitter"></i></a></li>
							<li class="tg-linkedin"><a target="_blank" href="#" style="background:#0177b5"><i class="fa fa-linkedin"></i></a></li>
							<li class="tg-skype"><a target="_blank" href="skype:steve?call" style="background:#00aff0"><i class="fa fa-skype"></i></a></li>
							<li class="tg-googleplus"><a target="_blank" href="#" style="background:#dc4a38"><i class="fa fa-google-plus"></i></a></li>
							<li class="tg-pinterestp"><a target="_blank" href="#" style="background:#bd081c"><i class="fa fa-pinterest-p"></i></a></li>
							<li class="tg-tumblr"><a target="_blank" href="#" style="background:#36465d"><i class="fa fa-tumblr"></i></a></li>
							<li class="tg-instagram"><a target="_blank" href="#" style="background:#c53081"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="wegith_area">
					<h3>Contact Form</h3>
					<form method="get" action="search.html">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" placeholder="Phone">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Send</button>
					</form>
				</div>
				<div class="wegith_area">
					<h3>Social share</h3>
					<ul class="ss_doctore_sare">
						<li class="tg-facebook"><a target="_blank" href="#" style="background:#3b5998"><i class="fa fa-facebook"></i> Share on Facebook</a> </li>
						<li class="tg-twitter"><a target="_blank" href="#" style="background:#55acee"><i class="fa fa-twitter"></i> Share on Twitter</a></li>
						<li class="tg-linkedin"><a target="_blank" href="#" style="background:#0177b5"><i class="fa fa-linkedin"></i> Share on Likedin</a></li>
						<li class="tg-googleplus"><a target="_blank" href="#" style="background:#dc4a38"><i class="fa fa-google-plus"></i> Share on Google +</a></li>
						
					</ul>
				</div>
				
			</div>
			<div class="col-sm-9" id="right_main_content">
				<div class="doctor_details">
					<div class="google_map_top">
						<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14606.945101469377!2d90.4266586466782!3d23.756782106754805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdoctor!5e0!3m2!1sen!2sbd!4v1546778299870" width="600" height="250" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
					</div>
					<h3>About {{ $doctor->title }} {{ $doctor->first_name}} {{ $doctor->last_name}}</h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam. Eascxcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.  </p>
					<p>   In just three simple steps, DocDirect will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find your nearest healthcare facility.</p>
					
					<h3>Languages</h3>
					<p> 
						<span class="btn btn-light">
							@if(isset($doc_prac[0]->language))
							{{ $doc_prac[0]->language }}
							@else
							{!!'Not Found'!!}
                            @endif

							</span>
					</p>
					<h3>Specialties</h3>
					<div class="table-responsive">
						<table class="table">
							
							<tbody>
								<tr>
									<td>{{$doctor->specialty->spcl_name}}</td>
									
								</tr>
								

								<!-- <tr>
									<td>Dentist</td>
									<td>Dietician</td>
								</tr>
								<tr>
									<td>Eye, Nose, Ear (ENT) specialist</td>
									<td>Pediatrician</td>
								</tr>
								<tr>
									<td>Physiotherapist</td>
									<td> Plastic surgeon</td>
								</tr>
								<tr>
									<td>Physiotherapist</td>
									<td> Primary care doctor</td>
								</tr> -->


							</tbody>
						</table>
					</div>
					<h3>Experience</h3>
					<ul>
						<li>
							<h5>Lecturer, Department of gastroenterology  (May, 2010 - Jul, 2012)</h5>
							<p><small>Co-Ed/Women/Boys</small></p>
							<p>The Cardiovascular & Respiratory Systems category covers resources concerned with all aspects of cardiovascular and thoracic surgery and respiratory diseases. Topics include circulation, cardiovascular technology and measurement, cardiovascular pharmacology and therapy, hypertension, heart and lung transplantation, arteries, arteriosclerosis, thrombosis, angiology, perfusion, stroke, as well as all types of respiratory and lung diseases.</p>
						</li>
						<li>
							<h5>Lecturer, Department of gastroenterology  (May, 2010 - Jul, 2012)</h5>
							<p><small>Co-Ed/Women/Boys</small></p>
							<p>The Cardiovascular & Respiratory Systems category covers resources concerned with all aspects of cardiovascular and thoracic surgery and respiratory diseases. Topics include circulation, cardiovascular technology and measurement, cardiovascular pharmacology and therapy, hypertension, heart and lung transplantation, arteries, arteriosclerosis, thrombosis, angiology, perfusion, stroke, as well as all types of respiratory and lung diseases.</p>
						</li>
						<li>
							<h5>Lecturer, Department of gastroenterology  (May, 2010 - Jul, 2012)</h5>
							<p><small>Co-Ed/Women/Boys</small></p>
							<p>The Cardiovascular & Respiratory Systems category covers resources concerned with all aspects of cardiovascular and thoracic surgery and respiratory diseases. Topics include circulation, cardiovascular technology and measurement, cardiovascular pharmacology and therapy, hypertension, heart and lung transplantation, arteries, arteriosclerosis, thrombosis, angiology, perfusion, stroke, as well as all types of respiratory and lung diseases.</p>
						</li>
						<li>
							<h5>Lecturer, Department of gastroenterology  (May, 2010 - Jul, 2012)</h5>
							<p><small>Co-Ed/Women/Boys</small></p>
							<p>The Cardiovascular & Respiratory Systems category covers resources concerned with all aspects of cardiovascular and thoracic surgery and respiratory diseases. Topics include circulation, cardiovascular technology and measurement, cardiovascular pharmacology and therapy, hypertension, heart and lung transplantation, arteries, arteriosclerosis, thrombosis, angiology, perfusion, stroke, as well as all types of respiratory and lung diseases.</p>
						</li>
					</ul>
					<h3>Prices/Services List</h3>
					<div id="accordion">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Medical/Surgical Unit
								</button>
								<span class="float-right">$1500 </span>
								</h5>
							</div>
							
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Inpatient Rehabilitation
								</button>
								<span class="float-right"> $13182.79</span>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Inpatient Rehabilitation
								</button>
								<span class="float-right"> $1091.44</span>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
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