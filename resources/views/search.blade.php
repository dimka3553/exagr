<x-site-layout>
    <x-search-sidebar :assetTypes="$assetTypes" :assetone="$assetone_id" :assettwo="$assettwo_id"/>
    <div class="ml-[400px]">
        <div class="h-[60px] bg-white sticky top-0 border-b-[1px] border-[#dddddd] flex px-4 items-center">
            <svg width="101" height="30" viewBox="0 0 101 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M48.992 24V7.368H59.672V9.936H52.016V14.04H58.832V16.56H52.016V21.432H60.248V24H48.992ZM67.61 15.552L70.274 11.448H73.322L69.194 17.376C70.058 18.496 70.882 19.632 71.666 20.784C72.466 21.92 73.122 22.992 73.634 24H70.49C70.346 23.696 70.154 23.352 69.914 22.968C69.69 22.568 69.442 22.16 69.17 21.744C68.914 21.312 68.642 20.888 68.354 20.472C68.066 20.056 67.786 19.664 67.514 19.296C66.954 20.016 66.402 20.816 65.858 21.696C65.33 22.56 64.89 23.328 64.538 24H61.562C61.802 23.52 62.09 23.008 62.426 22.464C62.762 21.92 63.122 21.368 63.506 20.808C63.89 20.232 64.282 19.664 64.682 19.104C65.098 18.528 65.506 17.984 65.906 17.472L61.754 11.448H64.946L67.61 15.552ZM80.2171 21.96C81.1131 21.96 81.7931 21.912 82.2571 21.816V18.6C82.0971 18.552 81.8651 18.504 81.5611 18.456C81.2571 18.408 80.9211 18.384 80.5531 18.384C80.2331 18.384 79.9051 18.408 79.5691 18.456C79.2491 18.504 78.9531 18.592 78.6811 18.72C78.4251 18.848 78.2171 19.032 78.0571 19.272C77.8971 19.496 77.8171 19.784 77.8171 20.136C77.8171 20.824 78.0331 21.304 78.4651 21.576C78.8971 21.832 79.4811 21.96 80.2171 21.96ZM79.9771 11.136C80.9371 11.136 81.7451 11.256 82.4011 11.496C83.0571 11.736 83.5771 12.072 83.9611 12.504C84.3611 12.936 84.6411 13.464 84.8011 14.088C84.9771 14.696 85.0651 15.368 85.0651 16.104V23.712C84.6171 23.808 83.9371 23.92 83.0251 24.048C82.1291 24.192 81.1131 24.264 79.9771 24.264C79.2251 24.264 78.5371 24.192 77.9131 24.048C77.2891 23.904 76.7531 23.672 76.3051 23.352C75.8731 23.032 75.5291 22.616 75.2731 22.104C75.0331 21.592 74.9131 20.96 74.9131 20.208C74.9131 19.488 75.0491 18.88 75.3211 18.384C75.6091 17.888 75.9931 17.488 76.4731 17.184C76.9531 16.864 77.5051 16.64 78.1291 16.512C78.7691 16.368 79.4331 16.296 80.1211 16.296C80.4411 16.296 80.7771 16.32 81.1291 16.368C81.4811 16.4 81.8571 16.464 82.2571 16.56V16.08C82.2571 15.744 82.2171 15.424 82.1371 15.12C82.0571 14.816 81.9131 14.552 81.7051 14.328C81.5131 14.088 81.2491 13.904 80.9131 13.776C80.5931 13.648 80.1851 13.584 79.6891 13.584C79.0171 13.584 78.4011 13.632 77.8411 13.728C77.2811 13.824 76.8251 13.936 76.4731 14.064L76.1131 11.712C76.4811 11.584 77.0171 11.456 77.7211 11.328C78.4251 11.2 79.1771 11.136 79.9771 11.136ZM90.9014 17.4C90.9014 18.632 91.1654 19.536 91.6934 20.112C92.2374 20.672 92.9334 20.952 93.7814 20.952C94.2454 20.952 94.6774 20.888 95.0774 20.76C95.4934 20.632 95.8294 20.48 96.0854 20.304V13.8C95.8774 13.752 95.6214 13.712 95.3174 13.68C95.0134 13.632 94.6294 13.608 94.1654 13.608C93.1094 13.608 92.3014 13.96 91.7414 14.664C91.1814 15.352 90.9014 16.264 90.9014 17.4ZM98.9894 22.728C98.9894 24.728 98.4774 26.192 97.4534 27.12C96.4454 28.048 94.8934 28.512 92.7974 28.512C92.0294 28.512 91.2774 28.448 90.5414 28.32C89.8214 28.192 89.1654 28.024 88.5734 27.816L89.1014 25.344C89.5974 25.552 90.1574 25.72 90.7814 25.848C91.4214 25.976 92.1094 26.04 92.8454 26.04C94.0134 26.04 94.8454 25.8 95.3414 25.32C95.8374 24.84 96.0854 24.128 96.0854 23.184V22.704C95.7974 22.848 95.4134 22.992 94.9334 23.136C94.4694 23.28 93.9334 23.352 93.3254 23.352C92.5254 23.352 91.7894 23.224 91.1174 22.968C90.4614 22.712 89.8934 22.336 89.4134 21.84C88.9494 21.344 88.5814 20.728 88.3094 19.992C88.0534 19.24 87.9254 18.376 87.9254 17.4C87.9254 16.488 88.0614 15.648 88.3334 14.88C88.6214 14.112 89.0294 13.456 89.5574 12.912C90.1014 12.368 90.7574 11.944 91.5254 11.64C92.2934 11.336 93.1654 11.184 94.1414 11.184C95.0854 11.184 95.9814 11.256 96.8294 11.4C97.6774 11.544 98.3974 11.696 98.9894 11.856V22.728Z" fill="#FFA000"/>
                <path d="M27.4602 1.24469C27.8561 0.652018 28.7273 0.652019 29.1232 1.24469L30.6289 3.49856C30.8535 3.83482 30.8535 4.27329 30.6289 4.60955L14.4982 28.7553C14.1023 29.348 13.2311 29.348 12.8352 28.7553L11.3295 26.5014C11.1049 26.1652 11.1049 25.7267 11.3295 25.3904L27.4602 1.24469Z" fill="#FFA000"/>
                <path d="M1.3711 4.60956C1.14646 4.27329 1.14646 3.83482 1.3711 3.49856L2.87681 1.24469C3.27274 0.652022 4.14391 0.652023 4.53984 1.24469L20.6705 25.3904C20.8951 25.7267 20.8951 26.1652 20.6705 26.5014L19.1648 28.7553C18.7689 29.348 17.8977 29.348 17.5018 28.7553L1.3711 4.60956Z" fill="#FFA000"/>
                <path d="M4.29809 14.9066C3.7458 14.9066 3.29809 14.4589 3.29809 13.9066V10.1733C3.29809 9.62099 3.7458 9.17327 4.29809 9.17327H26.811C27.3633 9.17327 27.811 9.62099 27.811 10.1733V13.9066C27.811 14.4589 27.3633 14.9066 26.811 14.9066H4.29809Z" fill="#FFA000"/>
                <path d="M27.4602 1.24469C27.8561 0.652018 28.7273 0.652019 29.1232 1.24469L30.6289 3.49856C30.8535 3.83482 30.8535 4.27329 30.6289 4.60955L14.4982 28.7553C14.1023 29.348 13.2311 29.348 12.8352 28.7553L11.3295 26.5014C11.1049 26.1652 11.1049 25.7267 11.3295 25.3904L27.4602 1.24469Z" stroke="white"/>
                <path d="M1.3711 4.60956C1.14646 4.27329 1.14646 3.83482 1.3711 3.49856L2.87681 1.24469C3.27274 0.652022 4.14391 0.652023 4.53984 1.24469L20.6705 25.3904C20.8951 25.7267 20.8951 26.1652 20.6705 26.5014L19.1648 28.7553C18.7689 29.348 17.8977 29.348 17.5018 28.7553L1.3711 4.60956Z" stroke="white"/>
                <path d="M4.29809 14.9066C3.7458 14.9066 3.29809 14.4589 3.29809 13.9066V10.1733C3.29809 9.62099 3.7458 9.17327 4.29809 9.17327H26.811C27.3633 9.17327 27.811 9.62099 27.811 10.1733V13.9066C27.811 14.4589 27.3633 14.9066 26.811 14.9066H4.29809Z" stroke="white"/>
            </svg>
        </div>
        <div class="h-[60px] bg-white sticky top-[60px] border-b-[1px] border-[#dddddd] flex px-4 items-center ">
            <h2 class="text-[22px] font-bold">{{$assetOne->symbol}} → {{$assetTwo->symbol}}</h2>
        </div>
        <div class="px-8  py-4 exchanges">
            @foreach($exchanges as $exchange)
                <div class="flex items-center h-[60px] border-[#dddddd] border-[1px] my-4 px-4 rounded-[10px] justify-between exchange" rate="{{$exchange->assets->find($assetTwo->id)->assetPrices->where('exchange_id', $exchange->id)->where('asset_id', $assetTwo->id)->first()->price / $exchange->assets->find($assetOne->id)->assetPrices->where('exchange_id', $exchange->id)->where('asset_id', $assetOne->id)->first()->price}}">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-[#{{substr(hash('ripemd160', $exchange->id),2,6)}}] rounded-full min-w-[40px] min-h-10"></div>
                        <p>{{$exchange->name}}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-[#46BA33] n">{{$exchange->assets->find($assetTwo->id)->assetPrices->where('exchange_id', $exchange->id)->where('asset_id', $assetTwo->id)->first()->price / $exchange->assets->find($assetOne->id)->assetPrices->where('exchange_id', $exchange->id)->where('asset_id', $assetOne->id)->first()->price}} {{$assetOne->symbol}} / {{$assetTwo->symbol}}</div>
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 21L11 11L1 1" stroke="#666666" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-site-layout>

<script>
    let exchanges = document.querySelectorAll('.exchange');
    
    exchanges = Array.from(exchanges).sort((a, b) => {
        return a.getAttribute('rate') - b.getAttribute('rate');
    });

    exchanges.forEach(exchange => {
        document.querySelector('.exchanges').appendChild(exchange);
    });

</script>