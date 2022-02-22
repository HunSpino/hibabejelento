@extends('layout')

@section('title','Suli gépei')

@section('content')
<h1>New PC</h1>
    <form method='POST' action="{{ route('terems.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div>
            <input type="submit" value="Create" class="btn btn-primary">
        </div>
    </form>
@endsection
