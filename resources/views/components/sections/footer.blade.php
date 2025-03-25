<x-ui::section variant="primary-600" class="relative overflow-hidden lg:h-[38rem] flex items-center max-lg:pb-0"
    x-data="{ y: 0 }">
    <div style="--bg-image: url({{ asset('/static/img/banner_bg.webp') }})"
        class="absolute top-0 left-0 h-full w-full mix-blend-overlay animate-fade lg:bg-contain bg-no-repeat bg-right bg-[image:--bg-image]">
    </div>
    <x-ui::container>
        <div class='max-lg:relative grid lg:grid-cols-2 gap-12 max-lg:text-center'>
            <div style="--bg-image: url({{ asset('static/img/rogerio_araujo_5.webp') }})"
                class="bg-[image:--bg-image] bg-no-repeat lg:bg-[position:80%_center] max-lg:order-last lg:bg-[length:auto_100%] bg-contain bg-center lg:absolute lg:h-full h-96 w-full left-0 top-0">
            </div>
            <div class="space-y-9 relative">
                <x-ui::h2 :variant="['metalic', 'large']" class="leading-none max-lg:text-center">
                    Não espere mais.<br>
                    O mercado precisa de profissionais como você!
                </x-ui::h2>
                <p class="text-xl">Essa é a oportunidade de se <strong>tornar referência</strong> no mercado de seguros
                    de vida, <strong> vendendo com ética,
                        propósito e resultado</strong>.</p>
                <x-ui::button href="#inscrever" variant="primary-400">
                    GARANTIR MINHA VAGA!
                </x-ui::button>
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
