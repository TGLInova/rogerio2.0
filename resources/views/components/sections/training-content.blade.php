{{-- <x-ui::section>
    <x-ui::container>
        <x-ui::h2 variant="large" class="mb-12 text-center">
            Conteúdo do Treinamento
        </x-ui::h2>
        <div class="grid lg:grid-cols-4 grid-cols-1 gap-8">
            @foreach (range(1, 4) as $n)
                <x-ui::card variant="neutral" class="space-y-5">
                    <h3 class="font-bold text-5xl text-center">Dia {!! $n !!}</h3>
                    <ul class="space-y-2">
                        @foreach (range(1, 4) as $i)
                            <li class="flex gap-2">
                                <x-icon name="icon-check"
                                    class='h-6 w-6 text-primary-400 group-hover/card:text-current' />
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
</x-ui::section> --}}
<x-ui::section x-data="{ image: null, state: null, events: [] }"
    x-on:brazil-map-state-change.window="image = $event.detail.image; state = $event.detail.state; events = $event.detail.events">
    <x-ui::container>
        <div class="grid lg:grid-cols-5 gap-8 items-center">
            <div class="lg:col-span-2">
                <x-ui::h2 class="mb-6">Datas e Locais</x-ui::h2>
                <template x-for="item in events">
                    <div class="shadow shadow-neutral-400 bg-neutral-200 p-6 rounded-xl space-y-8">
                        <img class="h-40 w-full object-cover object-center rounded-lg overflow-hidden"
                            x-bind:src="image" >
                        <header>
                            <div class="font-bold text-2xl" x-text="item.texto_datas"></div>
                            <h4 x-text="item.endereco.cidade + ' - ' + item.endereco.uf" class="text-xl"></h4>
                        </header>
                        <div class="text-neutral-600">
                            <h5 x-text="item.local" class="text-xl font-semibold"></h5>
                            <div
                                class="text-base"
                                x-text="[item.endereco.logradouro, item.endereco.numero, item.endereco.complemento, item.endereco.bairro, item.endereco.cidade, item.endereco.uf].join(' - ')">
                            </div>
                        </div>
                        <x-ui::button variant="primary-300" class="w-full">
                            Quero me inscrever
                        </x-ui::button>
                    </div>
                </template>
            </div>
            <div class="lg:col-span-3">
                <x-ui.brazil-map />
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
