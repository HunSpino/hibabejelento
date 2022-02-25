@extends('layout')

@section('content')
<p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>
<table>
    <tr>
        <th>Felhasználó</th>
        <th>Hiba</th>
        <th>Terem</th>
        @foreach ($hibas as $hiba)
            <tr>
                <td>
                    <a href="{{ route('hibas.show', [$hiba->id]) }}">{{ $hiba->felhasznalo }}</a>
                </td>
                <td>{{ $hiba->hiba }}</td>
                <td>{{ $hiba->terem_id }}</td>
                <td>
                    @include('delete-hiba-button', ['hibaId'=>$hiba->id])
                </td>
            </tr>
        @endforeach
    </tr>

</table>
<p><a href="{{ route('hibas.create') }}">Új hibajelentés küldése</a></p>


@endsection
