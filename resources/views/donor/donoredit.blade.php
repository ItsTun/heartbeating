@extends('main')
@section('content')
@section('title',' | Edit Donor')

 <div class="container">
   <div class="row">
     <div class="col-md-2"></div>
     <div class="col-md-8">
       
        <div class="card">
                            <div class="header text-center">Edit member Info !</div>
                            <div class="content">
                         {!! Form::model($donors,['route' => ['donor.update',$donors->id], 'method'=>'PUT'])  !!}
                                   <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">DonorID</label>
                                                    {!! Form::text('donorID', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Donor Name</label>
                                                     {!! Form::text('donroName', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                                </div>
                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                   <label class="control-label">Father Name</label>
                                                     {!! Form::text('fatherName', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">NRC No</label>
                                                   {!! Form::text('nrcNo', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                                </div>
                                            </div>


                                            



                                        </div>





                                         <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">Bithday<star>*</star></label>
                                                      {!! Form::text('birthday', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                   {!! Form::text('age', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                                </div>
                                            </div>
                                        </div>

                                   



                                    <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">Address<star>*</star></label>
                                                     {!! Form::text('address', null,["class"=>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">Township<star>*</star></label>

                                                    <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
                                                     -->

                                                    {!! Form::select('township_id', $towns, null, ['class'=>'form-control']) !!}

                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                   
                                                    <label class="control-label">Phone No</label>
                                                    {!! Form::text('phNo', null,["class"=>'form-control']) !!}
                                              

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                   
                                                    <label class="control-label">Donation Count</label>
                                                     {!! Form::text('count', null,["class"=>'form-control']) !!}
                                              

                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Donation Date</label>
                                                      {!! Form::text('date', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                                </div>
                                            </div>

                                        </div>

                                   



                                    <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">BloodType<star>*</star></label>

                                                    <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
                                                     -->

                                                     {!! Form::select('bloodytype_id', $bloods, null, ['class'=>'form-control','disabled'=>'disabled']) !!}
                                                        
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                   
                                                    <label class="control-label">PhRD</label>
                                                     {!! Form::text('phRd', null,["class"=>'form-control','disabled'=>'disabled']) !!}
                                              

                                                </div>
                                            </div>

                                           </div>  

                                            </div>



                                    <div class="form-group">
                   
                                    </div>

                              <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-info">Save Changes !</button>
                                   <button class="btn btn-fill btn-neutral btn-wd" href="{{route('donor.index')}}" >Cancel !</button>
                                </div>
                            {!! Form::close() !!}
                                    
                                
                            </div>
                        </div> <!-- end card -->
     </div>
     <div class="col-md-2"></div>
   </div>
 </div>     



@endsection