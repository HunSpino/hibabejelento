@extends('layout')

@section('title','Suli gépei')

@section('content')
<h1>New PC</h1>
    <form method='POST' action="{{ route('terems.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Épület: <br>
            <input type="text" name="epulet" value="{{ old('epulet') }}">
            @error('epulet')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Emelet: <br>
            <input type="number" name="emelet" value="{{ old('emelet') }}">
            @error('emelet')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Terem: <br>
            <input type="number" name="terem" value="{{ old('terem') }}">
            @error('terem')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Gép: <br>
            <input type="number" name="gep" value="{{ old('gep') }}">
            @error('gep')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create" class="btn btn-primary">
        </div>
    </form>
@endsection
