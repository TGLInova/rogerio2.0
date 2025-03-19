<x-ui::section variant="primary-gradient" x-data='{ animate: false }' x-intersect.half:leave="animate = false" x-intersect.half:enter="animate = true">
    <x-ui::container class="space-y-8" x-bind:class="{ '*:animate-fade': animate }">
        <x-ui::h2 :variant="['large', 'metalic']" class="text-center">
            Por que o curso é presencial e não on-line?
        </x-ui::h2>

        <p class="text-2xl animate-delay-100">Porque este curso não tem como objetivo exclusivo a rentabilidade, mas sim a construção de um legado duradouro. </p>
        <p class="animate-delay-200">
            <strong>Queremos formar um verdadeiro exército de profissionais altamente qualificados</strong>, capazes de transformar a
            vida da sociedade brasileira por meio das poderosas ferramentas de planejamento e proteção financeira:
            os Seguros de Vida e os Planos de Previdência Privada.
        </p>
        <p class="animate-delay-300">
            A escolha pelo formato presencial se baseia na crença e experiência de Rogério Araújo, que entende que
            os clientes adquirem esses produtos movidos tanto pela emoção quanto pela razão. A transmissão desse
            know-how, nesse primeiro contato, é mais eficaz presencialmente, pois permite uma melhor absorção do
            conteúdo, interação prática e uma experiência imersiva que fortalece o aprendizado e a conexão com o
            propósito da área.
        </p>
        <div class="text-center animate-delay-500">
            <x-ui::button variant="primary-400" >
                QUERO ME INSCREVER
            </x-ui::button>
        </div>

    </x-ui::container>
</x-ui::section>
