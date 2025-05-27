const lanterna = document.createElement('div');
lanterna.id = 'lanterna';
lanterna.classList.add('lanterna');
document.body.appendChild(lanterna);

const buttons = document.querySelectorAll('.container a, a.back-button, button.back-button'); // Inclui o botão "Voltar"
const letters = document.querySelectorAll('.letter'); // Seleciona todas as letras do h1

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

        if (
            lanternaRect.right >= rect.left &&
            lanternaRect.left <= rect.right &&
            lanternaRect.bottom >= rect.top &&
            lanternaRect.top <= rect.bottom
        ) {
            button.classList.add('visible'); // Torna o botão visível
            if (button.classList.contains('back-button')) {
                button.classList.add('highlight'); // Adiciona brilho ao botão "Voltar"
            }
        } else {
            button.classList.remove('visible'); // Oculta o botão
            button.classList.remove('highlight'); // Remove o brilho do botão "Voltar"
        }
    });

    // Verifica se a lanterna está sobre as letras
    letters.forEach((letter) => {
        const rect = letter.getBoundingClientRect(); // Obtém as dimensões da letra

        if (
            lanternaRect.right >= rect.left &&
            lanternaRect.left <= rect.right &&
            lanternaRect.bottom >= rect.top &&
            lanternaRect.top <= rect.bottom
        ) {
            letter.classList.add('glow'); // Adiciona brilho à letra
        } else {
            letter.classList.remove('glow'); // Remove o brilho da letra
        }
    });
});

function toggleLanterna(isOn) {
    if (isOn) {
        lanterna.style.display = 'block'; // Mostra a lanterna
    } else {
        lanterna.style.display = 'none'; // Esconde a lanterna
    }
}

// Eventos para detectar a tecla "J"
document.addEventListener('keydown', (e) => {
    if (e.key === 'j' || e.key === 'J') {
        toggleLanterna(true); // Liga a lanterna
    }
});

document.addEventListener('keyup', (e) => {
    if (e.key === 'j' || e.key === 'J') {
        toggleLanterna(false); // Desliga a lanterna
    }
});

letters.forEach((letter) => {
    console.log('Letra detectada:', letter.textContent); // Verifica se as letras estão sendo encontradas
});

if (
    lanternaRect.right >= rect.left &&
    lanternaRect.left <= rect.right &&
    lanternaRect.bottom >= rect.top &&
    lanternaRect.top <= rect.bottom
) {
    console.log('Lanterna sobre a letra:', letter.textContent); // Verifica se a lanterna está sobre a letra
    letter.classList.add('glow'); // Adiciona brilho à letra
} else {
    letter.classList.remove('glow'); // Remove o brilho da letra
}
