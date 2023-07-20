{{-- Message --}}
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="bi bi-x-lg"></i>
        </button>
        <script>$(".alert").alert('close')</script>
        <strong>Sucesso !</strong> {{ session('success') }}

    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="bi bi-x-lg"></i>
        </button>
        <script>$(".alert").alert('close')</script>
        <strong>Erro !</strong> {{ session('error') }}
    </div>
@endif
