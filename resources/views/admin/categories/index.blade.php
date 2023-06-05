@extends('adminlte::page')

@section('title', 'Admin Blog')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.categories.create') }}">Agregar categoría</a>
  <h1>Lista categoría</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
@endif
  <div class="card">
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th colspan="2"></th>
          </tr>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td width="10"><a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary btn-sm">Editar</a></td>
              <td width="10">
                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
        </thead>
      </table>
    </div>
  </div>
@stop
