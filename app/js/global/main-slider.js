import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';


export const mainSlider = () => {
    const sliders = document.querySelectorAll('.main-slider');

    sliders.forEach((slider) => {
        const raw = slider.getAttribute('data-slider') || '{}';
        const buttonPrev = slider.querySelector('.swiper-button-prev');
        const buttonNext = slider.querySelector('.swiper-button-next');

        let sliderOptions = {};
        try {
            sliderOptions = JSON.parse(raw);
        } catch (e) {
            console.warn('Invalid JSON in data-slider', e);
        }

        const defaultOptions = {
            modules: [Navigation],
            spaceBetween: 0,
            navigation: {
                nextEl: buttonPrev,
                prevEl: buttonNext
            }
        };

        const opts = { ...defaultOptions, ...sliderOptions };

        new Swiper(slider, opts);
    });
}