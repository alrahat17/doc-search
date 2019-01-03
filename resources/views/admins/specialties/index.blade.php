@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Bordered Table
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Specialty</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($specialties as $key => $specialty )
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td class="text-nowrap">{{$specialty->spcl_name}}</td>
                                        <td>{{$specialty->spcl_des}}</td>
                                        <td>{{$specialty->category->cat_name}}</td>
                                        <td>{{$specialty->status}}</td>
                                        <td>Action</td>
                                    </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection