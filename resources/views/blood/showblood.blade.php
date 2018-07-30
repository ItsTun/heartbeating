@extends('blood')
@section('content')
@section('title',' | Show Blood')








<div class="container">
<div class="row">
                    <div class="col-md-12">
                        
                            <!-- <div class="header text-center">
                                <h4 class="title white" >Table Big Boy</h4>
                                <p class="category">A table for content management</p>
                                <br />
                            </div> -->
                           
                        <!--  end card  -->
                         <div class="card">
                            <div class="header text-center">
                                Available Donors !
                            </div>
                            <div class="content table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                           
                                           
                                            <th class="text-center">DONOR NAME</th>
                                            
                                            
                                            <th class="text-center">TOWNSHIP</th>
                                            <th class="text-center">BLOOD TYPE</th>
                                            <th class="text-center">PHONE NO</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($donors as $donor)
                                        <tr>
                                            
                                            
                                            <td class="text-center">
                                                {{$donor->donroName}}
                                            </td>
                                           
                                            
                                            <td class="text-center"> {{$donor->township->townShip}}</td>
                                            <td class="text-center"> {{$donor->bloodtype->bloodType}}</td>
                                            <td class="text-center">
                                                {{$donor->phNo}}
                                            </td>
                                            
                                        </tr>
                                       

                                        @endforeach
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col-md-12 -->
                </div> 



</div>



@endsection