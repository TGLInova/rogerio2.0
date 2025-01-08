<x-ui::section class="bg-primary-600 text-white relative overflow-hidden" x-data="{ y: 0 }">
    <div style="--bg-image: url({{ asset('/static/img/banner_bg.webp') }})"
        class="absolute top-0 left-0 h-full w-full mix-blend-overlay animate-fade bg-contain bg-no-repeat bg-right bg-[image:--bg-image]">
    </div>
    <x-ui::container>
        <div class='grid grid-cols-2'>
            <div class="relative space-y-8">
                <img src="{{ asset('static/img/logo.svg') }}" class="w-32">
                <h1 class="sr-only">Mentoria TOPO</h1>
                <x-ui::h2>
                    A imersão que vai te ensinar a escalar suas vendas de <strong>seguro de vida</strong>.
                </x-ui::h2>
                <p>
                    Aprenda como usar o Seguro de Vida como base de um planejamento financeiro sólido, capaz de
                    identificar as necessidades de proteção de seus clientes
                </p>
                <x-ui::button variant="primary-400">
                    Quero me inscrever
                </x-ui::button>
            </div>
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
            <figure class="absolute top-0 h-full left-1/2 animate-fade-up animate-delay-500">
                <img src="{{ asset('static/img/rogerio.webp') }}" class='h-full'>
            </figure>
        </div>
    </x-ui::container>
</x-ui::section>
