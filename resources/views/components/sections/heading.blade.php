<x-ui::section
    variant="primary-600"
    class="relative overflow-hidden"
    x-data="{ y: 0, event: null, state: null, }"
    x-on:brazil-map-state-change.window="event = $event.detail.events[0]; state = $event.detail.state;">
    <div style="--bg-image: url({{ asset('/static/img/banner_bg.webp') }})"
        class="absolute top-0 left-0 h-full w-full mix-blend-overlay animate-fade lg:bg-contain bg-no-repeat bg-right bg-[image:--bg-image]">
    </div>
    <x-ui::container>
        <div class='grid lg:grid-cols-2 gap-16 max-lg:text-center'>
            <figure
                class="lg:absolute max-lg:order-last top-0 h-full lg:left-1/2 animate-fade-up animate-delay-1000 pointer-events-none">
                <img src="{{ asset('static/img/rogerio_araujo_3.webp') }}" class='h-full object-contain object-center'>
            </figure>
            <div class="relative space-y-8">
                <img src="{{ asset('static/img/logo.svg') }}" class="w-56 inline-block">
                <h1 class="sr-only">Propósito Seguro</h1>
                <h2 class="animate-fade-up text-4xl">
                    Descubra como vender <span class="font-semibold">Seguro de Vida e Previdência Privada com
                        Propósito</span> em
                    1º lugar e assim Construir uma
                    Carreira Lucrativa.
                </h2>
                <p class="animate-fade-up animate-delay-300">
                    Participe da imersão de 2 dias com Rogério Araújo, um dos maiores especialistas do mercado, e domine
                    a
                    metodologia consultiva que transforma vendas em uma missão, Cuidar e Proteger de Vidas, Famílias e
                    Negócios.
                </p>
                <x-ui::button variant="primary-400" class="animate-fade-up animate-delay-500" href="#inscrever">
                    GARANTIR MINHA VAGA!
                </x-ui::button>
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
