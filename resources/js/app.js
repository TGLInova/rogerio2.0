import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import Rellax from "rellax";

new Rellax(".rellax", {
    center: true,
});

Alpine.data("brazilMap", function () {

    const root = this.$el;

    return {
        select(state) {

            root.querySelectorAll('a').forEach(el => el.classList.remove('active'))

            this.$el.classList.add('active');

            this.$dispatch('brazil-map-state-change', {
                state,
                image: `/static/img/bandeiras-br/${state}.png`
            })
        },
    };
});

Livewire.start();
