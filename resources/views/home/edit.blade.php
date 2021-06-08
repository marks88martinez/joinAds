@extends('layout')
@section('contenido')



<div class="container">
     @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

    <form action="{{ route('update',$persona->id) }}" method="POST">
        @method('PUT')
        @csrf


        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control"value="{{ $persona->name }}" name="name" id="name" required>
          <small id="emailHelp" class="form-text text-muted">Por favor, insira o seu nome</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Descripção</label>
            <input type="text" class="form-control" value="{{ $persona->description }}" name="description" id="description" required >
            <small id="emailHelp" class="form-text text-muted">Descrição do trabalho</small>
          </div>


        <button type="submit"    class="btn btn-primary">Enviar</button>
    </form>
</div>

@stop
