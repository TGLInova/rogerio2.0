<x-layouts.main>
    <x-ui.hero />
    <x-ui::section class="bg-primary-500 text-white grow">
        <x-ui::container x-data="{ animate: false }" x-intersect.half="animate = true">
            <x-ui.cta-item :image="asset('static/img/cifrao_sem_fundo.webp')">
                <x-ui::h2>A sua hora é agora!</x-ui::h2>
                <p>
                    Você vê uma oportunidade no Seguro de Vida, ramo de que mais cresce e paga do mercado segurador,
                    <strong>mas não sabe como começar</strong>?
                </p>
                <p>
                    Já possui uma base de clientes em outros ramos de seguro ou em serviços financeiros mas não sabe
                    como transformá-la em uma carteira recorrente?</p>
            </x-ui.cta-item>

            <x-ui.cta-item reverse :image="asset('static/img/relogio_sem_fundo.webp')">
                <x-ui::h2>Aprenda em 2 dias</x-ui::h2>
                <p>o passo a passo completo para transformar sua carteira de clientes em uma fonte de receita recorrente
                    ao mesmo tempo em que você agrega valor ao seu atendimento, construindo relacionamentos
                    profissionais sólidos e duradouros.  </p>
            </x-ui.cta-item>
        </x-ui::container>
    </x-ui::section>
    <x-ui::section class="bg-neutral-200 text-neutral-700">
        <x-ui::container>
            <div class="space-y-4 w-1/2">
                <x-ui::h2 class="mb-8">
                    Conheça seu mentor
                </x-ui::h2>

                <p>Rogério Araújo é CEO de uma das maiores corretoras de seguros do Brasil, a TGL Consultoria. E junto a
                    ela e com seus 25 anos de experiência no mercado, conquistaram a satisfação de mais de 30 mil
                    clientes, além de contar com quase 1Bi em reservas de previdência.</p>
                <p>

                    Palestrante das principais seguradoras e instituições financeiras, tem ajudado milhares de pessoas
                    por todo Brasil a entenderem a nossa verdadeira missão do corretor de seguros: Cuidar e proteger.
                </p>
            </div>
        </x-ui::container>
    </x-ui::section>
    <x-ui::section class="bg-primary-500 text-white grow">
        <x-ui::container class="space-y-8">
            <header class='text-center'>
                <x-ui::h2>
                    Veja o que as pessoas impactadas dizem
                </x-ui::h2>
                <div class="text-[8.5rem] font-bold leading-none -mb-8">Depoimentos</div>
            </header>
            <div class="grid grid-cols-4 gap-8">
                @foreach(range(1, 4) as $i)
                    <div class="text-3xl text-center">{{ $i }}</div>
                @endforeach
            </div>
            <div class="text-center">
                <x-ui::button variant="primary-400">
                    Quero me inscrever
                </x-ui::button>
            </div>
        </x-ui::container>
    </x-ui::section>
</x-layouts.main>
