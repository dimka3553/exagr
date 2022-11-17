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
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <p class="text-[20px] mb-4">Asset types</p>

                        <table class="w-full">
                        <tr class="bg-green-300 assettype">
                            <td>assetType_id</td>
                            <td>assetType_name</td>
                            <td><form method="POST" action="/create/type">@csrf @method('POST')<input type="text" name="name" placeholder="name" class="h-8 bg-green-300" value="">  <button type="submit" class="bg-[green] px-3 py-1 text-white">Create</button> </form></td>
                        </tr>
                        @foreach($assetTypes as $type)
                            <tr class="bg-green-300 assettype" assettype="{{$type->id}}">
                                <td>{{$type->id}}</td>
                                <td><form method="POST" action="/update/type">@csrf @method('POST')<input type="text" name="name" class="h-8 bg-green-300" value="{{$type->name}}"> <input type="hidden" name="id" value="{{ $type->id }}"> <button type="submit" class="bg-[green] px-3 py-1 text-white">Save</button></form></td>
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
                                    <td><form method="POST" action="/update/assetname">@csrf @method('POST')<input type="text" name="name" class="h-8 bg-red-300" value="{{ $asset->name }}"> <input type="hidden" name="id" value="{{ $asset->id }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                    <td><form method="POST" action="/update/assetsymbol">@csrf @method('POST')<input type="text" name="symbol" class="h-8 bg-red-300" value="{{ $asset->symbol }}"> <input type="hidden" name="id" value="{{ $asset->id }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                    <td><form method="POST" action="/update/assetlogo">@csrf @method('POST')<input type="text" name="logo" class="h-8 bg-red-300" value="{{ $asset->logo }}"> <input type="hidden" name="id" value="{{ $asset->id }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
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
                                        <td><form method="POST" action="/update/exname">@csrf @method('POST')<input type="text" name="name" class="h-8 bg-amber-300" value="{{ $exchange->name }}"> <input type="hidden" name="id" value="{{$exchange->id}}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                        <td><form method="POST" action="/update/exlogo">@csrf @method('POST')<input type="text" name="logo" class="h-8 bg-amber-300" value="{{ $exchange->logo }}"> <input type="hidden" name="id" value="{{$exchange->id}}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                        <td><form method="POST" action="/update/exprice">@csrf @method('POST')<input type="text" name="price" class="h-8 bg-amber-300" value="{{ $exchange->assets->find($asset->id)->assetPrices->where('exchange_id', $exchange->id)->where('asset_id', $asset->id)->first()->price }}"> <input type="hidden" name="id" value="{{$exchange->id}}"> <input type="hidden" name="asset_id" value="{{$asset->id}}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                        <td><form method="POST" action="/delete/assetprice/{{ $exchange->assets->find($asset->id)->assetPrices->where('exchange_id', $exchange->id)->where('asset_id', $asset->id)->first()->id }}">@csrf @method('DELETE') <button type="submit" class="bg-[orange] px-3 py-1 text-white">Detach</button> </form></td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    </table>
                    <form method="POST" action="/create/linkex2as">
                        @csrf
                        @method('POST')
                        <label>Attach Asset To Exchange</label>
                        <input type="text" name="asset_id" placeholder="asset_id" class="h-8 bg-green-300" value="">
                        <input type="text" name="exchange_id" placeholder="exchange_id" class="h-8 bg-green-300" value="">
                        <input type="text" name="price" placeholder="price" class="h-8 bg-green-300" value="">
                        <button type="submit" class="bg-[green] px-3 py-1 text-white">Create</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-[20px] mb-4">Assets</p>

                    <table class="w-full">
                       <tr class="bg-red-300">
                            <td>asset_id</td>
                            <td>asset_name</td>
                            <td>asset_symbol</td>
                            <td>asset_logo</td>
                            <td>asset_type</td>
                       </tr>
                        @foreach($assets as $asset)
                            <tr class="bg-red-300">
                                <td>{{ $asset->id }}</td>
                                <td><form method="POST" action="/update/assetname">@csrf @method('POST')<input type="text" name="name" class="h-8 bg-red-300" value="{{ $asset->name }}"> <input type="hidden" name="id" value="{{ $asset->id }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                <td><form method="POST" action="/update/assetsymbol">@csrf @method('POST')<input type="text" name="symbol" class="h-8 bg-red-300" value="{{ $asset->symbol }}"> <input type="hidden" name="id" value="{{ $asset->id }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                <td><form method="POST" action="/update/assetlogo">@csrf @method('POST')<input type="text" name="logo" class="h-8 bg-red-300" value="{{ $asset->logo }}"> <input type="hidden" name="id" value="{{ $asset->id }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Save</button></form></td>
                                <td><form method="POST" action="/update/assettypeid">@csrf @method('POST')<input type="text" name="asset_type_id" class="h-8 bg-red-300" value="{{ $asset->asset_type_id }}"> <input type="hidden" name="id" value="{{ $asset->id }}"> <button type="submit" class="bg-[red] px-3 py-1 text-white">Update</button></form></td>
                                <td><form method="POST" action="/delete/asset/{{$asset->id}}">@csrf @method('DELETE') <button type="submit" class="bg-[red] px-3 py-1 text-white">Delete</button></form> </td>
                            </tr>
                        @endforeach
                        <form method="POST" action="/create/asset">
                            @csrf
                            @method('POST')
                            <tr class="bg-red-300">
                                    <td>New Asset</td>
                                    <td><input type="text" name="name" class="h-8 bg-red-300" placeholder="Name" value=""></td>
                                    <td><input type="text" name="symbol" class="h-8 bg-red-300" placeholder="Symbol" value=""></td>
                                    <td><input type="text" name="logo" class="h-8 bg-red-300" placeholder="Logo url" value=""></td>
                                <td><input type="text" name="asset_type_id" class="h-8 bg-red-300" placeholder="Asset type id" value=""><button class="bg-[red] px-3 py-1 text-white" type="submit">Add</button></td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p class="text-[20px] mb-4">Exchanges</p>

                        <table class="w-full">
                            <tr class="bg-amber-300">
                                <td>exchange_id</td>
                                <td>exchange_name</td>
                                <td>exchange_logo</td>
                                <td>exchange_url</td>
                            </tr>
                            @foreach($exchanges as $exchange)
                                <tr class="bg-amber-300">
                                    <td>{{ $exchange->id }}</td>
                                    <td><form method="POST" action="/update/exname">@csrf @method('POST')<input type="text" name="name" class="h-8 bg-amber-300" value="{{ $exchange->name }}"> <input type="hidden" name="id" value="{{ $exchange->id }}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                    <td><form method="POST" action="/update/exlogou">@csrf @method('POST')<input type="text" name="logo" class="h-8 bg-amber-300" value="{{ $exchange->logo }}"> <input type="hidden" name="id" value="{{ $exchange->id }}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                    <td><form method="POST" action="/update/exchangeurl">@csrf @method('POST')<input type="text" name="url" class="h-8 bg-amber-300" value="{{ $exchange->url }}"> <input type="hidden" name="id" value="{{ $exchange->id }}"> <button type="submit" class="bg-[orange] px-3 py-1 text-white">Save</button></form></td>
                                    <td><form method="POST" action="/delete/ex/{{$exchange->id}}">@csrf @method('DELETE') <button type="submit" class="bg-[orange] px-3 py-1 text-white">Delete</button></form> </td>
                                </tr>
                            @endforeach
                            <form method="POST" action="/create/ex">
                                @csrf
                                @method('POST')
                                <tr class="bg-amber-300">
                                    <td>New Exchange</td>
                                    <td><input type="text" name="name" class="h-8 bg-amber-300" placeholder="Name" value=""></td>
                                    <td><input type="text" name="logo" class="h-8 bg-amber-300" placeholder="Logo url" value=""></td>
                                    <td><input type="text" name="url" class="h-8 bg-amber-300" placeholder="Url" value=""><button class="bg-[orange] px-3 py-1 text-white" type="submit">Add</button></td>
                                </tr>
                            </form>

                        </table>
                    </div>
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
