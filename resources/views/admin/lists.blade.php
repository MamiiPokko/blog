@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.js"></script>

  <div class="panel">
      <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
              <!-- RECENT PURCHASES -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Add Staff </h3>
                </div>
                <div class="panel-body no-padding">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Date</th>
                        <th>Edit</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($staff as $index => $s)
                      <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->surname}}</td>
                        <td>{{$s->dob}}</td>
                        <td>
                        <a href="{{URL('/editstaff')}}/{{$s->id}}">
                          <button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                        </a><br>
                        <!-- <button type="button" class="btn btn-danger" onclick="confirm_delete('{{ url('/deletestaff', $s->id) }}', 'Are you sure delete ?')"><i class="fa fa-window-close" aria-hidden="true"></i> Del</button> -->
                        <a href="{{ url('/deletestaff', $s->id) }}" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Del</a>
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
                <a href="{{URL('/add')}}"> <button type="button" class="btn btn-primary">Add</button>
              </p>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
        function confirm_delete(url, message){
          swal({
            title: message,
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
          },
          function(){
            window.location.href = url;
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          });
        }


</script>
@endsection