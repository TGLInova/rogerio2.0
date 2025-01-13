import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import Rellax from "rellax";
import axios from "axios"

new Rellax(".rellax", {
    center: true,
});

Alpine.data("brazilMap", function () {

    const root = this.$el;

    return {
        events: [],
        async init() {
            this.events = (await axios.get('/api/eventos')).data;
        },
        containsEvent(state) {
            return this.events[state]
        },
        select(state) {

            root.querySelectorAll('a').forEach(el => el.classList.remove('active'))

            this.$el.classList.add('active');

            this.$dispatch('brazil-map-state-change', {
                state,
                image: `/static/img/bandeiras-br/${state}.png`,
                events: this.events[state]
            })
        },
    };
});

Livewire.start();
