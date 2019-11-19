var menu = window.document.getElementById('menu')
window.onscroll = function(){
	if(window.pageYOffset){
	menu.classList.remove('no-sticky');
	menu.classList.add('sticky');
	}else{
	menu.classList.remove('sticky');
	menu.classList.add('no-sticky');
	}
};