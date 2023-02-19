@extends('template.app')

@section('custom-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
@endsection

@section('content')
@include('admin.navbar')
<div class="container pt-3 text-light">
  <h1 class="text-center">News Lists</h1>
  @if(session('status'))
    <div style="color:green; margin:auto; text-align:center;">
      {{ session('status') }}
    </div>
  @endif
  <a href="{{ route('home') }}" class="btn btn-secondary">&laquo; Back</a>
  <a href="{{ route('admin.news.add') }}" class="btn btn-success">Add</a>
  <div class="text-light">

  <table id="example" class="table table-striped bg-light" style="width:100%; border: 1px solid #555">
    <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Thumbnail</th>
          <th>Writer</th>
          <th>Content</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      @foreach($news as $new)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $new->title }}</td>
          <td><img src="{{ asset("storage/news/".$new->image) }}" style="width:90px"/></td>
          <td>{{ $new->writer }}</td>
          <?php preg_match("/(?:\w+(?:\W+|$)){0,10}/", $new->content, $matches); ?>
          <td>{{ $matches[0] }}...</td>
          <td>
            <a href="/admin/news/edit/{{ $new->id }}" class="btn btn-warning">Edit</a>
            <a class="btn btn-danger" onclick="return confirm('Apakah kamu yakin akan menghapus berita ini?')" href="/admin/news/delete/{{ $new->id }}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Thumbnail</th>
          <th>Writer</th>
          <th>Content</th>
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