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
                    @foreach ($usuarios as $usuario)
                        <tr>
                            
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <button class="btn btn-secondary"> 
                                    <i class="fa fa-trash"></i> 
                                </button>
                                |
                                <form 
                                    action="{{url('/users/'.$usuario->id)}}"
                                    method="POST"
                                    class="d-inline"
                                >
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button 
                                        type="submit" 
                                        onclick="return confirm('¿Estas seguro?')"
                                        value="delete"
                                        class="btn btn-danger"
                                    >
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection