@extends('layouts.base')
@section('content')
@include('layouts.menuAdm')
<form method="post" action="{{ route('user.update', $user->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $user->nome }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Nova Senha" required>
    <input type="number" name="id_cargo" value="{{ $user->id_cargo }}">
    <button type="submit">Salvar Alterações</button>
</form>

@endsection
@section('scripts')

@endsection
