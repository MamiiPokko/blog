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
                        <a href="{{URL('admin/editroom')}}/{{$n->id}}">
                          <button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                        </a><br>
                        <button type="button" class="btn btn-danger" onclick="confirm_delete('{{ url('admin/deleteroom', $n->id) }}', 'Are you sure delete ?')"><i class="fa fa-window-close" aria-hidden="true"></i> Del</button>
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
                <a href="{{URL('/admin/edit')}}"> <button type="button" class="btn btn-primary">Add</button>
              </p>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
        function confirm_delete(url, message){
          console.log(url)
          swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  confirmButtonClass: 'btn btn-success',
  cancelButtonClass: 'btn btn-danger',
  buttonsStyling: false
}).then(function () {
  swal(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  )
  window.location.href = url
}, function (dismiss) {
  // dismiss can be 'cancel', 'overlay',
  // 'close', and 'timer'
  if (dismiss === 'cancel') {
    swal(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
        }


</script>

    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection
