@props(['socialNetworks' => true])
<x-ui::section variant="primary-600" class=" relative overflow-hidden" x-data="{ y: 0 }">
    <div style="--bg-image: url({{ asset('/static/img/banner_bg.webp') }})"
        class="absolute top-0 left-0 h-full w-full mix-blend-overlay animate-fade lg:bg-contain bg-no-repeat bg-right bg-[image:--bg-image]">
    </div>
    <x-ui::container>
        <div class='grid lg:grid-cols-2'>
            <figure class="absolute top-0 h-full lg:left-1/2 animate-fade-up animate-delay-1000 pointer-events-none">
                <img src="{{ asset('static/img/rogerio.webp') }}" class='h-full object-bottom object-contain max-lg:opacity-20'>
            </figure>
            <div class="relative space-y-8">
                {{ $slot }}
            </div>
            @if($socialNetworks)
            <div class="flex justify-end items-end">
                <div
                    class="border-2 shadow-[0_0_8px] shadow-primary-400 bg-primary-400/20 rounded-lg p-4 isolate backdrop-blur-lg w-32 text-center">
                    <div class="mb-4 text-base leading-tight">Conheça mais:</div>
                    <div class="grid grid-cols-2 gap-6">
                        <a>
                            <x-icon name="icon-instagram" />
                        </a>
                        <a>
                            <x-icon name="icon-linkedin" />
                        </a>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </x-ui::container>
</x-ui::section>
