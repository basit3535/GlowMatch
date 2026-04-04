<div>
    <x-filament::modal id="media-picker-modal" width="5xl" sticky-header sticky-footer>
        <x-slot name="heading">
            Media Library
        </x-slot>

        {{-- Search --}}
        <div class="mb-4">
            <div
                class="fi-input-wrp flex rounded-lg shadow-sm ring-1 ring-gray-950/10 dark:ring-white/20 bg-white dark:bg-white/5 overflow-hidden">
                <div class="flex items-center pl-3 text-gray-400">
                    <svg class="w-4 h-4" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
                <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search files..."
                    class="flex-1 bg-transparent border-0 px-3 py-2 text-sm text-gray-950 dark:text-white placeholder-gray-400 focus:ring-0 focus:outline-none" />
            </div>
        </div>

        {{-- Grid --}}
        @if ($media->isEmpty())
            <div class="flex flex-col items-center justify-center h-48 gap-2">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gray-100 dark:bg-white/5">
                    <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">No media found</p>
            </div>
        @else
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach ($media as $item)
                        <button type="button" wire:key="media-{{ $item->id }}"
                            wire:click="selectMedia({{ $item->id }})" @class([
                                'group relative aspect-square rounded-lg overflow-hidden border-2 transition-all duration-150 focus:outline-none',
                                'border-primary-500 ring-2 ring-primary-500 ring-offset-2 dark:ring-offset-gray-900' =>
                                    $selected === $item->id,
                                'border-gray-200 dark:border-white/10 hover:border-primary-300 dark:hover:border-primary-700' =>
                                    $selected !== $item->id,
                            ])>
                            <img src="{{ Storage::url($item->path) }}" alt="{{ $item->filename }}"
                                class="w-full h-full object-cover transition-transform duration-150 group-hover:scale-105"
                                loading="lazy" />

                            @if ($selected === $item->id)
                                <div class="absolute inset-0 bg-primary-500/20 flex items-center justify-center">
                                    <div class="bg-primary-500 rounded-full p-0.5">
                                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            @endif

                            <div
                                class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/70 to-transparent px-2 py-1.5 translate-y-full group-hover:translate-y-0 transition-transform duration-150">
                                <p class="text-white text-[10px] truncate leading-tight">{{ $item->filename }}</p>
                            </div>
                        </button>
                @endforeach
            </div>
        @endif

        {{-- Pagination --}}
        @if ($media->hasPages())
            <div class="mt-4">
                {{ $media->links() }}
            </div>
        @endif

        <x-slot name="footer">
            <div class="flex items-center justify-between w-full">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    @if ($selected)
                        <span class="text-primary-600 dark:text-primary-400 font-medium">1 image selected</span>
                    @else
                        Select an image from your library
                    @endif
                </p>
                <div class="flex items-center gap-3">
                    <x-filament::button color="gray"
                        x-on:click="$dispatch('close-modal', { id: 'media-picker-modal' })">
                        Cancel
                    </x-filament::button>
                    <x-filament::button wire:click="confirm" :disabled="!$selected">
                        Insert Image
                    </x-filament::button>
                </div>
            </div>
        </x-slot>
    </x-filament::modal>
</div>
