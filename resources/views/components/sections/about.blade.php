<section class="text-neutral-600 overflow-hidden bg-gradient-to-r from-neutral-100 via-neutral-100 to-neutral-300 max-lg:min-h-screen"
    x-data="{ animate: false }" x-intersect.half:leave="animate = false" x-intersect.half:enter="animate = true">
    <x-ui::container class="relative grid lg:grid-cols-2 grid-cols-1 lg:gap-16 gap-6" >
        <div class="space-y-5 text-lg py-12 lg:py-20" x-bind:class="animate ? '*:animate-fade' : 'opacity-0'">
            <x-ui::h2 class="mb-8 text-primary-300" :variant="['large']">
                <div class="text-base">Quem é </div>
                Rogério Araújo?
            </x-ui::h2>

            <p class="animate-delay-[200ms]">Com anos de experiência e resultados sólidos, Rogério Araújo é conhecido por revolucionar o mercado de
                seguros de vida e de previdência privada através de um atendimento consultivo que prioriza escuta ativa,
                ética e propósito. Como mentor e palestrante, já capacitou centenas de profissionais que hoje se
                destacam no
                setor.</p>

            <ul class="list-disc list-inside animate-delay-[400ms]">
                <li>CEO da TGL Consultoria;</li>
                <li>Membro do MDRT;</li>
                <li>Sócio da Univalores;</li>
                <li>Idealizador do MinhaVidaProtegida;</li>
                <li>Diretor do Sincor-MG;</li>
                <li>Diretor do CVG-SP;</li>
                <li>Diretor do CSP-MG;</li>
            </ul>
            <p class="text-2xl font-semibold text-primary-300 animate-delay-[600ms]">
                Agora, ele quer levar você a esse mesmo nível, para que juntos possamos transformar o nosso mercado!
            </p>

            <x-ui::button variant='primary-400' class="animate-delay-[800ms] max-lg:w-full" href="#inscrever">
                GARANTIR MINHA VAGA!
            </x-ui::button>
        </div>
        <img x-bind:class="animate ? 'animate-fade-up' : 'opacity-0'"
            src="{{ asset('static/img/rogerio_araujo_4.webp') }}"
            class="duration-500 lg:absolute h-[90%] right-0 bottom-0 drop-shadow-[15px_5px_25px] object-contain object-bottom">
    </x-ui::container>
</section>
