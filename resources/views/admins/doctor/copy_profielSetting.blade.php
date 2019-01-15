@extends('layouts.admin_layout')
@section('title') Profile Setting @endsection
@section('admin_content')
<style type="text/css">
	.sidebar {
		display: none!important;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card p-4">
				<div class="card-body d-flex justify-content-between align-items-center">
					<div>
						<h1 class="font-weight-light">Hello, Dr Hasan</h1>
						<button class="btn btn-default navbar-btn">See my profile <i class="fa fa-chevron-right"></i></button>
					</div>
					<div class="text-muted">
						<h5>Your account is still not visible to patients on DabaDoc</h5>
						<span><a href="#">How to confirmmy account?</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Your Practice</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Your Account</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Procedures</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Your Photos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Establishment Affiliations</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="home" role="tabpanel">
					<div class="row">
						<div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                Basic Forms
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Normal Input</label>
                                            <input id="normal-input" class="form-control" value="Input value">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="disabled-input" class="form-control-label">Disabled Input</label>
                                            <input id="disabled-input" class="form-control" value="Input value" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="placeholder-input" class="form-control-label">Placeholder</label>
                                            <input id="placeholder-input" class="form-control" placeholder="Placeholder text">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="required-input" class="require">Required</label>
                                            <input id="required-input" class="form-control" value="Input value">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Static</label>
                                            <p class="form-control-plaintext">email@example.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
						<div class="col-md-6">
							<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24566.332013478932!2d90.43811914048922!3d23.754257218972334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1sen!2sbd!4v1546666999549" width="475" height="450" frameborder="0"  allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="profile" role="tabpanel">
					2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
					dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="tab-pane" id="messages" role="tabpanel">
					3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
					dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</div>
</div>

@endsection