const enlaces = document.querySelector('nav .enlaces-menu');
const boton = document.querySelector('nav .contenido-nav .boton-menu button');

function menu(){
	if(enlaces.style.display === 'grid'){
		enlaces.style.display = 'none';
	}else{
		enlaces.style.display = 'grid';
	}
}

window.addEventListener("resize", function () {
	if (window.innerWidth > 700)  {
	    enlaces.style.display = 'none';
	}
});