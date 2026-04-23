<tr>
    @foreach ($tds as $td)
        <td class="mb-0 text-xs {{ $classTd ?? 'text-center' }}">
        @if(!is_array($td))
            <h6 class="mb-0 text-xs" id="">{{ $td }}</h6>
        @else
            @foreach ($td as $action)
                <x-icons.icon-action :type="$action['type']" :modal="$action['modal']??''" :disabled="$action['disabled']??false" :route="$action['route']??''" :argRoute="$action['argRoute']??''" />
            @endforeach
        @endif
        </td>
    @endforeach
</tr>
