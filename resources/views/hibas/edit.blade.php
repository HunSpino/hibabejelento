@extends('layout')

@section('content')

<h1>Jelentés edit</h1>
    <form method='POST' action="{{ route('edits.update', $hiba->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Hibajelentő neve: <br>
            <input type="text" name="felhasznalo" value="{{ $hiba->felhasznalo }}">
        </div>
        <div>
            A jelenteni való hiba: <br>
            <input type="text" name="hiba" value="{{ $hiba->hiba }}">
        </div>
        <div>
            A hibát tartalmazó gép terem "ID"-ja: <br>
            <input type="number" name="terem_id" value="{{ $hiba->terem_id }}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
@endsection
