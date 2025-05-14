const lanterna = document.createElement('div');
lanterna.id = 'lanterna';
lanterna.classList.add('lanterna');
document.body.appendChild(lanterna);
const buttons = document.querySelectorAll('.container a, a.back-button');

// Adiciona o evento 'mousemove' ao documento
document.addEventListener('mousemove', (e) => {
    const lanterna = document.getElementById('lanterna'); // Certifique-se de que a lanterna existe
    lanterna.style.left = `${e.pageX}px`;
    lanterna.style.top = `${e.pageY}px`;

    // Verifica se a lanterna está sobre os botões
    buttons.forEach((button) => {
        const rect = button.getBoundingClientRect(); // Obtém as dimensões do botão
        const lanternaX = e.pageX; // Posição X do mouse
        const lanternaY = e.pageY; // Posição Y do mouse

        // Verifica se o cursor está dentro da área do botão
        if (
            lanternaX >= rect.left &&
            lanternaX <= rect.right &&
            lanternaY >= rect.top &&
            lanternaY <= rect.bottom
        ) {
            button.classList.add('visible'); // Torna o botão visível
        } else {
            button.classList.remove('visible'); // Oculta o botão
        }
    });
});