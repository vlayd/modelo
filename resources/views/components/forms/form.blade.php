<form id="form_save" action="{{ route($routeName) }}" method="{{ $method }}" novalidate>
    @csrf
    {{ $slot }}
</form>