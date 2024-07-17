<div>
    @if ($type == 'textarea')
        <div>

            <label for="{{ $name }}"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
            <textarea id="{{ $name }}" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                placeholder="{{ $placeholder }}" name="{{ $name }}">{{ $value }}</textarea>

            @if ($errors->has($name))
                <p class="text-red-400 mt-4">{{ $errors->first($name) }}</p>
            @endif

        </div>
    @else

        <div class="my-2">
            <label class="block text-gray-700" for="{{ $name }}">{{ $title }}</label>
            <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
        </div>

        @if ($errors->has($name))
            <p class="text-red-400 my-2">{{ $errors->first($name) }}</p>
        @endif

    @endif

</div>
