@php
$item_1 = [
    ['8:00', 'Apresentação'],
    ['8:30', 'Café e networking'],
    ['9:00', 'Análise de mercado'],
    ['10:00', 'Desmistificando Vida e Previdência'],
    ['11:00', 'Público Alvo - Identificação e Segmentação'],
    ['12:00', 'Almoço e networking'],
    ['13:00', 'Prospecção em Escala'],
    ['14:30', 'Abordagem e Montagem de Pitch'],
    ['15:30', 'Identificação de Necessidades e Oportunidades'],
    ['17:00', 'Dúvidas e Bate-Papo']
];

$item_2 = [
    ['8:00', 'Construção da Solução'],
    ['8:30', 'Apresentação de soluções'],
    ['9:00', 'Contornando as principais objeções'],
    ['10:00', 'Fechamento'],
    ['11:00', 'Recomendações'],
    ['12:00', 'Empreendedorismo - Como você se enxerga frente às oportunidades'],
    ['13:00', 'Almoço e networking']
];

@endphp
<x-ui::section x-data='{ animate: false }' x-intersect:leave="animate = false" x-intersect:enter="animate = true">
    <x-ui::container>
        <x-ui::h2 class="text-center text-primary-300 mb-12" variant="large" x-bind:class="{ 'animate-fade-up': animate }">
            Você está pronto<br>para transformar sua carreira?
        </x-ui::h2>

        <div class="grid lg:grid-cols-2 gap-16 lg:px-12 px-8" x-bind:class="{'*:animate-fade-up *:animate-delay-200': animate }">
            <div class="p-6 shadow-lg shadow-black/30 text-primary-300 bg-gradient-to-b from-white via-white to-neutral-300 rounded-xl flex flex-col">
                <header class="flex gap-12 items-center mb-6">
                    <h3 class="text-5xl font-semibold">Dia 1</h3>
                    <p class="border-2 px-6 py-1 rounded-lg text-center text-sm">
                        Sexta - Manhã e tarde
                    </p>
                </header>
                <ul class="space-y-3 mb-6 grow">
                    @foreach($item_1 as [$hour, $text])
                        <li class="flex gap-3">
                            <span class="text-primary-400 font-semibold">{!! $hour !!}</span>
                            <div>{{ $text }}</div>
                        </li>
                    @endforeach
                </ul>

                <x-ui::button class="w-full" variant="primary-400">QUERO ME INSCREVER</x-ui::button>
            </div>

            <div class="p-6 shadow-lg shadow-black/30 bg-gradient-to-b from-primary-400 to-primary-500 text-white rounded-xl flex flex-col">
                <header class="flex gap-12 items-center mb-6">
                    <h3 class="text-5xl font-semibold">Dia 2</h3>
                    <p class="border-2 px-6 py-1 rounded-lg text-center text-sm">Sábado, de<br>8:00 as 13 horas.</p>
                </header>
                <ul class="space-y-3 mb-6 grow">
                    @foreach($item_2 as [$hour, $text])
                        <li class="flex gap-3">
                            <span class="font-semibold">{!! $hour !!}</span>
                            <div>{{ $text }}</div>
                        </li>
                    @endforeach
                </ul>
                <x-ui::button class="w-full" variant="primary-400">QUERO ME INSCREVER</x-ui::button>
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
