@extends('layouts.app')


@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Explora nuestras categorías</h2>

    <div id="categoriasCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $imagenes = [
                    'Postres'=>'	https://scontent-bog2-2.xx.fbcdn.net/v/t39.30808-6/484782865_1218942523565843_4877580687219350711_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeH8sllj5_41Tfv2kqeybvScNxobtwXvnoQ3Ghu3Be-ehHIPa9Y6ZCloPykYt2vkWPEqCEM-0OEtA7lLct6joNYo&_nc_ohc=ytJKBIMVlxIQ7kNvwGxb10c&_nc_oc=AdlABFvSxAuSLAXgc2licFOW_SkNL84PgroQj-oxzNMu_lzf-u27graVBjuiwjO_lZk&_nc_zt=23&_nc_ht=scontent-bog2-2.xx&_nc_gid=IhOBQxttFbSzY2mo_Nb_gA&oh=00_AfFwOsHZHDjAG9--fPC-wzNw4UtHqJEn4R1XmvKRgwne4w&oe=67FDE043 ',
                    'Conservas'=>' https://scontent-bog2-1.xx.fbcdn.net/v/t1.6435-9/117638569_2562902740686849_5353236591503900400_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeHER3CrI151zxrM-WFKsHzAhMWIBC4VBFWExYgELhUEVX71SKZbDLHzYspP-Q7mdDrFaMVafLRgVtsyOwaeAL_W&_nc_ohc=cQmBrQyW14EQ7kNvwF7Jf-V&_nc_oc=AdmHSIR8jKQa72GtT_V-cj0j0uevSN6VZ0cam1CVBLDnsgIaeJZOqFqLzgwWxGlrokk&_nc_zt=23&_nc_ht=scontent-bog2-1.xx&_nc_gid=J1qs6VP5tWqK289mcuGxNg&oh=00_AfH62hkZFi4fKa9g10AC0LLn7q0cuMwBnVlr8coSKW_JOQ&oe=681F8596 ',
                    'Dulces'=>'https://www.noticiasneo.com/sites/default/files/2023-01/bebidasNAok.png',
                    //agregar nombre y url para mas categorias
        ];
            @endphp

            @foreach ($categorias as $index => $categoria)
                <div class="carousel-item @if($index == 0) active @endif">
                    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 500px;">

                        <img src="{{ $imagenes[$categoria->nombre] ?? 'https://via.placeholder.com' }}" class="d-block w-100" alt="{{ $categoria->nombre }}"
                        style="height: 350px; object-fit: cover;">

                        <h5 class="mt-3">{{ $categoria->descripcion }}</h5>

                        <a href="{{ route('categorias.producto', $categoria->id) }}" class="btn btn-outline-dark">
                            {{ $categoria->nombre }}
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

        <style>
            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-color: #000;
                border-radius: 20%; 
            }
        </style>
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
@endsection