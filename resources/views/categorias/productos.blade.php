@extends('layouts.app')
@section('content')
<div class="container">
    <h2 style="text-align: center">Estos son nuestros deliciosos {{ $categoria->nombre }}</h2>
    @if ($productos->isEmpty())
        <p style="text-align: center">No hay productos disponibles en esta categoría.</p>
        <br>
    @else <div style="display: flex; flex-wrap: wrap; gap:20px; margin-top: 20px;">

        @foreach ($productos as $producto)
        <div style="border: 1px solid #ccc; padding: 15px; width: 200px; text-align: center;">
            <img src="{{ $producto->imagen }}" alt="imagen del producto" width="100">
            <h5>{{ $producto->nombre }}</h5>
            <p>${{ $producto->precio }}</p>
            <a href="{{route('producto.show',$producto->id)}}" class="btn btn-secundary">ver</a>
        </div>
        @endforeach
    </div>
    @endif
    <br>
    <a href="{{ url('/') }}" class="btn btn-outline-dark">Volver al catalogo</a>
</div>
<br>
<br>
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
@endsection


<style>
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

</style>