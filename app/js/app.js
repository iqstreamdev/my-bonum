import { mainSlider } from './global/main-slider';
import { hamburger } from './global/hamburger';
import { footerContentOrder } from './global/footer-content-order';


window.addEventListener("load", () => {
    hamburger();
    footerContentOrder();
    mainSlider();
});