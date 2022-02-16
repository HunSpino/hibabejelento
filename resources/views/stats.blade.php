@extends('layout')

@section('title','Suli gépei')

@section('content')
<h1>Íme a kezdőoldal</h1>
<p>Amennyi gépünk van: {{ $gepCount }}</p>
<p>
    <a href="{{ route('terems.index') }}">Gépek amink vannak</a>
</p>
<p>
    <a href="{{ route('hibas.index') }}">Hibabejelentések</a>
</p>
@endsection
