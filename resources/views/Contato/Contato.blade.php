@extends('layouts.base')

@section('conteudo')

@include('layouts.menu')

@include('alerta')

<div class="container-fluid">
<div class="row">
    <form action="{{ route('contato.send') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Digite seu nome" required>
        </div>

        <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" class="form-control" name="email" placeholder="Digite seu email" required>
        </div>

        <div class="form-group">
            <label for="">Assunto</label>
            <input type="text" class="form-control" name="subject" placeholder="Digite o Assunto" required>
        </div>

        <div class="mt-2 form-group">
            <textarea name="message" class="form-control" placeholder="Mensagem aqui..."></textarea>
        </div>

            <button type="submit" class="mt-2 btn btn-block btn-success">Send Email</button>
    </form>
    </div>
</div>
</div>
@endsection





