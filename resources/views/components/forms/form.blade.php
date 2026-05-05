<form id="form_save" {{ $attr }} novalidate>
    @csrf
    {{ $slot }}
</form>
