@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h2 class="text-center mb-4">Dejate tentar de nuestros productos</h2>

    <div id="categoriasCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $imagenes = [
                    'Postres'=>'https://0701.static.prezi.com/preview/v2/otksijunl3nhsozxhpzd4w3jnx6jc3sachvcdoaizecfr3dnitcq_3_0.png',
                    'Conservas'=>'https://media-cdn.tripadvisor.com/media/photo-s/27/47/d0/0d/una-tradicion-que-viene.jpg',
                    'Dulces'=>'https://www.noticiasneo.com/sites/default/files/2023-01/bebidasNAok.png',
                    //agregar nombre y url para mas categorias
        ];
            @endphp

            @foreach ($categorias as $index => $categoria)
                <div class="carousel-item @if($index == 0) active @endif">
                    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 500px;">

                        <img src="{{ $imagenes[$categoria->nombre] ?? 'https://via.placeholder.com' }}" class="d-block w-100" alt="{{ $categoria->nombre }}"
                        style="height: 400px; width: 160px; border-radius: 5%;">

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
     <section class="content about " id="nosotros">
        <h2 class="title2">Nosotros</h2>
        <p class="p1">
            Desde 1998 existimos con un único fin: hacer realidad tus antojos más dulces.

            Durante más de 20 años hemos estado aquí, recibiéndote en nuestra casa, en el Parque de San Antonio de
            Pereira en Rionegro, llenos de sabores pero sobre todo, de amor por nuestro trabajo.
            
            Cada día la entendemos como una oportunidad para ser mejores, para hacer postre cada sabor que nos da la
            naturaleza.
            
            La tradición es la marca que llevamos y que queremos mantener desde que llegamos a Rionegro para ser los
            originales Postres de San Antonio de Pereira.
            
        </p>
        
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
      <style>
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #000;
     border-radius: 20%; 
}
footer {
    background-color: #0f532b;
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
    color: rgb(0, 0, 0);
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
@endsection