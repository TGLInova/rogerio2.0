<x-ui::section>
    <x-ui::container class="grid lg:grid-cols-2 gap-8 items-center">
        <div class="space-y-6 flex flex-col lg:items-start">
            <x-ui::h3 class="text-primary-300 max-lg:text-center">
                O que você vai receber
            </x-ui::h3>

            <ul class="[&>li]:flex [&>li>svg]:text-primary-400 [&>li]:items-center [&>li]:gap-2 space-y-4">
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Dois dias de imersão presencial com conteúdo 100% prático;<span></li>
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Materiais de apoio exclusivos;<span></li>
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Certificado de participação;<span></li>
                <li><x-icon name="icon-check" class="h-6 w-6" /><span>Networking com profissionais de alto desempenho;<span></li>
            </ul>

            <x-ui::button variant="primary-400">
                GARANTIR A MINHA INSCRIÇÃO
            </x-ui::button>

        </div>
        <img src="{{ asset('static/img/materiais_exclusivos.webp') }}" >
    </x-ui::container>
</x-ui::section>
