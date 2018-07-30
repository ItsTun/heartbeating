@extends('main')
@section('content')
@section('title',' | Donor Index')





        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>

                           <table id="bootstrap-table" class="table">
                                <thead>
                                    
                                    <th class="text-center">#</th>
                                    <th class="text-center">DONOR ID</th>
                                    <th data-sortable="true">DONOR NAME</th>
                                    <th>BIRTHDAY</th>
                                    <th  class="text-center" >ADDRESS</th>
                                    <th class="text-center">TOWNSHIP</th>
                                    <th class="text-center">PHONE NO</th>
                                    <th class="text-center">COUNT</th>
                                    <th class="text-center">DONATION DATE</th>
                                    <th class="text-center">BLOODTYPE</th>
                                    <th class="text-center">PHRD</th>
                                    <th data-field="" class="td-actions text-right" >Actions</th>
                                </thead>
                                <tbody>
                                    @foreach($donors as $donor)
                                    <tr>
                                       
                                         <td></td>
                                        <td>{{$donor->donorID}}</td>
                                        <td>{{$donor->donroName}}</td>
                                          
                                        <td>{{$donor->birthday}}</td>
                                        <td>{{$donor->address}}</td>
                                        <td>{{$donor->township->townShip}}</td>
                                        <td>{{$donor->phNo}}</td>
                                        <td>{{$donor->count}}</td>
                                        <td>{{$donor->date}}</td>
                                        <td>{{$donor->bloodtype->bloodType}}</td>
                                        <td>{{$donor->phRd}}</td>
                                        <td>
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
                                        <h5>Birthdate : {{$donor->birthday}}</h5>
                                        
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