<x-layouts.base>
    <x-ui::section class="bg-primary-500 text-white relative">
        <div
            style="--bg-image: url({{ asset('/static/img/rogerio_allianz.webp') }})"
            class="absolute top-0 left-0 h-full w-full mix-blend-multiply bg-right bg-contain bg-[image:var(--bg-image)]"></div>
        <x-ui::container>
            <div class='grid grid-cols-2'>
                <div class="relative space-y-8">
                    <img src="{{ asset('static/img/logo.svg') }}" class="w-32">
                    <h1 class="sr-only">Mentoria TOPO</h1>
                    <x-ui::h2>
                        A imersão que vai te ensinar a escalar suas vendas de seguro de vida.
                    </x-ui::h2>
                    <p>
                        Aprenda como usar o Seguro de Vida como base de um planejamento financeiro sólido, capaz de
                        identificar as necessidades de proteção de seus clientes
                    </p>
                    <x-ui::button variant="primary">
                        Quero me inscrever
                    </x-ui::button>
                </div>
                <figure class="absolute top-0 h-full left-1/2">
                    <img src="{{ asset('static/img/rogerio.webp') }}" class='h-full'>
                </figure>
            </div>
        </x-ui::container>
    </x-ui::section>
    <x-ui::section></x-ui::section>
</x-layouts.base>
