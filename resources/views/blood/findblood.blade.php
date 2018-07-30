@extends('blood')
@section('content')
@section('title',' | Find Blood')




                <div class="user-profile">
                    <div class="author">
                        <img class="avatar" src="../../assets/img/heart.png" alt="...">
                    </div>
                     {!! Form::open(['route'=>'blood.store']) !!}
                    <h4>ေသြးရွာမည္ </h4>
                    <div class="form-group">
                        <select data-title="ေသြးအမ်ိဳးအစားေရြးမည္" name="type" id="type" class="selectpicker" data-style="btn-info btn-fill btn-block" data-menu-style="dropdown-blue">
                                 
                             @foreach($bloods as $blood)
                                 <option value='{{ $blood->id  }}'>{{ $blood->bloodType }}</option>
                             @endforeach

    
                        <!--  <option value="1">O</option>
                           <option value="1">A</option>
                             <option value="1">B</option> -->






                         </select>
                    </div>


                    <div class="form-group">
                        <select data-title="ျမိဳ့နယ္ေရြးမည္" name="town"  id="town" class="selectpicker" data-style="btn-info btn-fill btn-block" data-menu-style="dropdown-blue">
                                               

                                  @foreach($towns as $town)
                                 <option value='{{ $town->id  }}'>{{ $town->townShip }}</option>
                                 @endforeach
<!-- 
                                 <option value="1">Hlaing</option>
                           <option value="1">Hladan</option>
                             <option value="1">Lathar</option> -->
                                            </select>
                    </div>
                    <button type="submit" class="btn btn-neutral btn-round btn-fil btn-wd">ရွာမည္</button>
                    
                    {!! Form::close() !!}
                </div>
            </form>
        </div>



@endsection