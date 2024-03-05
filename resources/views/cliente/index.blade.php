@extends('home')


@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>LISTA DE CLIENTES</h3>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nuevo
        </button>
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">TELEFONO</th>
                        <th>CORREO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                        <tr class="">
                            <td scope="row"> {{$cliente ->id}} </td>
                            <td> {{$cliente->nombre}} </td>
                            <td> {{$cliente->telefono}} </td>
                            <td> {{$cliente->correo}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('cliente.create')

        
    </div>
    <div class="col-md-2"></div>
</div>








@endsection