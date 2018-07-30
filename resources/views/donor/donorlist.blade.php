@extends('main')
@section('content')
@section('title',' | Donor List')





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
                                    <th data-field="state" data-checkbox="true"></th>
                                    <th data-field="id" data-sortable="true">DonorID</th>
                                	<th data-field="name" data-sortable="true">DonorName</th>
                                	<th data-field="salary" data-sortable="true">BirthDate</th>
                                	<th data-field="country" data-sortable="true">Address</th>
                                	<th data-field="city">TownShip</th>
                                	<th data-field="city">Phone No</th>
                                	<th data-field="city">Donation Count</th>
                                	<th data-field="city">Donation Date</th>
                                	<th data-field="city">Blood Type</th>
                                	<th data-field="city">PhRd</th>
                                	<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                </thead>
                                <tbody>

                                   
                                    <tr>
                                        <td></td>
                                        <td>{{$donors->donorID}}</td>
                                    	<td>{{$donors->donroName}}</td>
                                    	<td>{{$donors->birthday}}</td>
                                    	<td>{{$donors->address}}</td>
                                    	<td>{{$donors->township->townShip}}</td>
                                    	<td>{{$donors->phNo}}</td>
                                    	<td>{{$donors->count}}</td>
                                    	<td>{{$donors->date}}</td>
                                    	<td>{{$donors->bloodtype->bloodType}}</td>
                                        <td>{{$donors->phRd}}</td>

                                    
                                   
                                      
                                    </tr>

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