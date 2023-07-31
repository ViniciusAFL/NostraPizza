<form action="{{ route('user.excluir', ['user' => $user->id])}}">
    @csrf


    @method('delete')
    {{-- <p>Tem certeza que quer excluir esse user?</p> --}}
    <button class="" type="submit">Excluir</button>
</form>
