<div>
    <div class="mx-auto flex flex-wrap">
        @if ($wisdom)
            <div class="mt-6 blockme prose text-lg w-full md:w-2/3 md:order-last">
                {!! $wisdom !!}
            </div>
        @endif
        <div class="w-full mt-6 md:w-1/3">
            <div class="flex flex-col md:flex-row gap-2">

                <button wire:click="getWisdom" class="btn btn-primary text-white mt-6">
                    <span class="loading loading-ring loading-md" wire:loading></span>
                    <span wire:loading.remove class="flex flex-row space-x-4 items-center">Get Wisdom&nbsp;
                        @include('icons.wisdom', [
                            'height' => 24,
                            'width' => 24,
                        ])</span>
                </button>

                @livewire('save-wisdom')
            </div>
        </div>

    </div>
</div>
