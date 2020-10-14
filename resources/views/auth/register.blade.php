@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Cadastro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"   value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Whastapp') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" placeholder="(DDD) xxxxx-xxxx" value="{{ old('number') }}" required autocomplete="name" autofocus>

                                @error('whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="name" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">

                        <select id="inputState" class="form-control" name="state">
                            <option selected>Estado</option>
                            <option value="Acre(AC)">Acre(AC)</option>
                            <option value="Alagoas(AL)">Alagoas(AL)</option>
                            <option value="Amapá(AP)">Amapá(AP)</option>
                            <option value="Amazonas(AM)">Amazonas(AM)</option>
                            <option value="Bahia(BA)">Bahia(BA)</option>
                            <option value="Ceará(CE)">Ceará(CE)</option>
                            <option value="Distrito Federal(DF)">Distrito Federal(DF)</option>
                            <option value="Espirito Santo(ES)">Espirito Santo(ES)</option>
                            <option value="Goiás(GO)">Goiás(GO)</option>
                            <option value="Maranhão(MA)">Maranhão(MA)</option>
                            <option value="Mato Grosso(MT)">Mato Grosso(MT)</option>
                            <option value="Mato Grosso do sul(MS)">Mato Grosso do sul(MS)</option>
                            <option value="Minas Gerais(MG)">Minas Gerais(MG)</option>
                            <option value="Pará(PA)">Pará(PA)</option>
                            <option value="Paraíba(PB)">Paraíba(PB)</option>
                            <option value="Pernambuco(PE)">Pernambuco(PE)</option>
                            <option value="Piauí(PI)">Piauí(PI)</option>
                            <option value="Rio De Janeiro(RJ)">Rio De Janeiro(RJ)</option>
                            <option value="Rio Grande Do Norte(RN)">Rio Grande Do Norte(RN)</option>
                            <option value="Rio Grande Do Sul(RS)">Rio Grande Do Sul(RS)</option>
                            <option value="Rondônia(RO)">Rondônia(RO)</option>
                            <option value="Roraima(RR)">Roraima(RR)</option>
                            <option value="Santa Catarina(SC)">Santa Catarina(SC)</option>
                            <option value="São Paulo(SP)">São Paulo(SP)</option>
                            <option value="Sergipe(SE)">Sergipe(SE)</option>
                            <option value="Tocantins(TO)">Tocantins(TO)</option>

                            </select>

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
