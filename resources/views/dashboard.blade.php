<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Data

                    <form>
                        <input type="text" placeholder="Name">
                        <input type="submit" value="Create new type">
                    </form>

                    @foreach($assetTypes as $type)
                        <div class="mt-4 box-border p-4 rounded-md bg-gray-50">

                            <div class="text-[#0066ff] font-bold text-lg">
                                {{ $type->id }}:
                                {{ $type->name }}
                            </div>

                            <form>
                                <input type="text" placeholder="Name">
                                <input type="submit" value="Create new asset">
                            </form>

                            <div class="flex flex-row p-2 justify-evenly">
                                <p>id</p>
                                <p>name</p>
                                <p>symbol</p>
                                <p>logo</p>
                                <p>asset_type_id</p>
                                <p>created_at</p>
                                <p>updated_at</p>
                            </div>
                            @foreach($type->assets as $asset)
                                <div class="flex flex-row p-2 justify-evenly">
                                    <p>{{ $asset->id }}</p>
                                    <p>{{ $asset->name }}</p>
                                    <p>{{ $asset->symbol }}</p>
                                    <p>{{ $asset->logo }}</p>
                                    <p>{{ $asset->asset_type_id }}</p>
                                    <p>{{ $asset->created_at }}</p>
                                    <p>{{ $asset->updated_at }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    {{ $assetTypes[0] }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
