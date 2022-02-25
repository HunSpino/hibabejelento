@extends('layout')

@section('content')

<h1>Terem edit</h1>
    <form method='POST' action="{{ route('terems.update', $terem->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Épület: <br>
            <input type="text" name="epulet" value="{{ $terem->epulet }}"></input>
        </div>
        <div>
            Emelet: <br>
            <input type="number" name="emelet" value="{{ $terem->emelet }}">
        </div>
        <div>
            Terem: <br>
            <input type="number" name="terem" value="{{ $terem->terem }}">
        </div>
        <div>
            Gép: <br>
            <input type="number" name="gep" value="{{ $terem->gep }}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
@endsection
