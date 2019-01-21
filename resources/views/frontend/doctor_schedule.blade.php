@extends('layouts.logged_in_doctor_layout')
@section('doctor_content')
<!-- =======ss body========= -->
<div class="main_area">
    <div class="container">
        <div class="row">
           
            <div class="col-sm-12" id="ss_registration_content">
                <div class="ss_registration_content_top">
                   
                    <div class="doctor_booking">
                        <div class="ss_heading">
                            <h3>Configuration  <span>Planning</span> </h3>
                        </div>
                        <div class="alert alert-info"> 
                        Choose your schedules for your days of work. </font><font style="vertical-align: inherit;">Select the average length of an appointment
                        </div>
                        <div class="row justify-content-md-center">
                         <div class="col-sm-8">
                           
                            <form action="{{url('/doctor_schedule',Auth::user()->id)}}"  method="post" class="probootstrap-form" enctype="multipart/form-data">
                                
                                {{csrf_field()}}
                                <?php $i = 1;?>
                                @foreach ($schedules as $schedule)
                                <div class="row text-center">
                                    
                                    <div class="col-sm-2 text-left"> <strong>{{$days[$i-1]}}    
                                    </strong></div>
                                    
                                    <div class="col-sm-1">Of</div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker<?=$i;?>" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker<?=$i;?>" name="start[]" value="{{$schedule->start}}"  />
                                                <div class="input-group-append" data-target="#datetimepicker<?=$i;?>" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">AT</div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="input-group date" id="endtimepicker<?=$i;?>" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#endtimepicker<?=$i;?>" name="end[]" value="{{$schedule->end}}"  />
                                                <div class="input-group-append" data-target="#endtimepicker<?=$i;?>" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{--   @endforeach --}}
                                
                                <?php $i++;?>
                                @endforeach

                                <div class="form-group ss_extra_fg">
                                    <label for="exampleFormControlSelect1"> <strong> Average length of an appointment </strong></label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="duration">
                                        <option  value="15">15</option>
                                        <option {{ $schedule->duration == 20 ? 'selected':'' }} value="20">20</option>
                                        <option {{ $schedule->duration == 25 ? 'selected':'' }} value="25">25</option>
                                        <option {{ $schedule->duration == 30 ? 'selected':'' }} value="30">30</option>
                                        <option {{ $schedule->duration == 35 ? 'selected':'' }} value="35">35</option>
                                        <option {{ $schedule->duration == 40 ? 'selected':'' }} value="40">40</option>
                                        <option {{ $schedule->duration == 45 ? 'selected':'' }} value="45">45</option>
                                        <option {{ $schedule->duration == 50 ? 'selected':'' }} value="50">50</option>
                                        <option {{ $schedule->duration == 55 ? 'selected':'' }} value="55">55</option>
                                        <option {{ $schedule->duration == 60 ? 'selected':'' }} value="60">60</option>
                                    </select>
                                    <label>Minutes</label>
                                </div>
                                <button type="submit" value="submit" class="btn btn-success">Saved</button>
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