@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center justify-content-center">

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações disponiveis
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="{{ route ('vehicles.index')}}">Listar seus Veiculos</a>
  <a class="dropdown-item" href="{{ route ('vehicles.create')}}">Cadastar novo Veiculo</a>
  </div>
</div>
</div>

@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {{session('error')}}
</div>
@endif
@endsection
