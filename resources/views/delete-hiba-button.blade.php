<form method="POST" action="{{ route('hibas.destroy', $hibaId) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Törlés</button>
</form>

