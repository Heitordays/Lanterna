const lanterna = document.createElement('div');
lanterna.id = 'lanterna';
lanterna.classList.add('lanterna');
document.body.appendChild(lanterna);

const buttons = document.querySelectorAll('.container a, a.back-button');

// Adiciona o evento 'mousemove' ao documento
document.addEventListener('mousemove', (e) => {
    // Atualiza a posição da lanterna
    lanterna.style.left = `${e.pageX}px`;
    lanterna.style.top = `${e.pageY}px`;

    // Obtém as dimensões da lanterna
    const lanternaRect = lanterna.getBoundingClientRect();

    // Verifica se a lanterna está sobre os botões
    buttons.forEach((button) => {
        const rect = button.getBoundingClientRect(); // Obtém as dimensões do botão

        // Verifica se a lanterna está sobrepondo o botão
        if (
            lanternaRect.right >= rect.left &&
            lanternaRect.left <= rect.right &&
            lanternaRect.bottom >= rect.top &&
            lanternaRect.top <= rect.bottom
        ) {
            button.classList.add('visible'); // Torna o botão visível
        } else {
            button.classList.remove('visible'); // Oculta o botão
        }
    });
});