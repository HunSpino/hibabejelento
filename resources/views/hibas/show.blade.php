@extends('layout')

@section('title', $hiba->felhasznalo )

@section('content')
<h1>{{ $hiba->felhasznalo }} hibajelentése</h1>
<p>Hiba: {{ $hiba->hiba }}</p>
<p>A gépe: </p>
<h2>A {{ $hiba->terem->gep }} gép</h2>
<p>@include('delete-hiba-button', ['hibaId'=>$hiba->id])</p>
@endsection
