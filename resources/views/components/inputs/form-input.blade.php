<div class="form-group">
    @if (isset($label))
        <label for="{{ $campo ?? '' }}">{{ $label }}</label>
    @endif
    <div class="input-group">
        <input name="{{ $campo ?? '' }}" type="{{ $type ?? 'text' }}" id="{{ $campoId ?? $campo ?? class="form-control {{ $classeInput ?? '' }} input_text" value="{{ $valor ?? '' }}" placeholder="">
        @if (isset($inputGroup))
            <span class="input-group-text">{{ $inputGroup }}</span>
        @endif

    </div>
    <div class="text-danger text-xs {{ $campo ?? '' }}_erro input_erro"></div>
</div>
