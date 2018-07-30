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
                                   
                                    <th data-sortable="true" class="text-center">Admin Name</th>
                                     


                                    <th class="text-center">Email</th>
                                    <th class="text-center">Admin Type</th>
                                    <th  class="text-center" >Created at</th>
                                   
                                    <th data-field="" class="td-actions text-right" >Actions</th>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td></td>
                                       
                                        <td class="">{{$user->name}}</td>
                                        <td class="">{{$user->email}}</td>
                                        @if($user->admin=='1')
                                         <td class="">Super Admin</td>
                                         @else
                                          <td class="">Admin</td>
                                          @endif

                                          
                                        <td class="">{{$user->created_at}}</td>
                                       
                                        <td>
                                                              <a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="{{route('admin.edit',$user->id)}}">
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
                                        <h4 class="modal-title" id="myModalLabel">Are you sure to delete Admin Info !</h4>
                                      </div>
                                      <div class="modal-body">

                                     
                                       

                                        
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                                        
                                        {!! Form::open(['route' =>['admin.destroy', $user->id], 'method' => 'DELETE'])!!}


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