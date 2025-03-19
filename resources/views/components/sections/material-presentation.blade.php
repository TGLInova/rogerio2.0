<x-ui::section x-data="{ animate: false }" x-intersect.half:enter="animate = true" x-intersect.half:leave="animate = false">
    <x-ui::container class="grid lg:grid-cols-2 gap-8 items-center">
        <div class="space-y-6 flex flex-col lg:items-start" x-bind:class="{'*:animate-fade-up' : animate }">
            <x-ui::h2 class="text-primary-300 max-lg:text-center">
                O que você vai receber
            </x-ui::h2>

            <ul class="[&>li]:flex [&>li>svg]:text-primary-400 [&>li]:items-center [&>li]:gap-2 space-y-4 animate-delay-200">
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Dois dias de imersão presencial com conteúdo 100% prático;<span></li>
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Materiais de apoio exclusivos;<span></li>
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Certificado de participação;<span></li>
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Networking com profissionais de alto desempenho;<span></li>
            </ul>

            <x-ui::button variant="primary-400" class="animate-delay-400">
                GARANTIR A MINHA INSCRIÇÃO
            </x-ui::button>

        </div>
        <img src="{{ asset('static/img/materiais_exclusivos.webp') }}" x-bind:class="{ 'animate-delay-400 animate-fade': animate }">
    </x-ui::container>
</x-ui::section>
