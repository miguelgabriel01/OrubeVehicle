@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center justify-content-center " style="height:50px; margin:10px;">

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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark">{{ __('Cadastre seu Veiculo') }}</div>



                <!--@if ($errors->any())
                   <div class="alert alert-danger">
                          <strong>Ops!</strong>existem problemas com os dados recebidos <br><br>
                     <ul>
                        @foreach($errors->all() as $error)
                        <li>
                 {{$error}}
                        </li>
                        @endforeach
                   </ul>
                 </div>
               @endif!-->

                <div class="card-body">
                    <form method="POST" action="{{ route('vehicles.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>
                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" maxlength="100"  value="{{$vehicle->model}}" required  autofocus maxlength="100">
                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Cor') }}</label>
                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color" maxlength="100"  value="{{$vehicle->color}}" required  autofocus maxlength="100">
                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owners" class="col-md-4 col-form-label text-md-right">{{ __('Numero de proprietários') }}</label>
                            <div class="col-md-6">
                                <input id="owners" type="number" class="form-control @error('owners') is-invalid @enderror" name="owners" maxlength="100"  value="{{$vehicle->owners}}" required  autofocus maxlength="100">
                                @error('owners')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Value" class="col-md-4 col-form-label text-md-right">{{ __('Valor do veiculo') }}</label>
                            <div class="col-md-6">
                                <input id="value" type="number" class="form-control @error('value') is-invalid @enderror" name="value" maxlength="100"  value="{{$vehicle->value}}" required  autofocus maxlength="100">
                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="km" class="col-md-4 col-form-label text-md-right">{{ __('Quilometragem') }}</label>
                            <div class="col-md-6">
                                <input id="km" type="number" class="form-control @error('km') is-invalid @enderror" name="km" maxlength="100"  value="{{$vehicle->km}}" required  autofocus maxlength="100">
                                @error('km')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de veiculo') }}</label>
                        <div class="col-md-6">
                        <select id="inputState" class="form-control" value="{{$vehicle->type}}" name="type">
                                <option value="Carro">Carro</option>
                                <option value="Moto">Moto</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
                            <div class="col-md-6">
                            @isset($vehicle->image)
                                 <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ asset('storage/'.$vehicle->image->path)}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></img>
                            @endisset
                            <input type="file" name="image"  id="image" class="form-control"  required="" value="{{old('image')}}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>
                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"  required maxlength="500" value="" >{{$vehicle->description}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Atualizar Veiculo') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>@endsection
