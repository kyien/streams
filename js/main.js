const menu = document.querySelector(".menu-icons");
const nav = document.querySelector("nav");

menu.addEventListener("click", function(){
	nav.classList.toggle("active");
});

$('.posts-cont').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	nextArrow: $('.next'),
	prevArrow: $('.prev'),
	responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
  });
  document.getElementById('dwnld').addEventListener('click', function(){
	document.querySelector('.popupdwld').style.display = 'flex';
  });
  document.querySelector('.close').addEventListener('click', function(){
	  document.querySelector('.popupdwld').style.display = 'none';
  });


  