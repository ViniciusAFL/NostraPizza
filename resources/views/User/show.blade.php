@section('content')

<h1>User: {{$user->user}}</h1>
<h2>Relação de usuários com esse user</h2>

<table>
    <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>
                <a href="#">Editar</a>
                <a href="#">Ver</a>
            </td>
            <td>
                ---
            </td>
        </tr>
    </tbody>
</table>
@endsection

@section('scripts')
@endsection
