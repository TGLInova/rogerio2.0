<x-ui::container class="grid lg:grid-cols-5 items-center h-24">
    <div class="text-xl lg:col-span-2">
        Empresas que confiaram suas equipes a mim:
    </div>
    <div class="grid grid-cols-5 gap-6 items-center lg:col-span-3">
        @foreach (['allianz.webp', 'icatu.webp', 'mapfre.webp', 'bradesco.webp', 'seguros-unimed.webp'] as $parceiro)
            <img src="{{ asset('static/img/parceiros/' . $parceiro) }}" class='h-full object-center object-contain'>
        @endforeach
    </div>
</x-ui::container>
