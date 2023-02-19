@extends('template.app')

@section('custom-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
@endsection

@section('content')
@include('admin.navbar')
<div class="container pt-3 text-light">
  <h1 class="text-center">Room Lists</h1>
  @if(session('status'))
    <div style="color:green; margin:auto; text-align:center;">
      {{ session('status') }}
    </div>
  @endif
  <a href="{{ route('home') }}" class="btn btn-secondary">&laquo; Back</a>
  <a href="{{ route('addRoom') }}" class="btn btn-success"> + Add</a>
  <div class="text-light">

  <table id="example" class="table table-striped bg-light" style="width:100%; border: 1px solid #555">
    <thead>
        <tr>
          <th>#</th>
          <th>Room Name</th>
          <th>Image</th>
          <th>Type</th>
          <th>Price</th>
          <th>Promo</th>
          <th>Available</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      @foreach($rooms as $room)
        <tr>
          <td>{{ $i++ }}</td>
          <td><img src="{{ asset("storage/room/".$room->image) }}" style="width:90px"/></td>
          <td>{{ $room->name }}</td>
          <td>{{ $room->type['type'] }}</td>
          <td>{{ $room->price }}</td>
          <td>{{ $room->promo }}%</td>
          <td>{{ $room->available }}</td>
          <td>
            <a href="/admin/promo/{{ $room->id }}" class="btn btn-info">Promo</a>
            <a href="/admin/edit/{{ $room->id }}" class="btn btn-warning">Edit</a>
            <a class="btn btn-danger" onclick="return confirm('Apakah kamu yakin akan menghapus kamar ini?')" href="/admin/delete/{{ $room->id }}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Room Name</th>
            <th>Image</th>
            <th>Type</th>
            <th>Price</th>
            <th>Promo</th>
            <th>Available</th>
            <th>Action</th>
        </tr>
    </tfoot>
  </table>
  </div>
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