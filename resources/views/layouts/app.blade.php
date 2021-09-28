<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="_token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }} | {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('vendor/plugins/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <div class="container-fluid">

                        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                            <span class="navbar-toggler-icon"></span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">

                            <ul class="navbar-nav">

                                <li class="nav-item">

                                    <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">{{ __('Users') }}</a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </nav>

            </div>

        </div>

        @yield('content')

    </div>

    <script src="{{ asset('vendor/plugins/jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ asset('vendor/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
