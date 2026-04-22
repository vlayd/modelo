<tr>
    @foreach ($tds as $td)
        <td class="mb-0 text-xs {{ $classTd ?? 'text-center' }}">
            <h6 class="mb-0 text-xs" id="">{{ $td }}</h6>
        </td>
    @endforeach
    <td class="text-sm pb-0 text-center">
        {{ $actions ?? '' }}
    </td>
</tr>
