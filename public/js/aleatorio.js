window.addEventListener('DOMContentLoaded', () => {
    buttons.forEach((button) => {
        moveButtonRandomly(button); // Chama a função do arquivo aleatorio.js
    });
});

function moveButtonRandomly(button) {
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;

    const randomX = Math.random() * (windowWidth - button.offsetWidth);
    const randomY = Math.random() * (windowHeight - button.offsetHeight);

    button.style.position = 'absolute';
    button.style.left = `${randomX}px`;
    button.style.top = `${randomY}px`;
}