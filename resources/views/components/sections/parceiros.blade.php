<x-ui::container class="grid grid-cols-2 py-6">
    <div class="text-xl">
        Empresas que confiaram suas equipes a mim:
    </div>
    <div class="grid grid-cols-5 gap-4 items-center">
        @foreach (['allianz.webp', 'icatu.webp', 'mapfre.webp'] as $parceiro)
            <img src="{{ asset('static/img/' . $parceiro) }}" class='h-full object-center object-contain'>
        @endforeach
    </div>
</x-ui::container>
