<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src='https://code.jquery.com/jquery-1.12.3.js'></script>




    </head>
    <body style="background-color: rgb(248, 255, 254); overflow-x: hidden;">
        @if (session('message'))
        <div class="alert alert-info alert-dismissible fade show mx-auto align-middle" style="width: 50%;" role="alert">
            <p><b>{{ session('message') }}</b></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-info alert-dismissible fade show mx-auto align-middle" style="width: 50%;" role="alert">

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </div>
    @endif
    <nav class="navbar navbar-dark sticky-top" style="background-color: rgb(11, 80, 92) ">
        <a class="nav-link active text-decoration-none link-light" aria-current="page" href = "{{ route('welcome') }}" > Home </a>
        @yield('navbar')

    </nav>
        @yield('content')
    </body>
</html>
