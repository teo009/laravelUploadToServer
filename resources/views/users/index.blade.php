@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <table class="table col-12">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($usuarios as $usuario)
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <button class="btn btn-danger"> 
                                <i class="fa fa-trash"></i> 
                            </button>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection