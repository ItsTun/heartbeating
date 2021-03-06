@extends('main')
@section('content')
@section('title',' | Register Donor')

 <div class="container">

   <div class="row">
     <div class="col-md-2"></div>
     <div class="col-md-8">

       
        <div class="card">
                            <div class="header text-center">Donor Registiration Form !</div>
                            <div class="content">
                              @if(count($errors)>0)
                              
                                <ul>
                                  @foreach($errors->all() as $error)
                                  <li class="alert alert-info">{{$error}}</li>
                                  @endforeach
                                </ul>

                              
                              @endif
                              {!! Form::open(['route'=>'donor.index']) !!}
                                   <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">DonorID</label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="donorID"
                                                           id="donorID" 
                                                           placeholder="ex: 1111"
                                                           required="true" 
                                                           
                                                         
                                                           

                                                           
                                                    />
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Donor Name</label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="donroName"
                                                           id="donroName" 
                                                           required="true"
                                                           placeholder="ex: Tun Han Mra"
                                                    />
                                                </div>
                                            </div>






                                        </div>



                                        <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">Father Name</label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="fatherName"
                                                           id="fatherName" 
                                                           placeholder="ex: U Kyaw Htoo"
                                                         
                                                           
                                                    />
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">NRC No</label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="nrcNo"
                                                           id="nrcNo" 
                                                           required="true"
                                                           placeholder="ex: 11/(patananaing)/03456"
                                                    />
                                                </div>
                                            </div>


                                            



                                        </div>




                                         <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">Bithday<star>*</star></label>
                                                     <input type="text" id="birthday" class="form-control datepicker"    
                                                      name="birthday" placeholder="Please Pick Donor BirthDate"/>
                                                </div>
                                            </div>



                                             <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Age</label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="age"
                                                           id="age" 
                                                           required="true"
                                                           placeholder="ex: 23"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                   



                                    <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">Address<star>*</star></label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="address"
                                                           id="address" 

                                                           
                                                           placeholder="ex: 12/MICT"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">Township<star>*</star></label>

                                                    <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
                                                     -->

                                                    <select name="township_id" id="township_id" class="form-control">
                                                         @foreach($towns as $town)
                                              <option value='{{ $town->id  }}'>{{ $town->townShip }}</option>
                                                   @endforeach
                                                        
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                   
                                                    <label class="control-label">Phone No</label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="phNo"
                                                           id="phNo" 
                                                           required="true"
                                                           placeholder="ex: 09-440-180-635"
                                                />
                                              

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                   
                                                    <label class="control-label">Donation Count</label>
                                                    <input class="form-control"
                                                           type="text"
                                                           name="count"
                                                           id="count" 
                                                           required="true"
                                                           placeholder="ex: 12"
                                                    />
                                              

                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Donation Date</label>
                                                      <input type="text" class="form-control datepicker" name="date" id="date" placeholder="Please Pick Donation Date"/>
                                                </div>
                                            </div>

                                        </div>

                                    



                                    <div class="row">
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">BloodType</label>

                                                    <!--     IMPORTANT! - the "bootstrap select picker" is not compatible with jquery.validation.js, that's why we use the "default select" inside this wizard. We will try to contact the guys who are responsibble for the "bootstrap select picker" to find a solution. Thank you for your patience.
                                                     -->

                                                    <select name="bloodytype_id" id="bloodytype_id" class="form-control">
                                                       <option selected="" disabled="">- Type -</option>
                                                        @foreach($bloods as $blood)
                                                  <option value='{{ $blood->id  }}'>{{ $blood->bloodType }}</option>
                                                  @endforeach
                                                        
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                   
                                                    <label class="control-label">PhRD</label>
                                                    <select name="phRd" id="phRd" class="form-control">
                                                        <option selected="" disabled="">- PhRd -</option>
                                                        <option value="+">+</option>
                                                        <option value="-">-</option>
                                                        <option value="unknown">unknown</option>
                                                        
                                                        
                                                    </select>
                                              

                                                </div>
                                            </div>

                                           </div>  
                                         </div>  




                              <div class="footer text-center">
                                   <button type="submit" class="btn btn-fill btn-info">Submit</button>
                                </div>
                            {!! Form::close() !!}
                                    
                                
                            </div>
                        </div> <!-- end card -->
     </div>
     <div class="col-md-2"></div>
   </div>
 </div>     



@endsection