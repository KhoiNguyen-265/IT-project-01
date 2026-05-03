<div class="relative group">
    <!-- Nút Trigger -->
    <button
        class="bg-white border border-gray-300 px-3 py-1.5 text-sm flex items-center gap-1.5 group-hover:border-blue-400 group-hover:text-blue-600 transition-colors w-full justify-between">
        {{ $label }}

        <div
            class="w-3 h-3 flex items-center justify-center text-gray-500 group-hover:text-blue-600 transition-colors">
            <i class="fa-solid fa-angle-down"></i>
        </div>
    </button>

    <!-- Menu -->
    <div
        class="absolute left-0 top-full hidden group-hover:block w-56 bg-white border border-gray-300 shadow-md max-h-75 overflow-y-auto z-50">
        <ul class="flex flex-col">
            {{ $slot }}
        </ul>
    </div>
</div>
