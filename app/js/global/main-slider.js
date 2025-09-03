import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';


export const mainSlider = () => {
    const sliders = document.querySelectorAll('.main-slider');

    sliders.forEach((slider) => {
        const raw = slider.getAttribute('data-slider') || '{}';
        const parent = slider.parentElement;
        const buttonPrev = parent.querySelector('.swiper-button-prev');
        const buttonNext = parent.querySelector('.swiper-button-next');
        const autoplayAttr = slider.getAttribute('data-swiper-autoplay');


        let sliderOptions = {};
        try {
            sliderOptions = JSON.parse(raw);
        } catch (e) {
            console.warn('Invalid JSON in data-slider', e);
        }

        const defaultOptions = {
            modules: [Navigation, Autoplay],
            spaceBetween: 0,
            navigation: {
                nextEl: buttonNext,
                prevEl: buttonPrev
            }
        };

        if (autoplayAttr) {
            defaultOptions.autoplay = {
                delay: autoplayAttr,
                disableOnInteraction: false
            };
        }

        const opts = { ...defaultOptions, ...sliderOptions };

        new Swiper(slider, opts);
    });
}