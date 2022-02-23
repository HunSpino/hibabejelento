@extends('layout')

@section('title','Hibajelentés')

@section('content')

<h1>New error report</h1>
    <form method='POST' action="{{ route('hibas.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Hibajelentő neve: <br>
            <input type="text" name="felhasznalo" value="{{ old('felhasznalo') }}">
            @error('felhasznalo')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            A jelenteni való hiba: <br>
            <input type="text" name="hiba" value="{{ old('hiba') }}">
            @error('hiba')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            A hibát tartalmazó gép terem "ID"-ja: <br>
            <input type="number" name="terem_id" value="{{ old('terem_id') }}">
            @error('terem_id')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create" class="btn btn-primary">
        </div>
    </form>

@endsection
