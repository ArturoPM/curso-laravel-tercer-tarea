@extends('layouts.productosLayout')

@section('titulo', 'Reporte de productos')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Reporte de Productos</h1>
    </div>
    <div class="text-center mb-3">
        <a href="{{route('productos.create')}}" class="btn btn-primary w-100">Crear producto</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Exito: </strong> {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $producto)
                <tr>
                    <td>{{$producto->idProducto}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Acciones
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('productos.show', $producto->idProducto)}}">Ver</a></li>
                                <li><a class="dropdown-item" href="{{route('productos.edit', $producto->idProducto)}}">Editar</a></li>
                                <li><a class="dropdown-item" href="{{route('productos.destroy', $producto->idProducto)}}">Eliminar</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">No hay producto registrados</td>
                </tr>
            @endforelse
        </tbody>
@endsection