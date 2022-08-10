@php
@endphp
<div class="uix-table uix-table--bordered is-responsive js-uix-table--responsive uix-table--alternant-row">
    <table>
        <thead>
            <tr>
                @foreach ($headers as $header => $hName)
                <th>{{$hName}}</th>
                @endforeach
                <!--<th>base<span class="js-uix-table-responsive__hidden"> | hidden on mobile</span></th>-->
            </tr>
        </thead>
        <tbody class="uix-t-l--md">
            @foreach ($data as $pData)
            <tr>
                @foreach ($headers as $header => $hName)
                <td>
                    @if ($header != 'pointOperation') {{$pData[$header]}} @else @include('website.modules.table._table-operation', ['type' => $type, 'info' => $pData]) @endif
                </td>
                @endforeach
            </tr>
            @endforeach
         </tbody>
    </table>    
</div>            
<br><br>
