@extends('app')
@section('content')

<div class="row" id="crud">
    <div class="col-xs-12">
        <h1 class="page-header">
            CRUD Laravel & Vue
        </h1>
    </div>
    <div class="col-sm-7">
        <a href="#" class="btn btn-primary pull-right">Nueva Tarea</a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarea</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="keep in keeps">
                    <td width="10px"> @{{keep.id}} </td>
                    <td> @{{keep.keep}} </td>
                    <td width="10px">
                        <a href="#" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                    <td width="10px">
                        {{-- .prevent recibe la acción y no recarga la pestaña --}}
                        <a href="#" class="btn btn-sm btn-danger" v-on:click.prevent="deleteKeep(keep)">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-5">
        <pre>
            @{{$data}}
        </pre>
    </div>
</div>

@endsection
