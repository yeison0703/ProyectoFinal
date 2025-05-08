@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
      .hero {
        background-image: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/8e/d4/58/el-amor-es-nuestro-ingrediente.jpg?w=800&h=-1&s=1');
        background-size: cover;
        background-position: center;
        height: 70vh;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }
      .hero h1 {
        font-size: 4rem;
        font-weight: bold;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
      }
      .hero h2{
          font-size: 2rem;
          font-weight: 300;
          text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
      }
      .section-title {
        font-size: 2.5rem;
        margin-top: 40px;
      }
      .carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #000;
     border-radius: 20%; 
}
footer {

  
  background: linear-gradient(90deg,rgb(15, 46, 27),rgb(20, 65, 38),rgb(18, 56, 32));
    color: #fff;
    padding: 20px;
    text-align: center;
}

footer .footer-content {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

footer .footer-section {
    width: 30%;
    margin-bottom: 20px;
}

footer .footer-section h3 {
    margin-bottom: 10px;
}

footer .footer-section a {
    color: #fff;
    text-decoration: none;
    display: block;
    margin-bottom: 5px;
}

footer .footer-bottom {
    margin-top: 20px;
    border-top: 1px solid #444;
    padding-top: 10px;
}

.content{
    height: 50vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}
.about{
    height: 100vh;
    background-color:#eefaf39c;
 }
 .p1{
    margin-bottom: 10px;
    font-size: 30px;
    color: rgb(0, 0, 0);
    -webkit-text-stroke: .30px rgb(0, 0, 0);
    justify-content: center;
    margin-left: 60px;
    margin-right: 60px
    
}
.title2{
    font-size: 40px;
    font-weight: 400;
    text-transform: uppercase;
    color: rgb(9, 61, 9);
    -webkit-text-stroke: 1px black;
    text-align: center;
}


.mapa{
    min-width: 700px;
    display: flex;
    justify-content: center;
    padding: 50px;
 }
 
 .mapa1{
    height: 50vh;
    width: 200vh;
    border-radius: 5px;
 }

    </style>
</head>
<body>
    <div class="container mt-4">
    <h2 class="text-center mb-4">Dejate tentar de nuestros productos</h2>

    <div id="categoriasCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $imagenes = [
                    'Postres'=>'https://0701.static.prezi.com/preview/v2/otksijunl3nhsozxhpzd4w3jnx6jc3sachvcdoaizecfr3dnitcq_3_0.png',
                    'Conservas'=>'https://img.restaurantguru.com/r21a-Dulce-Contigo-meals-2023-04.jpg',
                    'Dulces'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDfmKcylAaAaebemGiW48x945lQMRMHK6oGw&s',
                    //agregar nombre y url para mas categorias
        ];
            @endphp

            @foreach ($categorias as $index => $categoria)
                <div class="carousel-item @if($index == 0) active @endif">
                    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 500px;">

                        <img src="{{ $imagenes[$categoria->nombre] ?? 'https://via.placeholder.com' }}" class="d-block w-100" alt="{{ $categoria->nombre }}"
                        style="height: 400px;">

                        <h5 class="mt-3">{{ $categoria->descripcion }}</h5>

                        <a href="{{ route('categorias.producto', $categoria->id) }}" class="btn btn-outline-dark">
                            {{ $categoria->nombre }}
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

      
        <button class="carousel-control-prev" type="button" data-bs-target="#categoriasCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#categoriasCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
   


</div>
<div class="container ">


<!-- Galería de Productos -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center text-success">Nuestros Postres Estrella</h2>
    <div class="row mt-4">
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/66/f1/66/las-fronteras-no-son.jpg?w=800&h=-1&s=1" class="card-img-top" alt="Cheesecake">
          <div class="card-body">
            <h5 class="card-title">Leche asada</h5>
            <p class="card-text">Suave, cremoso y con el toque de un dulce que lo acompañe. Un favorito de todos.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/1d/0c/8f/pensabas-que-no-podias.jpg?w=800&h=-1&s=1" class="card-img-top" alt="Cupcakes">
          <div class="card-body">
            <h5 class="card-title">Pimenton & aji rocoto</h5>
            <p class="card-text">Una mezcla increible entre dulce y picante.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/0e/d5/06/los-productos-mas-frescos.jpg?w=800&h=-1&s=1" class="card-img-top" alt="Brownie">
          <div class="card-body">
            <h5 class="card-title">Postre de maracuya</h5>
            <p class="card-text">Intenso, húmedo y refrescante.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero -->
<section class="hero">
  <div class="container">
    <h1>Dulce Contigo</h1>
    <h2 class="lead">Un mundo de sabores que despiertan sonrisas</h2>
  </div>
</section>

<!-- Historia -->
<!-- Historia con animación -->
<section class="py-5" style="background: linear-gradient(135deg,rgb(247, 255, 246),rgb(194, 209, 193));">
  <div class="container">
    <div class="row align-items-center">
      <!-- Imagen decorativa -->
      <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/9b/f9/18/nuestra-tierra-antioquena.jpg?w=800&h=-1&s=1" 
             alt="Pasteles caseros" class="img-fluid rounded shadow-lg">
      </div>
      
      <!-- Texto de la historia -->
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <h2 class="section-title text-success mb-4">Nuestra Historia</h2>
        <p class="lead" style="font-size: 1.25rem; line-height: 1.8;">
          Todo comenzó con <strong>Don Fabio</strong>, una apasionado repostero que heredó las recetas secretas de su abuela, 
          horneadas con amor y una pizca de magia. Cada pastel que preparaba era más que un postre: era un abrazo, 
          un recuerdo, una celebración.
        </p>
        <p style="font-size: 1.1rem;">
          En 1998, Don Fabio decidió abrir <strong>Dulce Contigo</strong>, un rincón donde los sabores clásicos y las técnicas modernas 
          se combinan para crear experiencias inolvidables. Desde entonces, hemos endulzado miles de momentos con 
          nuestras creaciones artesanales.
        </p>
        <blockquote class="blockquote mt-4 text-muted" data-aos="fade-up" data-aos-delay="400">
          <p>“Preparamos y cocinamos felicidad, dia a dia.”</p>
        </blockquote>
      </div>
    </div>
  </div>
</section>

</section>


    <section class="mapa">
        <div>
            <h2 class="title2">¡VISITANOS!</h2>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15056.25382040731!2d-75.3812491455579!3d6.130658046120886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e469f25f355a473%3A0xf27e907f9adde2f1!2sDulce%20Contigo!5e0!3m2!1ses!2sus!4v1713989889494!5m2!1ses!2sus"
                frameborder="0" class="mapa1">

            </iframe>
        </div>


    </section>
    <footer>
        <div class="footer-content" id="contacto">
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Email: hola@dulcecontigo.com</p>
                <p>Teléfono: +123 456 789</p>
            </div>
            <div class="footer-section">
                <h3>Síguenos</h3>
                <a href="https://web.facebook.com/dulcecontigopostres/?_rdc=1&_rdr">Facebook</a>
                <a href="https://www.tiktok.com/@dulcecontigo">Tik tok</a>
                <a href="https://www.instagram.com/dulcecontigo/">Instagram</a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025. Todos los derechos reservados.
        </div>
    </footer>

</div>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

      
</body>
</html>



@endsection