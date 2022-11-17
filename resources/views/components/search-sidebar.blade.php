@props(['assetTypes', 'assetone', 'assettwo'])
<div class="fixed top-0 left-0 h-full bg-slate-100 w-full max-w-[400px] overflow-auto">
    <div class="h-[60px] border-b-[1px] border-[#dddddd] sticky top-0 w-full bg-slate-100 z-[2] flex">
        <div class="w-[50%] h-[60px] relative border-r-[1px]">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" class="absolute mt-[21px] ml-[16px]" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M12.3801 7.07C12.3801 4.346 10.1011 2.137 7.29111 2.137C4.48111 2.137 2.20311 4.346 2.20311 7.071C2.20311 9.796 4.48111 12.005 7.29111 12.005C10.1011 12.005 12.3791 9.795 12.3791 7.071L12.3801 7.07ZM14.0671 7.07C14.0671 10.7 11.0331 13.64 7.29111 13.64C3.54911 13.64 0.516113 10.7 0.516113 7.07C0.516113 3.443 3.54911 0.5 7.29011 0.5C11.0321 0.5 14.0661 3.442 14.0661 7.07H14.0671Z" fill="#999999"/>
                    <path d="M12.5101 14.19L12.4481 14.13C11.6091 13.315 11.2111 12.93 10.7301 12.47C10.1721 11.936 10.0161 11.35 10.5641 10.83C11.1121 10.309 11.6961 10.474 12.2541 11.015L14.3801 13.077L14.7341 13.421L17.2141 15.827C17.7701 16.366 17.9271 16.948 17.3691 17.471C16.8151 17.988 16.2411 17.826 15.6861 17.276C15.2011 16.797 14.8011 16.408 13.9311 15.568L13.8951 15.533C13.4323 15.0865 12.9706 14.6388 12.5101 14.19Z" fill="#999999"/>
                </g>
            </svg>

            <input type="text" placeholder="I give" class="w-full h-full border-0 pl-[50px] text-[18px] bg-[transparent] searchl">
        </div>
        <div class="w-[50%] h-[60px] relative border-r-[1px]">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" class="absolute mt-[21px] ml-[16px]" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M12.3801 7.07C12.3801 4.346 10.1011 2.137 7.29111 2.137C4.48111 2.137 2.20311 4.346 2.20311 7.071C2.20311 9.796 4.48111 12.005 7.29111 12.005C10.1011 12.005 12.3791 9.795 12.3791 7.071L12.3801 7.07ZM14.0671 7.07C14.0671 10.7 11.0331 13.64 7.29111 13.64C3.54911 13.64 0.516113 10.7 0.516113 7.07C0.516113 3.443 3.54911 0.5 7.29011 0.5C11.0321 0.5 14.0661 3.442 14.0661 7.07H14.0671Z" fill="#999999"/>
                    <path d="M12.5101 14.19L12.4481 14.13C11.6091 13.315 11.2111 12.93 10.7301 12.47C10.1721 11.936 10.0161 11.35 10.5641 10.83C11.1121 10.309 11.6961 10.474 12.2541 11.015L14.3801 13.077L14.7341 13.421L17.2141 15.827C17.7701 16.366 17.9271 16.948 17.3691 17.471C16.8151 17.988 16.2411 17.826 15.6861 17.276C15.2011 16.797 14.8011 16.408 13.9311 15.568L13.8951 15.533C13.4323 15.0865 12.9706 14.6388 12.5101 14.19Z" fill="#999999"/>
                </g>
            </svg>

            <input type="text" placeholder="I get" class="w-full h-full border-0 pl-[50px] text-[18px]  bg-[transparent] searchr">
        </div>
    </div>
    <div class="allassets">
        @foreach($assetTypes as $assetType)
            <div>
                <div class="flex justify-center items-center h-10 border-b-[1px] border-[#dddddd] text-[#666666]  bg-slate-100 z-[1] sticky top-[60px] assettype">{{$assetType->name}}</div>
                @foreach($assetType->assets as $asset)
                    <div class="flex">
                        <div class="cursor-pointer w-[50%] h-10 flex items-center px-4 gap-4 border-b-[1px] border-[#dddddd] hover:bg-slate-200 transition-[0.2s] border-r-[1px] text-[14px] assetl hover" dbid="{{$asset->id}}">
                            <div class="w-5 h-5 bg-[#{{substr(hash('ripemd160', $asset->id),0,6)}}] rounded-full min-w-[20px] min-h-5"></div>
                            <div class="truncate ">{{$asset->name}}({{$asset->symbol}})</div>
                        </div>
                        <div class="cursor-pointer w-[50%] h-10 flex items-center px-4 gap-4 truncate border-b-[1px] border-[#dddddd] hover:bg-slate-200 transition-[0.2s] text-[14px] assetr"  dbid="{{$asset->id}}">
                            <div class="w-5 h-5 bg-[#{{substr(hash('ripemd160', $asset->id),0,6)}}] rounded-full min-w-[20px] min-h-5"></div>
                            <div class="truncate ">{{$asset->name}}({{$asset->symbol}})</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="flex searchdiv hidden">
        <div class="l w-[50%]"></div>
        <div class="r w-[50%]"></div>
    </div>
</div>

<script>
    let assetTypes = document.querySelectorAll('.assettype');
    let assetsl = document.querySelectorAll('.assetl');
    let assetsr = document.querySelectorAll('.assetr');
    let searchl = document.querySelector('.searchl');
    let searchr = document.querySelector('.searchr');
    let searchdiv = document.querySelector('.searchdiv');
    let l = document.querySelector('.l');
    let r = document.querySelector('.r');
    let allassets = document.querySelector('.allassets');

    assetsl.forEach((asset)=>{
        asset.addEventListener('click', (e)=>{
            assetsl.forEach((asset)=>{
                asset.classList.remove('!bg-orange-100');
            });
            asset.classList.add('!bg-orange-100');
            check()
        })
    })
    assetsr.forEach((asset)=>{
        asset.addEventListener('click', (e)=>{
            assetsr.forEach((asset)=>{
                asset.classList.remove('!bg-orange-100');
            });
            asset.classList.add('!bg-orange-100');
            check()
        })
    })

    searchr.addEventListener('input', (e)=>{
        let search = e.target.value.toLowerCase();
        let lsearch = searchl.value.toLowerCase();

        assetsr.forEach((asset)=>{
            if(asset.innerText.toLowerCase().includes(search)){
                asset.classList.remove('hidden');
            }else{
                asset.classList.add('hidden');
            }
        });

        if(search !='' || lsearch !='') {
            l.innerHTML="";
            r.innerHTML="";
            allassets.classList.add('hidden');
            assetsr.forEach((asset)=>{
                let clonedAsset = asset.cloneNode(true);
                r.append(clonedAsset);
                clonedAsset.classList.add('!w-full');
                clonedAsset.classList.add('cl');
                clonedAsset.addEventListener('click', (e)=>{
                    assetsr.forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    document.querySelectorAll('.cl').forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    asset.classList.add('!bg-orange-100');
                    clonedAsset.classList.add('!bg-orange-100');
                    check()
                })
            });

            assetsl.forEach((asset)=>{
                let clonedAsset = asset.cloneNode(true);
                l.append(clonedAsset);
                clonedAsset.classList.add('!w-full');
                clonedAsset.classList.add('cr');
                clonedAsset.addEventListener('click', (e)=>{
                    assetsl.forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    document.querySelectorAll('.cr').forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    asset.classList.add('!bg-orange-100');
                    clonedAsset.classList.add('!bg-orange-100');
                    check()
                })
            });
            searchdiv.classList.remove('hidden');
        }else{
            allassets.classList.remove('hidden');
            assetsl.forEach((asset)=>{
                asset.classList.remove('!w-full');
            });
            assetsr.forEach((asset)=>{
                asset.classList.remove('!w-full');
            });
            searchdiv.classList.add('hidden');
        }

    });

    searchl.addEventListener('input', (e)=>{
        let search = e.target.value.toLowerCase();
        let rsearch = searchr.value.toLowerCase();

        assetsl.forEach((asset)=>{
            if(asset.innerText.toLowerCase().includes(search)){
                asset.classList.remove('hidden');
            }else{
                asset.classList.add('hidden');
            }
        });

        if(search !='' || rsearch !='') {
            l.innerHTML="";
            r.innerHTML="";
            allassets.classList.add('hidden');
            assetsl.forEach((asset)=>{
                let clonedAsset = asset.cloneNode(true);
                l.append(clonedAsset);
                clonedAsset.classList.add('!w-full');
                clonedAsset.classList.add('cr');
                clonedAsset.addEventListener('click', (e)=>{
                    assetsl.forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    document.querySelectorAll('.cr').forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    asset.classList.add('!bg-orange-100');
                    clonedAsset.classList.add('!bg-orange-100');
                    check()
                })
            });

            assetsr.forEach((asset)=>{
                let clonedAsset = asset.cloneNode(true);
                r.append(clonedAsset);
                clonedAsset.classList.add('!w-full');
                clonedAsset.classList.add('cl');
                clonedAsset.addEventListener('click', (e)=>{
                    assetsr.forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    document.querySelectorAll('.cl').forEach((asset)=>{
                        asset.classList.remove('!bg-orange-100');
                    });
                    asset.classList.add('!bg-orange-100');
                    clonedAsset.classList.add('!bg-orange-100');
                    check()
                })
            });
            searchdiv.classList.remove('hidden');
        }else{
            allassets.classList.remove('hidden');
            assetsl.forEach((asset)=>{
                asset.classList.remove('!w-full');
            });
            assetsr.forEach((asset)=>{
                asset.classList.remove('!w-full');
            });
            searchdiv.classList.add('hidden');
        }
    });

    function check(){
        let l = 0;
        let r = 0;
        assetsl.forEach((asset)=>{
            if(asset.classList.contains('!bg-orange-100')){
                l=asset.attributes.dbid.value;
            }
        })
        assetsr.forEach((asset)=>{
            if(asset.classList.contains('!bg-orange-100')){
                r=asset.attributes.dbid.value;
            }
        })
        if(l != 0 && r != 0){
            //redirect to search page
            window.location.href = '/search/'+l+'/'+r;
        }
    }

    function setActive(){
        assetsl.forEach((asset)=>{
            if(asset.attributes.dbid.value == '{{ $assetone }}'){
                asset.classList.add('!bg-orange-100');
            }
        })
        assetsr.forEach((asset)=>{
            if(asset.attributes.dbid.value == '{{ $assettwo }}'){
                asset.classList.add('!bg-orange-100');
            }
        })
    }
    setActive();
</script>
