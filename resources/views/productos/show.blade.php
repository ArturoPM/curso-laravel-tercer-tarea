@extends('layouts.productosLayout')

@section('titulo', 'Ver producto')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Ver un Producto</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del producto" disabled value="{{$producto->nombre}}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción del producto</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del producto" disabled value="{{$producto->descripcion}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="precio" class="form-label">Precio del producto</label>
                <input type="number" class="form-control" id="precio" name="precio" placeholder="0.00" disabled value="{{$producto->precio}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="stock" class="form-label">Cantidad en Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="0" disabled value="{{$producto->stock}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <a href="{{route('productos.index')}}" class="btn btn-danger w-100">Regresar</a>
            </div>
        </div>
    </div>
@endsection