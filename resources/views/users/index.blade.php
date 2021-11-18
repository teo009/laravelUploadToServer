@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row text-center">
            <h4 class="display-4 text-center">USERS LIST</h4>
            <table class="table col-12">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                
                                <form 
                                    action="{{url('/users/'.$usuario->id)}}"
                                    method="POST"
                                    class="d-inline"
                                >
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button 
                                        onclick="return confirm()"
                                        value="delete"
                                        class="btn btn-danger"
                                        data-toggle="modal"
                                        data-target="#deleteModal"
                                    >
                                    </button>
                                </form>
                                <!--
                                <button
                                    class="btn btn-danger"
                                    data-toggle="modal"
                                    data-target="#deleteModal"
                                    data-id
                                >
                                </button>
                                -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div 
        class="modal fade" id="deleteModal" tabindex="-1" 
        role="dialog" aria-labelledby="exampleModalLabel" 
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Esta acción eliminará el registro, ¿Estás seguro?</h4>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="button" class="btn btn-danger">
                        Eliminar
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection