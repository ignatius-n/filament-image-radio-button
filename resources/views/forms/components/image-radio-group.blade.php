<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <x-slot
        name="label"
        @class([
            'sm:pt-1.5' => $hasInlineLabel,
        ])
    >
        {{ $getLabel() }}
    </x-slot>

    <ul role="list" class="grid gap-8 xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 p-4 relative">
        @foreach ($getOptions() as $value => $image)
            <li class="overflow-hidden relative">
                <label class="relative cursor-pointer block">
                    <input
                        id="{{ $getId() }}-{{ $value }}"
                        name="{{ $getId() }}"
                        type="radio"
                        value="{{ $value }}"
                        required={{ $isRequired() }}
                        {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
                        class="peer sr-only"
                    />
                    {{-- Selected indicator --}}
                    <span class="absolute -top-2.5 z-50 hidden peer-checked:block
                        rtl:-right-10 ltr:-left-10
                        w-[110px] h-[60px]
                        bg-primary-500
                        rtl:rotate-[49.5deg] ltr:-rotate-[49.5deg]
                        origin-center"></span>

                    {{-- Image container maintaining aspect ratio --}}
                    <div class="relative border-4 border-gray-300 dark:border-gray-600
                        rounded-2xl
                        overflow-hidden
                        transition-all duration-200
                        peer-checked:border-6 peer-checked:border-primary-500
                        hover:border-[6px]
                        h-fit flex items-center justify-center bg-white dark:bg-gray-950">
                        <img
                            src="{{ asset($getDisk()->url('')) }}{{ $image }}"
                            alt="{{ $value }}"
                            class="object-contain transition-all duration-100"
                        />
                        {{--                        max-w-full max-h-full--}}
                    </div>
                </label>
            </li>
        @endforeach
    </ul>
</x-dynamic-component>
