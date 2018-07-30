@extends('main')

@section('content')











        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2 class="text-center">Needed Super Admin Access !</h2>
                            <h4></h4>
                            <hr />
                        </div>
                    </div>
                    

                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            
                            <h4>2nd Credentials are restricted to Create New Admin (or) Delete Member Info!</h4>
                            <hr />
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
                   

                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-8 col-md-offset-5">


                                   
                                    <a class="btn btn-fill btn-info btn-wd" href="{{ route('donor.index') }}">
                                    {{ __('Back to Dashboard !') }}
                                </a>

                    </div>
                </div>    

            </div>
        </div>
@endsection
