@extends('layout')
@section('contenido')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">JoinAds CRUD</h1>

  </div>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descripção </h>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
          <tr>
            <th scope="row">1</th>
            <td>{{ $persona->name }}</td>
            <td>{{ $persona->description }}</td>
            <td>



                <form action="{{ route('destroy',$persona->id) }}" method="POST">



                    <a class="btn btn-primary" href="{{ route('edit',$persona->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>





            </td>
          </tr>
          @endforeach

        </tbody>
      </table>

</div>
@stop
