<x-layouts.main>
    <x-sections.hero>
        <img src="{{ asset('static/img/logo.svg') }}" class="w-56 inline-block">
        <h1 class="sr-only">Propósito Seguro</h1>
        <h2 class="animate-fade-up text-4xl">
            Descubra como vender <span class="font-semibold">Seguro de Vida e Previdência Privada com Propósito</span> em
            1º lugar e assim Construir uma
            Carreira Lucrativa.
        </h2>
        <p class="animate-fade-up animate-delay-300">
            Participe da imersão de 2 dias com Rogério Araújo, um dos maiores especialistas do mercado, e domine a
            metodologia consultiva que transforma vendas em uma missão, Cuidar e Proteger de Vidas, Famílias e Negócios.
        </p>
        <x-ui::button variant="primary-400" class="animate-fade-up animate-delay-500">
            QUERO ME INSCREVER
        </x-ui::button>
    </x-sections.hero>

    <x-sections.parceiros />

    <x-sections.big-cta />

    <x-sections.about />
    <x-sections.material-presentation />
    <x-sections.schedule />
    <x-sections.testemonial />
    <x-sections.why-online />
    <x-sections.immersion />
    <x-sections.guarantee />
    <x-sections.bonus />
    <x-sections.training-content />
    <x-sections.footer />
</x-layouts.main>
