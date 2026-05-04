<?php
// echo json_encode($tds[0][0]);exit;
?>
<tr>
    @foreach ($tds as $td)
    <td class="mb-0 text-xs {{ $td[0]['class'] ?? '' }}" id="">
    @foreach ($td as $action)
        @isset($action['item'])
            <h6 class="mb-0 text-xs" id="">{{ $action['item'] }}</h6>
        @else
            <x-icons.icon-action :type="$action['type']" :modal="$action['modal']??''" :disabled="$action['disabled']??false" :route="$action['route']??''" :argRoute="$action['argRoute']??''" />
        @endif
        @endforeach
    </td>
    @endforeach
</tr>
