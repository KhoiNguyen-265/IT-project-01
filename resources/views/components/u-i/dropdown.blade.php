<div class="relative group">
    <a href="#!"
        class="text-sm text-white font-medium px-2 py-3 group-hover:bg-white group-hover:text-black transition-colors duration-300 rounded-sm">
        {{ $label }}
    </a>

    <div
        class="absolute text-sm text-white left-0 top-full mt-2 w-48 bg-blue-500 shadow-lg rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">

        {{ $slot }}

    </div>
</div>
