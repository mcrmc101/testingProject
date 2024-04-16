<div class="navbar bg-black text-white mb-2 md:mb-8">
    <a class="btn btn-ghost text-xl mx-auto" href="/">
        <div class="flex flex-row space-x-2 items-center">
            <h1 class="font-bold text-2xl">{{ config('app.name') }}</h1>
            @include('icons.wisdom', [
                'height' => 32,
                'width' => 32,
            ])
        </div>
    </a>
</div>
