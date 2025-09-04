import { mainSlider } from './global/main-slider';
import { hamburger } from './global/hamburger';
import { footerContentOrder } from './global/footer-content-order';
import { initHubspotForms } from './global/initHubspotForms';


window.addEventListener("load", () => {
    hamburger();
    footerContentOrder();
    mainSlider();
    // initHubspotForms();
});