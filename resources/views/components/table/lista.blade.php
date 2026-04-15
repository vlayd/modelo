<x-cards.card>
    <x-slot:header>
        <div class="d-lg-flex">
            <h5 class="mb-0">{{ $title }}</h5>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <a class="btn btn-primary btn_prepare_save text-xs" href="{{ route('usuario.create') }}" title="{{ $textButton }}">
                    <i class="fas fa-plus fa-lg me-1"></i>{{ $textButton }}
                </a>
            </div>
        </div>
    </x-slot:header>
    {{ $slot }}
</x-cards.card>
