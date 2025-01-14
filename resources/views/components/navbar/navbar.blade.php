<nav class="bg-white fixed flex w-full h-[70px] justify-between items-center px-[5%] z-[9999] shadow-2xl">
    {{-- left --}}
    <div>
        <h1 class="sm:text-3xl font-bold">Widiana</h1>
    </div>
    {{-- nav menu --}}
    <div class="flex gap-5">
        @foreach (config('navbar') as $menu)
            <a href="{{ $menu['url'] }}" class="font-medium font-2xl">{{ $menu['label'] }}</a>
        @endforeach
    </div>

    {{--  --}}
    <div>
        <button class="bg-black text-white py-2 px-4 rounded-md">Contact</button>
    </div>
</nav>
