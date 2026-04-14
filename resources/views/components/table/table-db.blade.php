<div class="table-responsive" class="">
    <table class="table table-flush table-striped table-hover" id="data-list-db">
        <thead class="thead-light">
            <tr>
                <th class="text-center">Nº</th>
                @foreach ($ths as $th)
                    <th class="text-center">{{ $th }}</th>
                @endforeach
                @isset($actions)
                    <th class="text-center">Ações</th>
                @endisset
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($lista as $item) : ?>
                <tr>
                    <td class="mb-0 text-xs text-center">
                        <h6 class="mb-0 text-xs"><?= $i ?></h6>
                    </td>
                @foreach ($tds as $td)
                    <td class="mb-0 text-xs {{ $classTd ?? 'text-center' }}">
                        <h6 class="mb-0 text-xs" id="{{ $td.$item['id'] }}">{{ $item[$td] }}</h6>
                    </td>
                @endforeach
                    <td class="text-sm pb-0 text-center">
                        @foreach ($actions as $action)
                            @isset($action['td'])
                                @if ($item[$action['td']] == $action['value'])
                                    <x-icons.icon-action :type="$action['type']" :disabled="$action['disabled']??false"/>
                                @endif
                            @else
                                <x-icons.icon-action :type="$action['type']" :disabled="$action['disabled']??false"/>
                            @endisset
                        @endforeach
                    </td>
                </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>

<?=CDN_JS_DATATABLES?>
