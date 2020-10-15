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

<main role="main">


  <div class="album py-5 bg-light">
    <div class="container">
    
      <div class="row">
      @foreach($vehicles as $vehicle)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          @isset($vehicle->image)
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('storage/'.$vehicle->image->path)}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></img>
          @endisset
           <div class="card-body">

           <p class="card-text">
                
              <b>Modelo: </b>{{$vehicle->model}}<br>
              <b>N° de propietarios:</b> {{$vehicle->owners}}<br>
              <b>Valor:</b> R${{$vehicle->value}}<br>
              <b>Descrição:</b> {{$vehicle->description}}<br>
              </p>
              

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                <form action="{{route('vehicles.destroy',$vehicle->id)}}" method="POST">
                  <a type="button" class="btn btn-sm btn-outline-secondary" href="{{route('vehicles.show',$vehicle->id)}}">Mais</a>
                  <a type="button" class="btn btn-sm btn-outline-secondary" href="{{route('vehicles.edit',$vehicle->id)}}">Editar</a>

                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Apagar</button>
                  </form>

                </div>
                <small class="text-muted">{{$vehicle->id}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>


    </div>
  </div>

</main>
<div class="d-flex align-items-center justify-content-center">
{{ $vehicles->links()}}
</div>
@endsection

