<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div x-data="{
        state: $wire.entangle('{{ $getStatePath() }}'),
        preview: null,
        init() {
            this.$watch('state', value => {
                if (value) {
                    this.loadPreview(value);
                } else {
                    this.preview = null;
                }
            });

            if (this.state) {
                this.loadPreview(this.state);
            }

            window.addEventListener('media-selected', (e) => {
                if (e.detail.statePath === '{{ $getStatePath() }}') {
                    this.state = e.detail.id;
                }
            });
        },
        loadPreview(id) {
            fetch('/media/' + id + '/json')
                .then(r => r.json())
                .then(m => this.preview = m.url)
                .catch(() => this.preview = null);
        }
    }">
        <div class="flex items-center gap-4">
            <div class="w-24 h-24 rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 flex items-center justify-center overflow-hidden shrink-0">
                <template x-if="preview">
                    <img :src="preview" class="w-full h-full object-cover" />
                </template>
                <template x-if="!preview">
                    <svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </template>
            </div>

            <div class="flex flex-col gap-2">
                <button
                    type="button"
                    x-on:click="window.dispatchEvent(new CustomEvent('open-media-picker', { detail: { statePath: '{{ $getStatePath() }}' } }))"
                    class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-200 bg-white dark:bg-transparent border border-gray-300 dark:border-white/10 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition"
                >
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                    </svg>
                    <span x-text="state ? 'Change Image' : 'Select Image'"></span>
                </button>

                <template x-if="state">
                    <button
                        type="button"
                        x-on:click="state = null; preview = null"
                        class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium text-white bg-danger-600 rounded-lg hover:bg-danger-500 transition"
                    >
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        Remove
                    </button>
                </template>
            </div>
        </div>
    </div>
</x-dynamic-component>
