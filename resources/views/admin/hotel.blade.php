@extends('layouts.app')

@section('content')

  <div class="panel">
      <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
              <!-- RECENT PURCHASES -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Add Type Room</h3>
                </div>
                <div class="panel-body no-padding">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Room type</th>
                        <th>Room rates</th>
                        <th>Air</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($hotel as $index => $n)
                      <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$n->roomtype}}</td>
                        <td>{{$n->rates}}</td>
                        <td>{{$n->air}}</td>
                        <td>
                        <a href="{{URL('/editroom')}}/{{$n->id}}">
                          <button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                        </a><br>
                        <a href="{{ url('/deleteroom', $n->id) }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Del</a>
                        <td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="panel-footer">
                </div>
              </div>
              <p class="demo-button">
                <a href="{{URL('/edit')}}"> <button type="button" class="btn btn-primary">Add</button>
              </p>
        </div>
      </div>
    </div>
</div>

@endsection
