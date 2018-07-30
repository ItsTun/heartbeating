@extends('blood')
@section('content')
@section('nav')


<a href="{{route('donor.create')}}"> Dashboard Here!</a>


@endsection






        <div class="user-profile">
                    <div class="author">
                        <img class="avatar" src="../../assets/img/heart.png" alt="...">
                    </div>
                    {!! Form::open(['route'=>'fdonor.store']) !!}
                    <h4>Find Member!</h4>
                     <div class="input-group">
                           
                            <input type="text" name="ID" value="" class="form-control" placeholder="Search...">
                             <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        </div>


                    
                   
                    
                    {!! Form::close() !!}
                </div>
            </form>
        </div>







@endsection