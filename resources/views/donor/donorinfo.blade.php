@extends('main')
@section('content')
@section('title',' | member Info')





        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header text-center">
                                Donor Info !
                            </div>

                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>

                            <table id="table table-striped" class="table">
                                <thead>
                                    
                                    <th class="">#</th>
                                    <th class="">DONOR ID</th>
                                    <th data-sortable="true">DONOR NAME</th>
                                     


                                    <th>BIRTHDAY</th>
                                    <th  class="" >ADDRESS</th>
                                    <th class="">TOWNSHIP</th>
                                    <th class="">PHONE NO</th>
                                    <th class="">COUNT</th>
                                    <th class="">DONATION DATE</th>
                                    <th class="">BLOODTYPE</th>
                                    <th class="">PHRD</th>
                                    <th data-field="" class="td-actions text-right" >Actions</th>
                                </thead>
                                <tbody>
                                    @foreach($donors as $donor)
                                    <tr>
                                        <td></td>
                                       
                                        <td class="text-center">{{$donor->donorID}}</td>
                                        <td class="text-center">{{$donor->donroName}}</td>
                                          
                                        <td class="text-center">{{$donor->birthday}}</td>
                                        <td class="text-center">{{$donor->address}}</td>
                                        <td class="text-center">{{$donor->township->townShip}}</td>
                                        <td class="text-center">{{$donor->phNo}}</td>
                                        <td class="text-center">{{$donor->count}}</td>
                                        <td class="text-center">{{$donor->date}}</td>
                                        <td class="text-center">{{$donor->bloodtype->bloodType}}</td>
                                        <td class="text-center">{{$donor->phRd}}</td>
                                        <td class="text-center">
                                            <a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="{{route('donor.show',$donor->id)}}">
                    <i class="fa fa-image"></i>
                </a>
                                            <a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="{{route('donor.edit',$donor->id)}}">
                                            <i class="fa fa-edit"></i>
                                             </a>
                                        

                                        <!-- Button trigger modal -->
                                <button type="button" class="btn btn-simple btn-danger btn-icon table-action remove" data-toggle="modal" data-target="#myModal">
                                  Delete
                                </button>



                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Are you sure to delete Member Info !</h4>
                                      </div>
                                      <div class="modal-body">

                                        <h5>DonorID    : {{$donor->donorID}}</h5>
                                        <h5>DonorName  : {{$donor->donroName}} </h5>
                                        <h5>Birthdate  : {{$donor->birthday}}</h5>
                                        
                                        <p> .</p>
                                        <p>         .</p>
                                        <p>         .</p>
                                        
                                        <h5>Phone No  : {{$donor->phNo}}</h5>

                                        
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                        
                                        {!! Form::open(['route' =>['donor.destroy', $donor->id], 'method' => 'DELETE'])!!}


           {!! Form::submit('Delete',['class'=>'btn btn-success btn-danger']) !!}


           {!! Form::close() !!}
                                      </div>
                                    </div>
                                  </div>
                                </div>





                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->

            </div>
        </div>

        

    </div>
</div>







@endsection