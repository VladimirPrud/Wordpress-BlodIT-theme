let menuBtn = document.querySelector('.menu-btn');
let menuNav = document.querySelector('.menu-nav');
let contentContainer = document.querySelector('.content__container')
menuBtn.addEventListener('click', function(){
	menuNav.classList.toggle('active');
	menuBtn.classList.toggle('active');
	contentContainer.classList.toggle('active');
})

