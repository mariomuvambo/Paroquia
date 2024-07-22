<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <!-- jsd -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="/css/aniversariante.css">

    <link rel="stylesheet" href="/css/list.css">


    <link rel="stylesheet" href="/css/avisos.css">


</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <!-- {{ $header }} -->

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('São João') }}


                    <ul class="nav justify-content-center">
                       
                        @can('admin')
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard">Home</a></li>
                                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Ministérios</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('adminministerios.create') }}">Adicionar</a></li>
                                <li><a class="dropdown-item" href="{{ route('adminministerios.index') }}">Listar Ministérios</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('adminministerios.show') }}">Detalhes do Ministérios</a></li> 
                                <li><a class="dropdown-item" href="{{ route('Admin.show') }}">Registados nos Ministérios</a></li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/Admin/aniversariante_all">Todos aniversariantes</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('User.show') }}">User</a>
                        </li>
            
                        @elsecan('user')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Ministérios</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Ministerios/showMinisterios">Lista de Ministérios</a></li>
                                <li><a class="dropdown-item" href="{{ route('ministerio.createUser') }}">Registar-se</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('ministerio.show') }}">Registados</a></li>

                               
                        </li>

                            </ul>
                        </li>

                      
                        @endcan

                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Aniversariantes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/Aniversariantes/create">Adicionar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/Aniversariantes/show">Registados</a></li>
                               
                                @can('admin')
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/Admin/aniversariante_all">Todos aniversariantes</a>
                                @endcan
                        </li>

                            </ul>
                        </li>

                        <li class="nav-item ">
                         @can('user')
                            <a class="nav-link position-relative" href="{{route ('inbox.read')}}">Inbox
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{Auth::user()->unreadNotifications->count()}}
                                    <span class="visually-hidden">unread messages</span>
                                </span></a>
                                @elsecan('admin')
                                <a class="nav-link" href="{{route ('inbox.create')}}">Inbox</a>
                                @endcan

                        </li>
                        @can('user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('contact.create') }}">Contact Us</a> 
                        </li>
                        @endcan

                    </ul>

                </h2>

            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            <!-- {{ $slot }} -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <!-- <x-welcome /> -->
                        <div class="container-fluid">
                            <div class="row">
                                @if(session('msg'))
                                <p class="msg">{{session('msg')}}</p>
                                @endif
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


</body>

</html>