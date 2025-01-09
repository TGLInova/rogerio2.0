<x-layouts.main>
    <x-sections.hero>
        <img src="{{ asset('static/img/logo.svg') }}" class="w-32">
        <h1 class="sr-only">Mentoria TOPO</h1>
        <x-ui::h2 class="animate-fade-up">
            A imersão que vai te ensinar a escalar suas vendas de <strong>seguro de vida</strong>.
        </x-ui::h2>
        <p class="animate-fade-up animate-delay-300">
            Aprenda como usar o Seguro de Vida como base de um planejamento financeiro sólido, capaz de
            identificar as necessidades de proteção de seus clientes
        </p>
        <x-ui::button variant="primary-400" class="animate-fade-up animate-delay-500">
            Quero me inscrever
        </x-ui::button>
    </x-sections.hero>
    <x-ui::section variant="primary">
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

    <x-sections.mentor />
    <x-sections.testemonial />
    <x-sections.pos-and-cons />
    <x-sections.training-content />
    <x-sections.hero :social-networks="false">
        <x-ui::h2 variant="large">
            Você está pronto para criar uma carteira recorrente de seguro de vida?
        </x-ui::h2>

        <p class="text-lg">Clique no botão, escolha a data e faça o seu check-out!</p>

        <x-ui::button variant="primary-400" class="text-lg">
            Garantir minha inscrição
        </x-ui::button>
    </x-sections.hero>
</x-layouts.main>
