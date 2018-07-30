@extends('main')

@section('content')











        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2>Edit Admin Info!</h2>
                            <h4>Super admin has the access of changing Admins to Super Admins !</h4>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="pe-7s-user"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Admin Info</h4>
                              Please edit the admin name & email to change admin info.Super admin can give access admin to super admin by checking checkbox !
                            </div>
                        </div>

                        

                        <!-- <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="pe-7s-headphones"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Global Support</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.

                            </div>
                        </div> -->

                    </div>
                    <div class="col-md-4 col-md-offset-s1">
                       {!! Form::model($admins,['route' => ['admin.update',$admins->id], 'method'=>'PUT'])  !!}
                            <div class="card card-plain">
                                <div class="content">
                                    <div class="form-group">
                                       {!! Form::text('name', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('email', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="admin" value="1"> Super Admin!<br>
                                    </div>
                                 
                                 
                                </div>

                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-neutral btn-wd">Confirm !</button>
                                    <button class="btn btn-fill  btn-wd" href="{{route('admin.index')}}" >Cancel !</button>
                                </div>
                                


                            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection
