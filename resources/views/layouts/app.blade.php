<!DOCTYPE html>
<html lang="en">

<head>
  @section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  @show

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuesioner Trainer | IPB Training</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light @if (Request::is('selesai')) bg-transparent @else bg-light shadow @endif">
      <a class="navbar-brand" href="#">
        <img src="/images/logo.png" alt="Logo IPB Training" class="logo">
      </a>
    </nav>
  </header>

  <main>
    @yield('main')
  </main>

  @yield('scripts')
</body>

</html>