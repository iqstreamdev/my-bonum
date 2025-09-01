export const footerContentOrder = () => {
    const footerContainer = document.querySelector('footer .container');
    if (!footerContainer) return;

    const infoWrapper = footerContainer.querySelector('.info-wrapper');
    const socials = infoWrapper?.querySelector('.socials');
    const copyright = infoWrapper?.querySelector('.copyright');
    if (!infoWrapper || !socials || !copyright) return;

    const mq = window.matchMedia('(max-width: 1023px)');
    let mobileBox = null;

    function toMobile() {
        if (!mobileBox) {
            mobileBox = document.createElement('div');
            mobileBox.className = 'footer-mobile-elements';
            footerContainer.appendChild(mobileBox);
        }
        mobileBox.appendChild(socials);
        mobileBox.appendChild(copyright);
    }

    function toDesktop() {
        infoWrapper.appendChild(socials);
        infoWrapper.appendChild(copyright);

        if (mobileBox && mobileBox.parentNode) {
            mobileBox.parentNode.removeChild(mobileBox);
            mobileBox = null;
        }
    }

    function applyLayout() {
        if (mq.matches) {
            toMobile();
        } else {
            toDesktop();
        }
    }

    applyLayout();

    mq.addEventListener('change', applyLayout);
}