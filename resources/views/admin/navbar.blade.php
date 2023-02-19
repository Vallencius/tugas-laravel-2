<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin">Admin Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title == 'Admin Page - Room') active @endif" aria-current="page" href="/admin">Room</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title == 'Admin Page - News') active @endif" href="/admin/news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/booking">Booking List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>