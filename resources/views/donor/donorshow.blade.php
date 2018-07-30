@extends('main')
@section('content')





<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header text-center">
                                <h4 class="title">Member Info!</h4>
                                <p class="category">The following memeber  information has been saved ! </p>
                                <br />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bigboy">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-center">Donor ID</th>
                                            <th class="text-center">Donor Name</th>
                                            <th class="text-center">Father Name</th>
                                            <th class="text-center">NRC No</th>
                                             <th class="text-center">Birthday</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Township</th>
                                             <th  class="text-center">Phone No</th>
                                              <th class="text-center">Count</th>
                                               <th class="text-center" >Date</th>
                                                <th class="text-center" >Blood Type</th>
                                                 <th class="text-center">PhRd</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td></td>
                                             <td class="text-center">{{$donors->donorID}}</td>
                                              <td class="text-center">{{$donors->donroName}}</td>
                                                 <td class="text-center">{{$donors->fatherName}}</td>
                                                    <td class="text-center">{{$donors->nrcNo}}</td>

                                               
                                                 <td class="text-center">{{$donors->birthday}}</td>
                                                   <td class="text-center"> {{$donors->address}}</td>
                                                     <td class="text-center">{{$donors->township->townShip}}</td>
                                                       <td class="text-center">{{$donors->phNo}}</td>
                                                         <td class="text-center">{{$donors->count}}</td>
                                                           <td class="text-center">{{$donors->date}}</td>
                                                             <td class="text-center">{{$donors->bloodtype->bloodType}}</td>
                                                               <td class="text-center"> {{$donors->phRd}}</td>

                                            
                                        </tr>

                                        

                                    </tbody>
                                </table>





                            </div>
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> 






@endsection