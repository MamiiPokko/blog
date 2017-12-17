@extends('layouts.app')

@section('content')

  <div class="panel">
      <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
              <!-- RECENT PURCHASES -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">List Owner Booking</h3>
                </div>
                <div class="panel-body no-padding">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>view</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($customer as $index => $m)
                      <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$m->name}}</td>
                        <td>{{$m->surname}}</td>
                        <td>
                          <p class="demo-button">
                            <a href="{{URL('admin/viewcus')}}/{{$m->id}}"> <button type="button" class="btn btn-primary">VIEW</button>
                          </p>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>        
                  </table>
                </div>
                <div class="panel-footer">
                </div>
              </div>
              <p class="demo-button">
                <a href="{{URL('admin/addcus')}}"> <button type="button" class="btn btn-primary">Add</button>
              </p>
        </div>
      </div>
    </div>
</div>


@endsection
