@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 bg-white dark:bg-slate-800">
        <div class="text-lg flex items-center">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-white dark:bg-slate-800 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>
