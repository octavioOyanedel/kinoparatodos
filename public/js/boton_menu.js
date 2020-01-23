const nav = document.querySelector('nav .contenido-nav .boton-menu button');

nav.addEventListener('click', e => {
	nav.classList.toggle('open');
});