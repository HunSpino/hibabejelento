@extends('layout')

@section('title', $terem->gep )

@section('content')
<h1>A {{ $terem->gep }} gép</h1>
<p>Épület: {{ $terem->epulet }}</p>
<p>Emelet: {{ $terem->emelet }}</p>
<p>Terem: {{ $terem->terem }}</p>
<p>@include('delete-terem-button', ['teremId'=>$terem->id])</p>
<p><a href="{{ route('terems.edit', [$terem->id]) }}">Szerkesztés</a></p>
@endsection
