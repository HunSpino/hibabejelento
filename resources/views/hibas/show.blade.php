@extends('layout')

@section('title', $hiba->felhasznalo )

@section('content')
<h1>{{ $hiba->felhasznalo }} hibajelentése</h1>
<p>Hiba: {{ $hiba->hiba }}</p>
<p>A gépe: {{ $hiba->terem->gep }}</p>
<p>@include('delete-hiba-button', ['hibaId'=>$hiba->id])</p>
<p><a href="{{ route('hibas.edit', [$hiba->id]) }}">Szerkesztés</a></p>
@endsection
