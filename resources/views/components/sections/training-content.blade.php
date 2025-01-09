<x-ui::section>
    <x-ui::container>
        <x-ui::h2 variant="large" class="mb-12 text-center">
            Conteúdo do Treinamento
        </x-ui::h2>
        <div class="grid grid-cols-4 gap-8">
            @foreach (range(1, 4) as $n)
                <x-ui::card variant="neutral" class="space-y-5">
                    <h3 class="font-bold text-5xl text-center">Dia {!! $n !!}</h3>
                    <ul class="space-y-2">
                        @foreach (range(1, 4) as $i)
                            <li class="flex gap-2">
                                <x-icon name="icon-check" class='h-6 w-6 text-primary-400 group-hover/card:text-current' />
                                <span>{{ $i }} teste</span>
                            </li>
                        @endforeach
                    </ul>
                    <x-ui::button variant="primary-400">
                        Quero me inscrever
                    </x-ui::button>
                </x-ui::card>
            @endforeach
        </div>
    </x-ui::container>
</x-ui::section>
