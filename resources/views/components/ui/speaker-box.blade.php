@props(['image', 'alt' => basename($image)])
<div {{ $attributes->class("absolute backdrop-blur-md hover:backdrop-blur-sm hover:bg-neutral-500/40 duration-500 px-4 py-2.5 rounded-lg bg-neutral-500/30 w-48 shadow-lg") }}>
    <div class="text-white text-sm">Palestrante da:</div>
    <img src="{{ $image }}" alt="{{ $alt }}" title="{{ $alt }}" class="w-full">
</div>
