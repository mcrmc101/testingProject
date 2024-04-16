<div>
    @if ($wisdom)
        <button wire:click="saveWisdom()" class="btn btn-secondary text-white mt-6 w-full"><span class="sr-only">Save
                Wisdom</span>@include('icons.save', [
                    'height' => 24,
                    'width' => 24,
                ])</button>
    @endif

</div>
