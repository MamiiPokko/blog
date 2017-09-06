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
                        <th>Parking</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
					 @foreach($json as $index => $data)
                      <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$data->roomtype}}</td>
                        <td>{{$data->rates}}</td>
                        <td>{{$data->air}}</td>
                        <td>{{$data->parking}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="panel-footer">
                </div>
              </div>
        </div>
      </div>
    </div>
</div>