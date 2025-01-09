<?php

namespace App\View\Components\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PosAndCons extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $items = [
            [
                'title' => 'Para quem é',
                'items' => [
                    'Corretores de Seguros, Agentes autônomos de investimento, bancários e demais profissionais.',
                    'Profissionais que querem aprender técnicas avançadas de prospecção e fechamento.',
                    'Para pessoas com ou sem experiência, que querem construir uma carteira recorrente.',
                ],
                'class' => 'text-blue-500'
            ],
            [
                'title' => 'Para quem não é',
                'items' => [
                    'Vendedores de Balcão, que focam somente em bater metas.',
                    'Profissionais interessados exclusivamente na venda de produtos.',
                    'Corretores que não querem agregar valor na vida financeira de seus clientes.'
                ],
                'class' => 'text-red-500'
            ]
        ];

        return view('components.sections.pos-and-cons', compact('items'));
    }
}
