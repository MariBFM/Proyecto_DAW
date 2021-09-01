<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MOA</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">

        <main class="d-flex flex-column justify-content-between mt-3 align-items-center w-100 h-100">
          <div class="d-flex flex-column align-items-center">
            <h1 id='logo'>MOA</h1>
            <span class="display-6">My organizative agenda</span>
          </div>
          <div id="welcome" class="container row align-items-center flex-grow-1">
            <img id="img01" class="col-sm-6 img-fluid" src="{{ asset('imagenes/plantas01.png')}}" >
            <iframe id="log" src="/login" class="col-sm-6 h-75 w-50" onload="if(this.contentWindow.location=='http://127.0.0.1:8000/home'){window.location=this.contentWindow.location;} "></iframe>
          </div>
          @include('layouts.footer')
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript">
          window.onload = function(){
            document.body.style.background = 'none';
          }
        </script>
    </body>
</html>
