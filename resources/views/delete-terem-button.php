<form method="POST" action="{{ route('terems.destroy', $teremId) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Törlés</button>
</form>

