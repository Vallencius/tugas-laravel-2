@extends('template.app')

@section('custom-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
@endsection

@section('content')
<div class="container">
  <h1 class="text-center">Welcome, Admin!</h1>
  @if(session('status'))
    <div style="color:green; margin:auto; text-align:center;">
      {{ session('status') }}
    </div>
  @endif
  <a href="{{ route('home') }}" class="btn btn-primary">&laquo; Back</a>
  <a href="{{ route('addRoom') }}" class="btn btn-success">Add</a>
  <table id="example" class="table table-striped" style="width:100%; border: 1px solid #555">
    <thead>
        <tr>
          <th>#</th>
          <th>Room Name</th>
          <th>Type</th>
          <th>Price</th>
          <th>Available</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      @foreach($rooms as $room)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $room->name }}</td>
          <td>{{ $room->type['type'] }}</td>
          <td>{{ $room->price }}</td>
          <td>{{ $room->available }}</td>
          <td>
            <a href="/admin/edit/{{ $room->id }}" class="btn btn-warning">Edit</a>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Room Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Available</th>
            <th>Action</th>
        </tr>
    </tfoot>
</div>
@endsection

@section('custom-js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>
@endsection