@extends('layouts.default')
@section('title', $titlePage)
@section('currentPage', $currentPage)

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        Ocorreu um problema:
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>  
            @endforeach
        </ul>
    </div>
@endif
<form method="{{$data == [] ? "POST" : "PUT"}}" action="/{{$currentPage}}/{{$data == [] ? "create" : "edit"}}">
    @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Digite o nome" value="{{$data == [] ? "" : $data["name"]}}">
  </div>
  <div class="col text-center">
    <button type="submit" class="btn btn-{{$data == [] ? "primary" : "success"}}">{{$data == [] ? "Registrar" : "Salvar"}}</button>
  </div>
</form>
@endsection