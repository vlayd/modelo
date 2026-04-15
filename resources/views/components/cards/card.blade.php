<div class="row">
    <div class="{{ $width}}">
        <div class="card shadow-lg">
            <div class="card-header pb-0">
                {{ $header }}
            </div>
            <div class="card-body p-3" id="{{ $id }}">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
