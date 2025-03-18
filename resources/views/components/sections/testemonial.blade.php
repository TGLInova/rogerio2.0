@php
$items = [
    [
        'titulo' => 'Palestra Enriquecedora',
        'texto' => 'e cheia de aprendizados novos! Que venham mais eventos como esse!👏🏻👏🏻',
        'autor' => 'Elena Valeri',
        'imagem' => asset('static/img/elena_valeri.webp')
    ],
    [
        'titulo' => 'Sensacional',
        'texto'  => 'obrigada por compartilhar seu conhecimento e experiência conosco! 💙',
        'autor'  => 'Samantha Beatriz',
        'imagem' => asset('static/img/samantha_beatriz.webp')
    ],
    [
        'titulo' => 'Obrigado pela jornada',
        'texto'  => 'pude aprender demais contigo. Espero que a parceria perdure por muito tempo.',
        'autor'  => 'Saulo Gabriel',
        'imagem' => asset('static/img/samuel.webp')
    ],
    [
        'titulo' => 'Agradecemos por essa',
        'texto'  => 'parceria forte que nos ajuda a cuidar de quem mais importa: nossos clientes. 💙🚀',
        'autor'  => 'Allianz Brasil',
        'imagem' => asset('static/img/allianz.webp')
    ]

];
@endphp
<x-ui::section class="grow" variant="primary">
    <x-ui::container class="space-y-8">
        <header class='text-center'>
            <x-ui::h2>
                O que diz quem já viveu essa transformação:
            </x-ui::h2>
            <div class="text-[4.5rem] max-lg:hidden font-bold leading-none bg-gradient-to-b from-yellow-500 to-yellow-900 text-transparent bg-clip-text">Depoimentos</div>
        </header>
        <div class="grid lg:grid-cols-4 gap-8">
            @foreach ($items as $item)
                <x-ui::card class="text-center">
                    <div>
                        <q>
                            <span class='text-xl'>{{ $item['titulo'] }}</span>
                            <br><br>
                            {{ $item['texto'] }}
                        </q>
                    </div>
                    <div class="mt-5 flex gap-4 items-center justify-center">
                        <img class="w-9 h-9 flex-none rounded-full object-cover" src="{{ $item['imagem'] }}">
                        <span>{{ $item['autor'] }}</span>
                    </div>
                </x-ui::card>
            @endforeach
        </div>
        <div class="text-center">
            <x-ui::button variant="primary-400" class='text-lg'>
                QUERO ME INSCREVER
            </x-ui::button>
        </div>
    </x-ui::container>
</x-ui::section>
