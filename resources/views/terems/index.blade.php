@extends('layout')

@section('content')
<p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>

<table>
    <tr>
        <th>Épület</th>
        <th>Emelet</th>
        <th>Terem</th>
        <th>Gép</th>
        @foreach ($terems as $terem)
            <tr>
                <td>{{ $terem->epulet }}</td>
                <td>{{ $terem->emelet }}</td>
                <td>{{ $terem->terem }}</td>
                <td>
                    <a href="{{ route('terems.show', [$terem->id]) }}">{{ $terem->gep }}</a>
                </td>
                <td>
                    @include('delete-terem-button', ['teremId'=>$terem->id])
                </td>
            </tr>
        @endforeach
    </tr>
</table>

@endsection
