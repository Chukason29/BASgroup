$(document).ready(function() { 
	//let element = document.getElementsByClassName('pagepiling');
	if (matchMedia('only screen and (min-width: 568px)').matches) {
		let link = document.createElement('link');
		link.rel = "stylesheet";
		link.href = "https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.css";
		document.head.appendChild(link);
		//element.id = 'pagepiling';
		$('#pagepiling').pagepiling({
			menu: null,
			direction: 'vertical',
			verticalCentered: true,
			sectionsColor: [],
			anchors: [],
			scrollingSpeed: 700,
			easing: 'swing',
			loopBottom: true,
			loopTop: true,
			css3: true,
			navigation: {
				'textColor': '#000',
				'bulletsColor': '#000',
				'position': 'right',
				'tooltips': ['section1', 'section2', 'section3', 'section4']
			},
			normalScrollElements: null,
			normalScrollElementTouchThreshold: 5,
			touchSensitivity: 10,
			keyboardScrolling: true,
			sectionSelector: '.section',
			animateAnchor: false,
	
			//events
			onLeave: function(index, nextIndex, direction){},
			afterLoad: function(anchorLink, index){},
			afterRender: function(){},
		});
	}else{
		console.log((matchMedia('only screen and (min-width: 568px)').matches));
	}
	
	
});
let menuLink = document.getElementById('ecosystem');
let menu = document.getElementById("menu");
menuLink.addEventListener('click', springUp);
function springUp(){
	menu.setAttribute('class', 'menuClass');
}


