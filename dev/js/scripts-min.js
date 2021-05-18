/**
	Hamburgers by Jonathan Suh

   * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
   *
   * @private
   * @author Todd Motto
   * @link https://github.com/toddmotto/foreach
   * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
   * @callback requestCallback      callback   - Callback function for each iteration.
   * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
   * @returns {}
   */


var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
	forEach(hamburgers, function(hamburger) {
		hamburger.addEventListener("click", function() {
			this.classList.toggle("is-active");
		}, false);
	});
}


$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()> 400){
			$('.headerFixed').addClass('header--fixed');
		}
		else{
			$('.headerFixed').removeClass('header--fixed');
		}
	});
	
	$('.hamburger').click(function(){
		$('.headerMenu').slideToggle('fast');
	});
	
	$('.menu-item-has-children').click(function(){
		$(this).find('.sub-menu').slideToggle('fast');
	})
	
	$(document).ready(function(){
		var count = 0;
		$('.blogShowcase .card:gt(5)').hide();
		$('.blogShowcase .card').each(function(){
			count++;
			if(count > 6){
				$('.showMorePosts').show();	
			}
		})
	})
	
	$('.showMorePosts').click(function(e){
		e.preventDefault();
		$('.blogShowcase .card').show();
		$(this).hide();
	})
	
	$('.WhatIsFaqQuestionsTitle').click(function(e){
		e.preventDefault();
		$(this).closest('.question').find('.WhatIsFaqQuestionsAnswer').slideToggle();
		$(this).toggleClass('WhatIsFaqQuestionsTitle--open');
	})
	
}) 


function layout(){
	var altCoverContent = $('.coverContent').height();
	$('.homePage').css('padding-top', altCoverContent/2 + 90)

	$('.teamMemberPhoto').each(function(){
		var altOurTeamImage = $(this).height();
		var circle = $(this).closest('.teamMemberImage').find('.teamMemberCircle');
		circle.css('height', altOurTeamImage);
		circle.css('width', altOurTeamImage);
	})
	
	$('.videoBg').each(function(){
		var altVideoDiv = $(this).outerHeight();
		var lgVideoDiv = $(this).width();
		$(this).css({'height':altVideoDiv,'width':lgVideoDiv})
	})
	
	if($(document).width() >= 1024){
		$('.flexsliderWrapper').removeClass('flexslider');
	}else{
		$('.flexslider').flexslider({
			animation: "slide",
			animationLoop: false,
			controlNav: false,
			slideshow: false,
		});
	}
 
}

$(document).ready(function(){
	layout();
})

$(window).resize(function(){
	layout();
})


$(document).ready(function() {

	$('.testimonialsHome .flexslider').flexslider({
		animation: "slide",
		slideshow: false,
		controlNav: false 
	}); 

	$('.locationGallery .flexslider').flexslider({
		animation: "slide",
		itemWidth: 380,
		itemMargin: 30,
		animationLoop: false,
		slideshow: false,
		controlNav: false,
	});
	
	$(".teamMembersProfile").each(function(){
		var a = $(this).html();
		var b = a.length;
		if(b > 490){
			
			$(this).html(function(index, currentText) {
				return currentText.substr(0, 460) + '...';
			});
			$(this).append( " <a href='#' class='teamMemberProfileViewMore'><i class='fa fa-caret-down' aria-hidden='true'></i> read more</a>");
		}
		
		$('.teamMemberProfileViewMore').click(function(e){
			e.preventDefault();
			$(this).closest('.teamMembersProfile').html(a);
		})
		
	})
	
	
	
	
	$('.watchVideoLink').click(function(e){
		e.preventDefault();
		$(this).closest('.teamMember ').find('.modalMask').addClass('modalMask--visible');
	})
	$('.closeModal').click(function(e){
		e.preventDefault();
		$(this).closest('.teamMember ').find('.modalMask').removeClass('modalMask--visible');
	})
});

