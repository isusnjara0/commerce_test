<div class="btns bg-transparent w-full h-full flex flex-col justify-center absolute top-0 left-0 items-end group opacity-0 hover:opacity-100">
    <div class="bg-transparent w-full h-full"></div>
    <div class="grid grid-cols-4 w-full px-2 py-4 mb-[2rem]  group-hover:mb-0">
        <a class="zumiraj hover:bg-gray-400 p-4 mb-8 border-y border-l border-black rounded-l-full flex items-center justify-center transition-all ease-in-out duration-300">
            <x-icons.zoom-in  :size="10" />
        </a>
        <a class="add hover:bg-gray-400 p-4 mb-4 border-y border-black flex items-center justify-center transition-all ease-in-out duration-300" href="{{ url('/'.$item->id) }}">
            <x-icons.shopping-bag  :size="10" />
        </a>
        <a class="heart hover:bg-gray-400 p-4 mb-8 border-y border-black flex items-center justify-center transition-all ease-in-out duration-300">
            <x-icons.heart  :size="10" />
        </a>
        <a class="usporedi hover:bg-gray-400 p-4 mb-12 border-y border-r rounded-r-full border-black flex items-center justify-center transition-all ease-in-out duration-300">
            <x-icons.switch-horizontal  :size="10" />
        </a>
    </div>
</div>