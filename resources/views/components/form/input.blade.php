<div class="form-group {{$classe??'col-12'}}">
    @isset($label)
        <label for="{{ $campo ?? '' }}">{{ $label }}</label>
    @endisset
    <div class="input-group">
        @if (isset($inputGroup) && $positionGroup == 'before')
            <span class="input-group-text">{{ $inputGroup }}</span>
        @endif
        <input name="{{ $campo ?? '' }}" type="{{ $type ?? 'text' }}" id="{{ $campoId ?? $campo ?? '' }}" class="form-control {{ $classeInput ?? '' }} input_text" value="{{ $valor ?? '' }}" placeholder="{{ $placeholder ?? '' }}">
        @if (isset($inputGroup) && $positionGroup == 'after')
            <span class="input-group-text">{{ $inputGroup }}</span>
        @endif

    </div>
    <div class="text-danger text-xs {{ $campo ?? '' }}_erro input_erro"></div>
</div>
