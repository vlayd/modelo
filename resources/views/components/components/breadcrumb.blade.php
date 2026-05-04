
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-white">
            <a class="text-white" href="{{ asset('') }}">
                <i class="fas fa-home text-white text-sm opacity-10"></i>
            </a>
        </li>
    @foreach ($breadcrumb as $item)
        @php
            $itemCurrent = $item[0];
        @endphp
        @if(isset($item[1]))
            <li class="breadcrumb-item text-white">
                <a class="text-white" href="{{ route($item[1]) }}">{{ $item[0] }}</a>
            </li>
        @else
            <li class="breadcrumb-item text-white opacity-5 active" aria-current="page">{{ $item[0] }}</li>
        @endif
    @endforeach
    </ol>
    <h6 class="font-weight-bolder mb-0 text-white">{{ $itemCurrent }}</h6>
</nav>
