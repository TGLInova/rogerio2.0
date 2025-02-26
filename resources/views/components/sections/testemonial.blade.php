<x-ui::section class="grow" variant="primary">
    <x-ui::container class="space-y-8">
        <header class='text-center'>
            <x-ui::h2>
                O que diz quem já viveu essa transformação:
            </x-ui::h2>
            <div class="text-[4.5rem] max-lg:hidden font-bold leading-none bg-gradient-to-b from-yellow-500 to-yellow-900 text-transparent bg-clip-text">Depoimentos</div>
        </header>
        <div class="grid lg:grid-cols-4 gap-8">
            @foreach (range(1, 4) as $i)
                <x-ui::card class="text-center">
                    <div>
                        <q><span class='text-xl'>Palestra Enriquecedora</span><br><br>
                            e cheia de aprendizados novos! Que venham mais eventos como esse!👏🏻👏🏻</q>
                    </div>
                    <div class="mt-5">
                        Samantha Beatriz
                    </div>
                </x-ui::card>
            @endforeach
        </div>
        <div class="text-center">
            <x-ui::button variant="primary-400" class='text-lg'>
                Quero me inscrever
            </x-ui::button>
        </div>
    </x-ui::container>
</x-ui::section>
