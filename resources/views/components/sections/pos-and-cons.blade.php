<x-ui::section variant="primary">
    <x-ui::container>
        <x-ui::h2 class="text-center mb-12">
            Você está pronto para transformar sua carreira<br>
            com o treinamento mais completo do mercado?
        </x-ui::h2>

        <div class="grid grid-cols-2 gap-16">
            @foreach ($items as $item)
                <div class="h-full border p-6 rounded-2xl relative flex flex-col items-center justify-center">
                    <x-ui::h3 class='text-center mb-5'>{{ $item['title'] }}:</x-ui::h3>
                    <ul class="space-y-6">
                        @foreach ($item['items'] as $x)
                            <li class="flex gap-2 items-center">
                                <x-icon name="icon-check" @class(['h-6 w-6 flex-none', $item['class']]) />
                                <span>{{ $x }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <span @class(['absolute h-40 w-40 aspect-square pointer-events-none bg-current opacity-20 blur-2xl rounded-full', $item['class']])></span>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <x-ui::button variant="primary-400">
                Transformar minhas vendas de Seguro de Vida
            </x-ui::button>
        </div>
    </x-ui::container>
</x-ui::section>
