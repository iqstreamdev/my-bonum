export const hamburger = () => {
    const hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1200) {
            hamburger.classList.remove('active');
        }
    });
};