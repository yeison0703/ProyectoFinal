
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <div class="container">
            <a href="index.html" class="logo">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/19/a2/1c/a6/dulcecontigo.jpg" alt="">
            </a>
            <a class="navbar-brand" href="{{ url('/') }}">Dulce Contigo</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->is('icicio*') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('productos*') ? 'active' : '' }}" href="{{ route('productos.index') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('categorias*') ? 'active' : '' }}" href="{{ route('categorias.index') }}">Categorías</a></li>
            

                    @guest
                       <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Iniciar Sesion</a></li>
                    @endguest

                    @auth
                        <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Cerrar Sesion</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </ul>
               
            </div>
        </div>
    </nav>
        <style>
         .logo{
             margin-left: 30px;
        }
        .logo img{
             height: 80px;
             border-radius: 100px;
        }
        .navbar-nav .nav-link:hover {
            color:rgb(194, 142, 0); /* Azul brillante al pasar el mouse */
            transform: scale(1.1); /* Efecto de zoom */
        }

        .navbar-toggler {
            border: none;
            background-color: #00d4ff; /* Botón de menú futurista */
        }
        .navbar {
            background: linear-gradient(90deg,rgb(15, 46, 27),rgb(20, 65, 38),rgb(18, 56, 32)); /* Degradado oscuro */
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.3); /* Sombra */
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s, transform 0.3s; /* Transición suave */
        }

        .navbar-brand{
            font-size: 1.5rem;
            font-weight: bold;
            color:rgb(255, 255, 255);
            text-shadow: rgb(255, 38, 0); /* Sombra en el texto */
        }            
                 
        </style>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>