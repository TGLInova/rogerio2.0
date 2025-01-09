@props(['image', 'reverse' => false])
<section class="grid grid-cols-2 gap-16">
    <div class="relative flex items-center justify-center">
        <div class="bg-primary-400 rounded-2xl h-5/6 w-full absolute" x-bind:class="animate ? 'animate-fade animate-duration-1000' : 'opacity-0'"></div>
        <img src="{{ $image }}" class="z-10 relative h-[23rem] drop-shadow-[5px_5px_5px_black] rellax" data-rellax-speed="-1">
    </div>
    <div @class(['flex flex-col justify-center items-start space-y-5', 'order-first' => $reverse])>
        {{ $slot }}
        <x-ui::button variant="primary-400">
            Quero me inscrever
        </x-ui::button>
    </div>
</section>
