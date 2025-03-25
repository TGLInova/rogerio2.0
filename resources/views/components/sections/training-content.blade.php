<x-ui::section x-data="{ image: null, state: null, events: [] }"
    x-on:brazil-map-state-change.window="image = $event.detail.image; state = $event.detail.state; events = $event.detail.events"
    id="inscrever">
    <x-ui::container>
        <div class="grid lg:grid-cols-5 grid-cols-1 gap-8 items-center">
            <div class="lg:col-span-2">
                <x-ui::h2 class="mb-6">Datas e Locais</x-ui::h2>
                <template x-if="events.length">
                    <x-ui::swiper options="{ slidesPerView: 1 }" :pagination="true">
                        <template x-for="item in events">
                            <x-ui::swiper.item>
                                <div class="shadow shadow-neutral-400 bg-neutral-200 p-6 rounded-xl space-y-8">
                                    <img class="h-40 w-full object-scale-down object-center overflow-hidden"
                                        x-bind:src="image">
                                    <header>
                                        <div class="font-bold text-2xl" x-text="item.texto_datas"></div>
                                        <h4 x-text="item.endereco.cidade + ' - ' + item.endereco.uf" class="text-xl"></h4>
                                    </header>
                                    <div class="text-neutral-600">
                                        <h5 x-text="item.nome" class="text-xl font-semibold"></h5>
                                        <div class="text-base"
                                            x-text="[item.endereco.logradouro, item.endereco.numero, item.endereco.complemento, item.endereco.bairro, item.endereco.cidade, item.endereco.uf].join(' - ')">
                                        </div>
                                    </div>
                                    <x-ui::button variant="primary-400" class="w-full" href=""
                                        x-bind:href="item.url" target="_blank">
                                        ME INSCREVER!
                                    </x-ui::button>
                                </div>
                            </x-ui::swiper.item>
                        </template>
                    </x-ui::swiper>
                </template>
                <template x-if="!events">
                    <div class="text-xl font-light">Não há eventos para esse Estado.</div>
                </template>
            </div>
            <div class="lg:col-span-3">
                <x-ui.brazil-map />
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
