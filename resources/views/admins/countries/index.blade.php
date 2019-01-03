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
                                        <th>Country Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($countries as $key => $country )
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td class="text-nowrap">{{$country->country_name}}</td>
                                        <td>{{$country->status}}</td>
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