<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/app.css">

  <title>Contact</title>

  {{-- Insert Google Web Fonts --}}
</head>
<body>

  {{-- Site-wide nav --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Hire Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
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

  {{-- Page nav --}}
  <div class="container-fluid d-flex justify-content-between bg-primary">
    <h2>Contact Us</h2>
    <nav aria-label="breadcrumb" class="bg-primary">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>

  {{-- Page --}}
  <div class="container-fluid">
    <div class="row">
      @php $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.'; @endphp

      {{-- Form --}}
      <main class="col-7">
        FORM FORM FORM
      </main>

      <aside class="col-5">
        <div class="card">
          <div class="card-body">
            {{ $lorem }}
          </div>
        </div>
      </aside>

    </div>
  </div>

  {{-- Footer --}}
  <footer class="bg-dark container-fluid fixed-bottom">
    <div class="row">
      <div class="col">
        {{ $lorem }}
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
        <div>Headline</div>
        <div>Headline</div>
      </div>
    </div>
  </footer>

  <script scr="./js/app.js"></script>
</body>
</html>
