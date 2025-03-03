<x-ui::section class="bg-primary-600 text-white" x-data="{animate: false}" x-intersect.half:enter="animate = true" x-intersect.half:leave="animate = false">
    <x-ui::container class="text-center">
        <x-ui::h2 class="mb-12" :variant="['large', 'metalic']" x-bind:class="{'animate-fade-up' : animate}">
            Você já sentiu que poderia impactar<br>
            ainda mais a vida dos seus clientes?
        </x-ui::h2>

        <div class="text-xl space-y-6" x-bind:class="{'animate-fade-up animate-delay-200' : animate}">
            <p>
                E ao mesmo tempo criar uma relação de longo prazo, baseada na entrega de VALOR e não do MELHOR
                PREÇO?
            </p>
            <p>
                <strong>
                    Vender seguro de vida e planos de previdência privada vai muito além de números. É sobre
                    proteger
                    histórias, garantir futuros e construir um legado.</strong>
                Mas, para alcançar esse nível, se tornar realmente relevante na vida dos seus clientes, não basta
                oferecer um produto. É preciso entender, ouvir e entregar soluções personalizadas.
            </p>

            <p>E é exatamente isso que você vai aprender nesta imersão!</p>
        </div>

        <x-ui::h2 :variant="['large', 'metalic']" class='mt-24 mb-12' x-bind:class="{'animate-fade-up animate-delay-500' : animate}">
            Durante 2 dias intensivos,
        </x-ui::h2>
        <p class="text-xl mb-6" x-bind:class="{'animate-fade-up animate-delay-500' : animate}">você terá acesso às estratégias que Rogério Araújo - CEO da TGL Consultoria e
            referência no mercado de seguros de vida e previdência privada utiliza para transformar vendas em
            verdadeiras conexões.
        </p>
        <x-ui::h2 class="mb-6" :variant="['metalic', 'normal']" x-bind:class="{'animate-fade-up animate-delay-700' : animate}">
            Você aprenderá a:
        </x-ui::h2>

        <div class="grid lg:grid-cols-4 gap-8 mb-8">
            @foreach (range(1, 4) as $i)
                <x-ui::card class="text-center relative">
                    <span @class(['absolute h-40 w-40 aspect-square pointer-events-none bg-current opacity-20 blur-2xl rounded-full', 'text-blue-400'])></span>
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

        <x-ui::h2 :variant="['normal', 'metalic']" class='mb-12' x-bind:class="{'animate-fade-up animate-delay-700' : animate}">
            Essa não é uma palestra comum.
            <div class="text-3xl">
                É um treinamento estratégico que une o seu Propósito
                a uma maior rentabilidade.</div>
        </x-ui::h2>
        <x-ui::button variant="primary-400" x-bind:class="{'animate-fade-up animate-delay-1000' : animate}">
            QUERO ME INSCREVER
        </x-ui::button>
    </x-ui::container>
</x-ui::section>
