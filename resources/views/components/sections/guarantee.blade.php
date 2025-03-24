<x-ui::section class="bg-gradient-to-r to-neutral-300 from-white">
    <x-ui::container class="grid lg:grid-cols-2 items-center gap-24">
        <div class="space-y-8 text-xl max-lg:text-center max-lg:px-8">
            <x-ui::h2 class="mb-8 text-primary-300" :variant="['large']">
                Garantia
            </x-ui::h2>
            <p>Se após o primeiro dia você sentir que a imersão não está entregando valor,
                <strong>devolvemos 100% do seu investimento</strong>.</p>
            <p class="text-2xl">Risco Zero!</p>
            <x-ui::button variant="primary-400" href="#inscrever">
                GARANTIR MINHA VAGA!
            </x-ui::button>
        </div>
        <figure class="flex items-center justify-center">
            <img src="{{ asset('static/img/medalha.webp') }}" class="w-96 h-96 object-contain" width="413" height="418">
        </figure>
    </x-ui::container>
</x-ui::section>
