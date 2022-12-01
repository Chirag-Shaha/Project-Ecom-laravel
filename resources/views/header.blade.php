<?php
use App\Http\Controllers\productcontroller;
$total=productcontroller::cartitem()
?>
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">E-comm</a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Orders</a>
      </ul>
      <form action="/search" class="navbar-form navbar left">
        <div>
        <input type="text" name="query"class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-outline-success">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <ul class="nav navbar-nav">
      <li><a class="nav-link active" href="/cartlist">Cart{{$total}}</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>