<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/app.css">

  <title>Hire Test</title>
</head>
<body>

  {{-- Site-wide nav --}}
  <div class="wrapper bg-light">
    <div class="container">
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="#">Hire Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Portfolio
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item active">
          <a href="#" class="nav-link">Contact <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
    </div>
  </div>

  {{-- Page nav --}}
  <div class="wrapper bg-custom-light-blue">
    <div class="page container d-flex justify-content-between align-items-center">
      <h1 class="h4 mb-0 py-3">Contact Us</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>
  </div>

  {{-- Page --}}
  <div class="container mt-3">
    <div class="row">
      @php
        $loremLong = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.';
        $loremShort = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.';
      @endphp

      {{-- Alerts --}}
      @if ($errors->any())
        <div class="col-12 alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- Form --}}
      <main class="col-8">
        @yield('content')
      </main>

      {{-- Card --}}
      <aside class="col-4">
        <div class="card">
          <div class="card-body">
            {{ $loremLong }}
          </div>
        </div>
      </aside>

    </div>
  </div>

  {{-- Footer --}}
  <div class="wrapper bg-dark fixed-bottom-lg">
    <footer class="bg-dark container pt-3 mt-3 text-light">
    <div class="row">
      <div class="col">
          <h4>&nbsp;</h4>
          <p>{{ $loremLong }}</p>
      </div>
      <div class="col">
        <h4>Company</h4>
        <ul>
          <li>About</li>
          <li>FAQ</li>
          <li>Contact</li>
          <li>Terms</li>
          <li>Privacy</li>
          <li>Testimonials</li>
        </ul>
      </div>
      <div class="col">
        <h4>Community</h4>
        <ul>
          <li>Blog</li>
          <li>Forum</li>
          <li>Support</li>
          <li>Newsletter</li>
        </ul>
      </div>
      <div class="col">
        <h4><em>from the</em> Blog</h4>
        <div class="media">
          <i class="far fa-image fa-4x align-self-start mr-3"></i>
          <div class="media-body">
            <h5 class="mt-0">Headline</h5>
            <p>{{ $loremShort }} <a href="#">Read More</a></p>
          </div>
        </div>
        <div class="media">
          <i class="far fa-image fa-4x align-self-start mr-3"></i>
          <div class="media-body">
            <h5 class="mt-0">Headline</h5>
            <p>{{ $loremShort }} <a href="#">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
