<x-ui::section
    variant="primary-600"
    class="relative overflow-hidden max-lg:h-screen flex flex-col !pb-0">
    <div style="--bg-image: url({{ asset('/static/img/banner_bg.webp') }})"
        class="absolute top-0 left-0 h-full w-full mix-blend-overlay animate-fade lg:bg-contain bg-cover bg-no-repeat bg-right bg-[image:--bg-image]">
    </div>
    <x-ui::container class='grow'>
        <div class='grid lg:grid-cols-2 lg:gap-16 gap-6 max-lg:text-center h-full'>
            <figure
                class="lg:absolute max-lg:order-last lg:top-0 h-full lg:left-1/2 animate-fade-up animate-delay-1000 pointer-events-none">
                <img src="{{ asset('static/img/rogerio_araujo_3.webp') }}" class='h-full w-full lg:object-contain object-cover'>
            </figure>

            <div class="relative space-y-8">
                <img src="{{ asset('static/img/logo.svg') }}" class="w-56 inline-block">
                <h1 class="sr-only">Propósito Seguro</h1>
                <h2 class="animate-fade-up text-4xl font-bold">
                    Você vende seguros ou já começou a transformar vidas?
                </h2>
                <p class="animate-fade-up animate-delay-300 max-lg:text-lg">
                    Aprenda como os corretores mais bem sucedidos do Brasil usam propósito, atendimento consultivo, estratégia e inteligência emocional para transformar vendas em relações duradouras e carteiras recorrentes.
                </p>
                <x-ui::button variant="primary-400" class="animate-fade-up animate-delay-500" href="#inscrever">
                    GARANTIR MINHA VAGA!
                </x-ui::button>
            </div>
            <div
                class="flex items-center justify-center relative"
                x-cloak
                x-data="{ event: null, state: null, image: null }"
                x-on:brazil-map-state-change.window="event = $event.detail.events[0]; state = $event.detail.state; image = $event.detail.image;">
                <template x-if="event">
                    <a class="flex gap-3 items-center hover:" x-bind:href="event.url" target="_blank">
                        <div class="px-4 py-2 text-base border rounded flex flex-col backdrop-blur-sm bg-primary-500/30 uppercase w-52">
                            <span x-text="event.texto_datas"></span>
                            <span x-text="event.endereco.cidade"></span>
                        </div>
                        <img x-bind:src="image" class="w-20 rounded">
                    </a>
                </template>
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
