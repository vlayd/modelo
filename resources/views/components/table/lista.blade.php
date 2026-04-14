<div class="card shadow-lg">
    <div class="card-header pb-0">
        <div class="d-lg-flex">
            <h5 class="mb-0">{{ $title }}</h5>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <a class="btn btn-primary btn_prepare_save text-xs" href="{{ route('usuario.create') }}" title="{{ $textButton }}">
                    <i class="fas fa-plus fa-lg me-1"></i>{{ $textButton }}
                </a>
            </div>
        </div>
    </div>
    <div class="card-body p-3" id="tabela">
        {{ $slot }}
    </div>
</div>
