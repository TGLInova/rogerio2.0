<section class="text-neutral-600 overflow-hidden bg-gradient-to-r from-neutral-100 via-neutral-100 to-neutral-300" x-data="{ animate: false }"
x-intersect:leave="animate = false" x-intersect:enter.half="animate = true">
<x-ui::container class="relative grid grid-cols-2 gap-8">
    <div class="space-y-6 text-lg py-12 lg:py-20 duration-1000 delay-500" x-bind:class="{'opacity-0 ' : !animate}">
        <x-ui::h2 class="mb-8" :variant="['large']">
            Conheça seu mentor
        </x-ui::h2>

        <p><strong>Rogério Araújo é CEO de uma das maiores corretoras de seguros do Brasil</strong>, a TGL
            Consultoria. E junto a
            ela e com seus 25 anos de experiência no mercado, conquistaram a satisfação de mais de 30 mil
            clientes, além de contar com quase 1Bi em reservas de previdência.</p>
        <p>

            <strong> Palestrante das principais seguradoras e instituições financeiras</strong>, tem ajudado
            milhares de pessoas
            por todo Brasil a entenderem a nossa verdadeira missão do corretor de seguros: Cuidar e proteger.
        </p>
        <x-ui::button variant='primary-300'>
            Quero ser aluno
        </x-ui::button>
    </div>
    <img x-bind:class="animate ? 'animate-fade-up' : 'opacity-0'" src="{{ asset('static/img/rogerio_2.webp') }}"
        class="duration-500 absolute h-[94%] right-0 bottom-0 drop-shadow-[15px_5px_25px]">
    <div class="relative" x-bind:class="animate ? 'animate-fade-up animate-delay-500' : 'opacity-0'">
        <x-ui.speaker-box class="-right-16 bottom-32" :image="asset('static/img/icatu.webp')" />
        <x-ui.speaker-box class="-right-16 bottom-64" :image="asset('static/img/allianz.webp')" />
        <x-ui.speaker-box class="left-24 bottom-48" :image="asset('static/img/mapfre.webp')" />
        <x-ui.speaker-box class="left-12 bottom-12" :image="asset('static/img/sancor.webp')" />
    </div>
</x-ui::container>
</section>
