@extends('layouts.productosLayout')

@section('titulo', 'Crear producto')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Crear un Producto</h1>
    </div>
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del producto" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del producto</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del producto" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio del producto</label>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="0.00" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Cantidad en Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="0" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <a href="{{route('productos.index')}}" class="btn btn-danger w-100">Regresar</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-100">Guardar Producto</button>
                </div>
            </div>
        </div>
    </form>
@endsection