
<{{ $tag }} class="btn btn-{{ $color }} {{ $width }} {{ $class }}" {!! $atrributes !!}>
    @if (isset($icon) && $positionIcon == 'before')
        <span
        @class([
            "btn-inner--icon",
            ($text ? 'me-2' : '')
        ])>
            <i class="{{ $icon }}"></i>
        </span>
    @endif
    @isset($text)
        <span class="btn-inner--text">{{ $text }}</span>
    @endisset
    @if (isset($icon) && $positionIcon == 'after')
        <span
        @class([
            "btn-inner--icon",
            ($text ? 'ms-2' : '')
        ])>
            <i class="{{ $icon }}"></i>
        </span>
    @endif
</{{ $tag }}>
