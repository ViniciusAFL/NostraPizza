@extends('layouts.base')
@section('content')
@include('layouts.menuAdm')

<h1> Editar Cargo</h1>
<form action="{{ route('cargo.update', ['id'=>$cargo->id_cargo]) }}"
    method="post"
    enctype="multipart/form-data" >
    @csrf
    <label for="">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
 </div>
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Digite seu nome" required>
 </div>

  {{-- <label for="cargo">Cargo</label>
    <input type="number" name="cargo" id="cargo"
    value="{{
        $cargo && $cargo->cargo != '' ?
        $cargo->cargo : old(id_cargo)
       }}" > --}}
    {{-- <label for="cargo">Cargo</label>
    <input type="number" name="cargo" id="cargo"
    value="{{
        $id_cargo && $id_cargo->id_cargo != '' ?
        $id_cargo->id_cargo : old(id_cargo)
       }}" > --}}
       <input type="submit" value="Atualizar">
</form>

@endsection
@section('scripts')

@endsection
