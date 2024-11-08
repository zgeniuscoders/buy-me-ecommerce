<form action="{{ route("Products.index") }}" method="get" class="mr-4 hidden md:block w-[600px]">
    <div class="border border-gray-200 rounded-md flex items-center py-2 px-4 min-w-[300px]">
        <input type="search" name="q" class="outline-none border-none bg-transparent w-full" placeholder="Rechercher un article" value="{{ old("q") }}">
        <button type="submit">
            <svg fill="#000000" version="1.1" id="Capa_1" class="h-5 w-5 text-white"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 488.4 488.4"
                xml:space="preserve">
                <g>
                    <g>
                        <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6
                    s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2
                    S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7
                    S381.9,104.65,381.9,203.25z" />
                    </g>
                </g>
            </svg>
        </button>
    </div>
</form>
