import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import Rellax from "rellax";
import axios from "axios"

import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import { Autoplay, Navigation, Pagination } from 'swiper/modules';

Alpine.data('swiper', function (options = {}) {

    const el = this.$el;

    el.classList.add('swiper')

    const elContainer = el.closest('.swiper-container')

    const swiper = new Swiper(this.$el, {
        modules: [Navigation, Pagination, Autoplay],

        on: {
            init: () => {
                el.classList.remove('swiper-cloak')
            },
        },


        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        pagination: {
            el: elContainer.querySelector('.swiper-pagination'),
            clickable: true,
            type: 'custom',
            renderCustom: (swiper, current, total) => `<div class="swiper-pagination-container">${current} de ${total}</div>`
        },




        slidesPerView: 6,
        spaceBetween: 30,
        // loop: true,
        autoplay: {
            delay: 5000,

        },
        freeMode: true,
        paginationClickable: true,
        watchSlidesProgress: true,
        ...options,
    });

    return {
        swiper
    }
})

new Rellax(".rellax", {
    center: true,
});

Alpine.data("brazilMap", function () {

    const root = this.$el;

    return {
        events: [],
        async init() {
            this.events = (await axios.get('/api/eventos')).data;

            const states = Object.keys(this.events);

            states.length > 0 && this.select(states[0])
        },
        containsEvent(state) {
            return this.events[state]
        },
        select(state) {
            root.querySelectorAll('a').forEach(el => el.classList.remove('active'))

            this.$refs[state].classList.add("active")

            this.$dispatch('brazil-map-state-change', {
                state,
                image: `/static/img/bandeiras-br/${state}.png`,
                events: this.events[state]
            })
        },
    };
});

Livewire.start();
