@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Detail Staff</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form" action="{{{ Request::fullUrl() }}}" method="POST">

                <div class="form-group">
                    <label for="Name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name" value="{{ $staff->name }}">
                </div>
                <div class="form-group">
                    <label for="Surname">Surname</label>
                        <input type="text" name="surname" class="form-control" placeholder="surname" value="{{ $staff->surname }}">
                </div>
                    <label class="fancy-radio">
                        <input name="gender" value="male" type="radio" @if( $staff->gender == "male" ) checked @endif>
                        <span><i></i>Male</span>
                    </label>
                    <label class="fancy-radio">
                        <input name="gender" value="female" type="radio" @if( $staff->gender == "female" ) checked @endif>
                        <span><i></i>Female</span>
                    </label>
                <div class="form-group">
                    <label for="Dob">Date of Birth</label>
                        <input type="text" name="dob" class="form-control" placeholder="yy/mm/dd" value="{{ $staff->dob }}">
                </div>
                <div class="form-group">
                    <label for="Address">Adress</label>
                    <textarea class="form-control" name="address" placeholder="address" rows="4">{{ $staff->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="Tel">Tel</label>
                    <input type="text" name="tel" class="form-control" value="{{ $staff->tel }}">
                </div>
                <br>
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <button class="btn btn-primary" type="submit">Submit </button>
            </form>
            <div class="row"></div>
        </div>
    </div>
</div>


@endsection