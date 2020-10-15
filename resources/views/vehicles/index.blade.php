@extends('layouts.app')

@section('content')

<h1>Index</h1>
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
