export default (): void => {
    window.addEventListener('scroll', (): void => {
        const anchorTop = document.getElementById('anchor-top') as HTMLElement;
        if (window.scrollY > 300) {
            anchorTop.classList.remove('disabled');
        } else {
            anchorTop.classList.add('disabled');
        }
    });
};
