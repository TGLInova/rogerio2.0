<x-ui::section variant="primary-gradient">
    <x-ui::container class="space-y-12 text-center" variant="compact">
        <header class="space-y-6">
            <x-ui::h2 :variant="['metalic', 'large']">
                Para quem é a imersão
            </x-ui::h2>
            <img src="{{ asset('static/img/logo.svg') }}" class="w-56 inline-block">
        </header>

        <ul class="flex flex-col items-center justify-center text-left text-xl [&>li]:flex [&>li]:gap-3 [&>li]:items-center [&>li]:py-3 border border-neutral-500 p-4 rounded-lg relative">
            <span @class([
                'absolute h-80 w-80 pointer-events-none bg-current opacity-20 blur-2xl rounded-full',
                'text-blue-400',
            ])></span>
            <li>
                <x-icon name="heroicon-o-check-circle" class="w-6 h-6 flex-none text-primary-400" />
                <span>
                    Corretores de Seguros, agentes autônomos de investimento, bancários e demais profissionais.
                </span>
            </li>
            <li>
                <x-icon name="heroicon-o-check-circle" class="w-6 h-6 flex-none text-primary-400" />
                <span>
                    Profissionais que querem aprender técnicas avançadas de prospecção e fechamento.
                </span>
            </li>
            <li>
                <x-icon name="heroicon-o-check-circle" class="w-6 h-6 flex-none text-primary-400" />
                <span>
                    Para pessoas com ou sem experiência, que querem construir uma carteira recorrente.
                </span>
            </li>
            <li>
                <x-icon name="heroicon-o-check-circle" class="w-6 h-6 flex-none text-primary-400" />
                <span>
                    Você que já possui uma base de clientes em outros ramos de seguro ou em serviços financeiros mas não
                    sabe como transformá-la em uma carteira recorrente.
                </span>
            </li>
            <li>
                <x-icon name="heroicon-o-check-circle" class="w-6 h-6 flex-none text-primary-400" />
                <span>
                    Você que vê uma oportunidade no Seguro de Vida, ramo que mais cresce e paga do mercado segurador, mas não sabe como começar.
                </span>
            </li>
        </ul>

        <!-- as vagas são -->

        <x-icon name="icon-alert" class="w-64 mx-auto block !-mb-16" />
        <x-ui::h2 class="text-center " :variant="['large', 'metalic']">
            <div>As vagas são limitadas!</div>
            <div>(30 vagas por região)</div>
        </x-ui::h2>

        <p class="text-xl">
            Garanta sua participação agora e transforme a maneira como você vende seguro de vida e previdência privada.
        </p>
        <p class="text-xl">
            Não venda apenas seguros. Proteja vidas e construa seu legado.
        </p>


        <div class="border-2 border-neutral-300 rounded-lg p-12 space-y-8 bg-primary-500 max-w-2xl mx-auto">
            <p class="text-2xl bg-gradient-to-b from-white to-neutral-400 text-transparent bg-clip-text">Agora que você sabe como vai escalar suas vendas de Seguro de Vida, chegou a hora de você colocar em prática!</p>
            <div>
                {{-- <div>De R$ 5.000,00 por</div> --}}
                <div class="text-6xl font-semibold">até 12x R$ 245,73</div>
                <div class="font-semibold">ou R$ 2.376,00</div>
            </div>
            <x-ui::button variant="primary-400" href="#inscrever">
                GARANTIR MINHA VAGA!
            </x-ui::button>
        </div>
    </x-ui::container>
</x-ui::section>
