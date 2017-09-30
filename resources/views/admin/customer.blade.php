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
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Tel</th>
                        <th>view</th>
                      </tr>
                    </thead>
                  <tbody>
                    <tr>
                    </tr>
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
