<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        td, tr, table{
            border: 1px solid;
            border-collapse: unset;
            border-spacing: 0px;
        }
        table{
            display: inline-table;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <p class="text-[20px] mb-4">Asset types</p>

                        <table class="w-full">
                        <tr class="bg-green-300 assettype">
                            <td>assetType_id</td>
                            <td>assetType_name</td>
                        </tr>
                        @foreach($assetTypes as $type)
                            <tr class="bg-green-300 assettype" assettype="{{$type->id}}">
                                <td>{{$type->id}}</td>
                                <td><form><input type="text" class="h-8 bg-green-300" value="{{$type->name}}"> <button type="submit" class="bg-[green] px-3 py-1 text-white">Save</button></form></td>
                            </tr>
                            <tr class="bg-red-300 asset hidden" assettype="{{$type->id}}">
                                <td>asset_id</td>
                                <td>asset_name</td>
                                <td>asset_symbol</td>
                                <td>asset_logo</td>
                            </tr>
                            @foreach($type->assets as $asset)
                                <tr class="bg-red-300 asset hidden" assettype="{{$type->id}}" assetid="{{$asset->id}}">
                                    <td>{{ $asset->id }}</td>
                                    <td><form><input type="text" class="h-8 bg-red-300" value="{{ $asset->name }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                    <td><form><input type="text" class="h-8 bg-red-300" value="{{ $asset->symbol }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                    <td><form><input type="text" class="h-8 bg-red-300" value="{{ $asset->logo }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                </tr>
                                <tr class="bg-amber-300 exchange hidden" assettype="{{$type->id}}" assetid="{{$asset->id}}">
                                    <td>exchange_id</td>
                                    <td>exchange_name</td>
                                    <td>exchange_logo</td>
                                    <td>price_on_exchange</td>
                                </tr>
                                @foreach($asset->exchanges as $exchange)
                                    <tr class="bg-amber-300 exchange hidden" assettype="{{$type->id}}" assetid="{{$asset->id}}">
                                        <td>{{$exchange->id}}</td>
                                        <td><form><input type="text" class="h-8 bg-amber-300" value="{{ $exchange->name }}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                        <td><form><input type="text" class="h-8 bg-amber-300" value="{{ $exchange->logo }}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                        <td><form><input type="text" class="h-8 bg-amber-300" value="{{ $exchange->assets->find($asset->id)->assetPrices->where('exchange_id', $exchange->id)->where('asset_id', $asset->id)->first()->price }}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    let assetTypes = document.querySelectorAll('.assettype');
    assetTypes.forEach(assetType => {
        assetType.addEventListener('click', function(){
            let assets = document.querySelectorAll('.asset');
            assets.forEach(asset => {
                if(asset.getAttribute('assettype') == assetType.getAttribute('assettype')){
                    asset.classList.toggle('hidden');
                }
            });
        });
    });

    let assets = document.querySelectorAll('.asset');
    assets.forEach(asset => {
        asset.addEventListener('click', function(){
            let exchanges = document.querySelectorAll('.exchange');
            exchanges.forEach(exchange => {
                if(exchange.getAttribute('assettype') == asset.getAttribute('assettype') && exchange.getAttribute('assetid') == asset.getAttribute('assetid')){
                    exchange.classList.toggle('hidden');
                }
            });
        });
    });
</script>
