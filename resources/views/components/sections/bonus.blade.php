<div class="bg-gradient-to-b from-primary-500 to-primary-600 text-white pt-12 lg:pt-20 overflow-hidden">
    <x-ui::container class="text-center">
        <header class="space-y-9 lg:mb-20 mb-12">
            <x-ui::h2 :variant="['golden', 'large']">
                Bônus Exclusivo
            </x-ui::h2>
            <div class="text-white text-4xl font-bold">1 ano de acesso gratuito ao Check-Up Financeiro.</div>
            <p class="text-xl">Desenvolvida com a expertise adquirida ao longo de 20 anos, esta ferramenta personalizável
                gera um relatório financeiro inicial do seu segurado em menos de 1 minuto.</p>
            <x-ui::button variant="primary-400">
                QUERO ME INSCREVER
            </x-ui::button>
        </header>
        <img src="{{ asset('static/img/checkup.webp') }}" data-rellax-xs-speed="0" data-rellax-speed="-0.05" alt="App Check-Up Financeiro" class="rellax w-full lg:h-[31rem] object-contain object-center" width="1098" height="498">
    </x-ui::container>
</div>
