@php
    $items = [
        [
            'titulo' => 'Palestra Enriquecedora',
            'texto' => 'e cheia de aprendizados novos! Que venham mais eventos como esse!👏🏻👏🏻',
            'autor' => 'Elena Valeri',
            'imagem' => asset('static/img/elena_valeri.webp'),
        ],
        [
            'titulo' => 'Sensacional',
            'texto' => 'obrigada por compartilhar seu conhecimento e experiência conosco! 💙',
            'autor' => 'Samantha Beatriz',
            'imagem' => asset('static/img/samantha_beatriz.webp'),
        ],
        [
            'titulo' => 'Obrigado pela jornada',
            'texto' => 'pude aprender demais contigo. Espero que a parceria perdure por muito tempo.',
            'autor' => 'Saulo Gabriel',
            'imagem' => asset('static/img/samuel.webp'),
        ],
        [
            'titulo' => 'Parabéns Rogério pela palestra!',
            'texto' => 'Vamos com toda certeza colher resultados positivos dos seus ensinamentos.',
            'autor' => 'Rogério Cavarzan',
            'imagem' => asset('static/img/rogeriocavarzan.webp'),
        ],
    ];
@endphp
<x-ui::section class="grow" variant="primary" x-data='{ animate: false }' x-intersect:leave="animate = false"
    x-intersect:enter="animate = true">
    <x-ui::container class="space-y-8">
        <header class='text-center'>
            <x-ui::h2 x-bind:class="{ 'animate-fade': animate }">
                O que diz quem já viveu essa transformação:
            </x-ui::h2>
            <div x-bind:class="{ 'animate-fade animate-delay-100': animate }"
                class="text-[4.5rem] max-lg:hidden font-bold leading-none bg-gradient-to-b from-yellow-500 to-yellow-900 text-transparent bg-clip-text">
                Depoimentos</div>
        </header>
        <x-ui::swiper options="{ slidesPerView: 1.8, breakpoints: { 800: { slidesPerView: 4 } } }">
            @foreach ($items as $k => $item)
                <x-ui::swiper.item>
                    <x-ui::card class="text-center animate-delay-[var(--delay)] h-64 flex flex-col"
                        style="--delay: {{ $k * 100 + 300 }}ms" x-bind:class="{ 'animate-fade': animate }">
                        <div class="grow">
                            <q>
                                <span class='text-xl leading-none'>{{ $item['titulo'] }}</span>
                                <br><br>
                                {{ $item['texto'] }}
                            </q>
                        </div>
                        <div class="mt-5 flex gap-4 items-center justify-center">
                            <img class="w-9 h-9 flex-none rounded-full object-cover" src="{{ $item['imagem'] }}">
                            <span>{{ $item['autor'] }}</span>
                        </div>
                    </x-ui::card>
                </x-ui::swiper.item>
            @endforeach
        </x-ui::swiper>

        <div class="text-center">
            <x-ui::button variant="primary-400" class='text-lg' x-bind:class="{ 'animate-jump-in': animate }" href="#inscrever">
                GARANTIR MINHA VAGA!
            </x-ui::button>
        </div>
    </x-ui::container>
</x-ui::section>
