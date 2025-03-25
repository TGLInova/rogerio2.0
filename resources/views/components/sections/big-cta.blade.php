@php
    $items = [
        [
            'titulo' => 'Adotar a Metodologia Consultiva',
            'texto' => 'Identifique as reais necessidades de cada cliente e ofereça a solução ideal.',
        ],
        [
            'titulo' => 'Vender com Propósito',
            'texto' => 'Construa relações de confiança e valor.'
        ],
        [
            'titulo' => 'Criar uma Carteira de Clientes Recorrente',
            'texto'  => 'Fidelize clientes e aumente sua previsibilidade de renda.'
        ],
        [
            'titulo' => 'Posicionar-se como Autoridade no Mercado',
            'texto'  => 'Destaque-se em um mercado competitivo.'
        ]
    ];
@endphp
<x-ui::section class="bg-primary-600 text-white" x-data="{ animate: false }" x-intersect.half:enter="animate = true"
    x-intersect.half:leave="animate = false">
    <x-ui::container class="text-center">
        <x-ui::h2 class="mb-12" :variant="['large', 'metalic']" x-bind:class="{ 'animate-fade-up': animate }">
            Você já sentiu que poderia impactar<br>
            ainda mais a vida dos seus clientes...
        </x-ui::h2>

        <div class="text-xl space-y-6" x-bind:class="{ 'animate-fade-up animate-delay-200': animate }">
            <p>
                E ao mesmo tempo criar uma relação de longo prazo, baseada na entrega de VALOR e não do MELHOR
                PREÇO?
            </p>
            <p>
                <strong>
                    Vender seguro de vida e planos de previdência privada vai muito além de números. É sobre
                    proteger
                    histórias, garantir futuros e construir um legado.</strong>
                Mas, para alcançar esse nível, se tornar realmente relevante na vida dos seus clientes, não basta
                oferecer um produto. É preciso entender, ouvir e entregar soluções personalizadas.
            </p>

            <p>E é exatamente isso que você vai aprender nesta imersão!</p>
        </div>

        <x-ui::h2 :variant="['large', 'metalic']" class='mt-24 mb-12' x-bind:class="{ 'animate-fade-up animate-delay-500': animate }">
            Durante 2 dias intensivos,
        </x-ui::h2>
        <p class="text-xl mb-6" x-bind:class="{ 'animate-fade-up animate-delay-500': animate }">você terá acesso às
            estratégias que Rogério Araújo - CEO da TGL Consultoria e
            referência no mercado de seguros de vida e previdência privada utiliza para transformar vendas em
            verdadeiras conexões.
        </p>
        <x-ui::h2 class="mb-14" :variant="['metalic', 'normal']" x-bind:class="{ 'animate-fade-up animate-delay-700': animate }">
            Você aprenderá a:
        </x-ui::h2>

        <div class="grid lg:grid-cols-4 grid-cols-2 gap-12 mb-8">
            @foreach ($items as $item)
                <div class="text-center relative flex flex-col items-center border-2 rounded-lg p-5 duration-500 hover:scale-105">
                    <div class="h-12 w-12 bg-primary-400 p-2 rounded-lg -mt-12 mb-4">
                        <x-icon name="heroicon-o-star" class="w-full h-full" />
                    </div>
                    <span @class([
                        'absolute h-40 w-40 aspect-square pointer-events-none bg-current opacity-20 blur-2xl rounded-full',
                        'text-blue-400',
                    ])></span>
                    <div class="space-y-3 grow flex flex-col">
                        <div class='text-xl font-bold leading-snug grow'>{!! $item['titulo'] !!}:</div>
                        <div class="grow">{!! $item['texto'] !!}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <x-ui::h2 :variant="['normal', 'metalic']" class='mb-12' x-bind:class="{ 'animate-fade-up animate-delay-700': animate }">
            Essa não é uma palestra comum.
            <div class="text-3xl">
                É um treinamento estratégico que une o seu Propósito
                a uma maior rentabilidade.</div>
        </x-ui::h2>
        <x-ui::button variant="primary-400" x-bind:class="{ 'animate-fade-up animate-delay-1000': animate }" href="#inscrever">
            GARANTIR MINHA VAGA!
        </x-ui::button>
    </x-ui::container>
</x-ui::section>
