@extends('layouts.backEnd.app')

@section('title','Profile')

@push('backCSS')

@endpush
@section('main-content')
<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active" >
                                    <a href="#profile_setting" data-toggle="tab" aria-expanded="false">
                                        <i class="material-icons">face</i> PROFILE SETTING
                                    </a>
                                </li>
                                
                                <li role="presentation" class="">
                                    <a href="#password_change" data-toggle="tab" aria-expanded="false">
                                        <i class="material-icons">lock</i> PASSWORD CHANGE
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <div role="tabpanel" class="tab-pane fade active in"  id="profile_setting">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body">
                                                    <form class="form-horizontal" action="{{ route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="name">Name :</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" value="{{Auth::user()->name}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="email">Email :</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{Auth::user()->email}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="district">District :</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="district" name="district" class="form-control" placeholder="Enter your district" value="{{Auth::user()->district}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="divition">Divition :</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="division" name="division" class="form-control" placeholder="Enter your division" value="{{Auth::user()->division}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="image">Image :</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="file" id="image" name="image" class="form-control" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="about">About :</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea id="about" name="about" class="form-control"> {{Auth::user()->about}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="password_change">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body">
                                                    <form class="form-horizontal" action="{{ route('admin.password.update')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password">Current Password :</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="old_password" name="old_password" class="form-control" placeholder="Enter your current password" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password">New Password :</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your new password" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                <label for="password">Confirm Password :</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter your new password again" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    

@endsection

@push('backJS')

@endpush