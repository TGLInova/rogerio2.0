<x-ui::section class="grow" variant="primary">
    <x-ui::container class="space-y-8">
        <header class='text-center'>
            <x-ui::h2>
                Veja o que as pessoas impactadas dizem
            </x-ui::h2>
            <div class="text-[8.5rem] font-bold leading-none -mb-16">Depoimentos</div>
        </header>
        <div class="grid grid-cols-4 gap-8">
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
