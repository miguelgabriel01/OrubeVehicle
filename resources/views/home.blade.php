@extends('layouts.app')

@section('content')


<div class="d-flex align-items-center justify-content-center">

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
      @foreach($vehicle as $vehicles)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          @isset($vehicles->image)
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('storage/'.$vehicles->image->path)}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></img>
          @endisset
           <div class="card-body">

           <p class="card-text">
              <b>Modelo: </b>{{$vehicles->model}}<br>
              <b>Cor: </b>{{$vehicles->color}}<br>
              <b>N° de propietarios:</b> {{$vehicles->owners}}<br>
              <b>Tipo: </b>{{$vehicles->type}}<br>
              <b>Valor: </b>R${{$vehicles->value}}<br>
              <b>Quilometragem: </b>{{$vehicles->km}}KM<br>
              <b>Contato: </b>{{$vehicles->user->number}}<br>
            <p class="text-secondary">{{$vehicles->description}}</p>
            </p>
              

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <small>{{$vehicles->user->name}}</small>
                </div>
                <a href="https://wa.me/55{{$vehicles->user->number}}?text=Olá%20{{$vehicles->user->name}}%20fiquei%20interessado%20no%20veiculo%20{{$vehicles->model}}%20%20"><button type="button" class="btn btn-success"><i class="fab fa-whatsapp pr-1"></i> Whatsapp</button></a>
                   <button type="button" class="btn btn-danger"><i class="fas fa-envelope pr-1"></i> Email</button>

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
{{ $vehicle->links()}}
</div>

@endsection
