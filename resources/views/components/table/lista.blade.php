<x-cards.card>
    <x-slot:header>
        <div class="d-lg-flex">
            <div>
                <h5 class="mb-0">{{ $title }}</h5>
                <p class="text-sm">{{ $description }}</p>
            </div>
            @if ($showButton)
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <x-forms.button
                    :text=$textButton
                    :url=$urlButton
                    type="link"
                    class="text-xs me-3"
                    icon="fas fa-plus fa-lg"
                />
            </div>
            @endif
        </div>
    </x-slot:header>
    <div class="table-responsive" class="">
    <table class="table table-flush table-striped table-hover" id="data-list-db">
        {{ $thead }}
        <tbody>
            {{ $tbody }}
        </tbody>

    </table>
</div>
</x-cards.card>
