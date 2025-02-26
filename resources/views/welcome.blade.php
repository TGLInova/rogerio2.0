<x-layouts.main>
    <x-sections.hero>
        <img src="{{ asset('static/img/logo.svg') }}" class="w-48">
        <h1 class="sr-only">Mentoria TOPO</h1>
        <h2 class="animate-fade-up text-4xl">
            Descubra como vender <span class="font-semibold">Seguro de Vida e Previdência Privada com Propósito</span> em
            1º lugar e assim Construir uma
            Carreira Lucrativa.
        </h2>
        <p class="animate-fade-up animate-delay-300">
            Participe da imersão de 2 dias com Rogério Araújo, um dos maiores especialistas do mercado, e domine a
            metodologia consultiva que transforma vendas em uma missão, Cuidar e Proteger de Vidas, Famílias e Negócios.
        </p>
        <x-ui::button variant="primary-400" class="animate-fade-up animate-delay-500">
            Quero me inscrever
        </x-ui::button>
    </x-sections.hero>

    <x-sections.parceiros />

    <x-sections.big-cta />

    <x-sections.about />
    <x-sections.material-presentation />
    <x-sections.testemonial />
    <x-ui::section class="bg-primary-600 text-white">
        <x-ui::container class="space-y-8">
            <x-ui::h2 :variant="['large', 'metalic']" class="text-center">
                Por que o curso é<br> presencial e não on-line?
            </x-ui::h2>
            <p>
                Queremos formar um verdadeiro exército de profissionais altamente qualificados, capazes de transformar a
                vida da sociedade brasileira por meio das poderosas ferramentas de planejamento e proteção financeira:
                os Seguros de Vida e os Planos de Previdência Privada.
            </p>
            <p>
                A escolha pelo formato presencial se baseia na crença e experiência de Rogério Araújo, que entende que
                os clientes adquirem esses produtos movidos tanto pela emoção quanto pela razão. A transmissão desse
                know-how, nesse primeiro contato, é mais eficaz presencialmente, pois permite uma melhor absorção do
                conteúdo, interação prática e uma experiência imersiva que fortalece o aprendizado e a conexão com o
                propósito da área.
            </p>
            <div class="text-center">
                <x-ui::button variant="primary-400">
                    QUERO ME INSCREVER
                </x-ui::button>
            </div>


        </x-ui::container>
    </x-ui::section>
    {{-- <x-sections.pos-and-cons /> --}}
    <x-sections.training-content />
    {{-- <x-sections.hero :social-networks="false">
        <x-ui::h2 variant="large">
            Você está pronto para criar uma carteira recorrente de seguro de vida?
        </x-ui::h2>

        <p class="text-lg">Clique no botão, escolha a data e faça o seu check-out!</p>

        <x-ui::button variant="primary-400" class="text-lg">
            Garantir minha inscrição
        </x-ui::button>
    </x-sections.hero> --}}
</x-layouts.main>
