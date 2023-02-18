@extends('template.app')

@section('custom-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
@endsection

@section('content')
@include('admin.navbar')
<div class="container pt-3">
  <h1 class="text-center">Booking Lists</h1>
  @if(session('status'))
    <div style="color:green; margin:auto; text-align:center;">
      {{ session('status') }}
    </div>
  @endif
  <a href="{{ route('home') }}" class="btn btn-primary">&laquo; Back </a>
  <table id="example" class="table table-striped" style="width:100%; border: 1px solid #555">
    <thead>
        <tr>
          <th>#</th>
          <th>Room Name</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>Check In</th>
          <th>Check Out</th>
          <th>Status</th>
        </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      @foreach($bookings as $booking)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $booking->room['name'] }}</td>
          <td>{{ $booking->user['name'] }}</td>
          <td>{{ $booking->user['email'] }}</td>
          <td>{{ $booking->check_in }}</td>
          <td>{{ $booking->check_out }}</td>
          <td class="@if($booking->status == 1) text-success @elseif($booking->status == -1) text-danger @endif">
            @if($booking->status == 1)
              Approved
            @elseif($booking->status == -1)
              Not Approved
            @else
            <a href="/admin/book/acc/{{ $booking->id }}" class="btn btn-success">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg>
            </a>
            <a class="btn btn-danger" href="/admin/book/notacc/{{ $booking->id }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </a>
            @endif
          </td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
        <tr>
          <th>#</th>
          <th>Room Name</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>Check In</th>
          <th>Check Out</th>
          <th>Status</th>
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