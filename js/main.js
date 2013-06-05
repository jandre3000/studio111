$(document).ready(function(){
	 
	 var animationContainer = $('#oferta_animation')
	 var controller = $.superscrollorama();
	 var screenWidth = $(document).width();
	 var elemWidth = animationContainer.width();
	 var leftPos = (screenWidth/2) - (elemWidth/2)
	 
	 var curtain = $('#kurtyna')

	 var height = $(window).height()
	 var docHeight = $(document).height()
	 var headerNav = $('header nav')
	 var navClone = $('header nav').clone()
	 var curtainContainer =  $('#curtain_container')
	 var body = $('body')
	 var scroll_indicator = $('#scroll_indicator')
	 var main_menu_offset = $('header .main_nav').offset().top
	 var main_menu_height = $('header').height()
	 //smooth scroll for menu links

	 function smoothScroll (elem, offset){
        elem.click(function(event) {
            var id = $(this).attr("href");
            var target = $(id).position().top - offset;
           	$('html, body').animate({scrollTop:target}, 800);
            event.preventDefault();
            console.log(target)
        });
    }

	 function getHeaderNavTop(){
	 	return headerNav.offset().top - $(window).scrollTop()
	 }

	 //###############
	 //starting state 
	 //###############
 
	 //add smooth scroll to all link
	 if( $(window).width() > 480 ){
	 	smoothScroll( $('a[href^="#"]'), 100 )
	 } else {
	 	smoothScroll( $('a[href^="#"]'), 10 )
	 }
	 //add smooth scroll to menu on intro 
	 smoothScroll( navClone.find('a[href^="#"]'), -( $(window).height() - 80 )) 

	 //append nav to intro curtain
	 navClone.appendTo('#kurtyna')
	

	//################
	//	Curtain Scroll Function
	//################
	var navOffset =  $('#kurtyna .main_nav').offset().top
	var navOffsetPos = height  - navOffset + 55
	 $(document).scroll(function(e){
	 	
	 	var scrollTop = $(e.target).scrollTop()
		
	 	//lift the curtain
	 	curtain.css("top", -scrollTop)

	 	scroll_indicator.css("opacity", 1-scrollTop/500)
	 	
	 	if ( !removeCurtain() ){
	 	if ( scrollTop > height ) //if the scroll position is greater than the window height
	 	{ //
	 		curtainContainer.removeClass('fixed_body').css('margin-top', height+$('header').height())
	 	} 
	 	else 
	 	{
	 		curtainContainer.addClass('fixed_body').css('margin-top', 0)
	 	}
	 	
	 	if ( scrollTop >= (height - navOffsetPos) )  // the scrolltop is less than the window height but great than 407
	 	{	//fix the navClone
	 		navClone.addClass('fixed_body')
	 	} 
		else // the scrolltop is less than the window height and less than 407 
	 	{	//scroll the navClone
	 		navClone.removeClass('fixed_body')
		}


		if ( scrollTop >= 810 ) 
		{
			navClone.hide()
		}
		else
		{
			navClone.show()
		} 
		}
	 });


	//################
	//	Rotate 'scroll down' arrow
	//################ 

	var rotateArrow = new TimelineMax({repeat:-1, repeatDelay: 2.5, pause: 5});  
	var scroll_arrow = $('#scroll_down_arrow')
	rotateArrow.to(scroll_arrow, 3, {rotation:360, ease: Linear.none});
	rotateArrow.to(scroll_arrow, 0, {rotation: 0});
	rotateArrow.pause();
	
	setTimeout(function(){
		rotateArrow.play();
	}, 2000)


	controller.addTween('#offer_arrow', (new TimelineLite()).append(
		TweenMax.to( $('#offer_arrow'), 2.5, {rotation:180 } )
	), 0 , 0 )


	if ( !removeCurtain() ){
	 controller.addTween(
	 	'#oferta_animation', 
	 	(new TimelineLite())
	 	.append([
			TweenMax.fromTo($('#oa_long_slant'), 0.10, 
				{css:{height:160, top: 0, width: 160}, ease:Strong.easeOut}, 
				{css:{height:586, top: 100, width: 435}}),

	 		TweenMax.fromTo($('#oa_square'), 0.10, 
				{css:{left:95, top: 0}, ease:Strong.easeOut}, 
				{css:{left:370, top: 525 }})
		])
		.append(
			TweenMax.fromTo($('#oa_square img'), 0.0001, 
			{css:{opacity:0}}, 
			{css:{opacity:1}})
		)
		.append([
			TweenMax.fromTo($('#oa_woman .mask'), 0.02, 
				{css:{opacity: 1}, ease:Linear }, 
				{css:{opacity:0}}),

			TweenMax.fromTo($('#oa_finger .mask'), 0.02, 
				{css:{opacity: 0}, ease:Linear }, 
				{css:{opacity:1}})
		]),
		800, //was 1600
		0
	 )
	
	 controller.addTween(
	 	'#oa_trendy', 
	 	(new TimelineLite())
	 	.append(
			TweenMax.fromTo($('#oa_trendy'), 0.7, 
			{css:{height:0}},  
			{css:{height:472}})
		)
	 	.append([
			TweenMax.fromTo($('#oa_trendy .mask'), 0.7, 
				{css:{opacity: 1}, ease:Linear.none}, 
				{css:{opacity:0}}),

			TweenMax.fromTo($('#oa_trendy .mask'), 0.7, 
				{css:{opacity: 0}, ease:Linear.none}, 
				{css:{opacity:1}})			
		]),
		0,
		-200
		)
	}

	//################
	//	Portfolio Slide Up && Down
	//################ 

    //ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
    $('.accordionButton, .close_project').click(function() {

        //REMOVE THE ON CLASS FROM ALL BUTTONS
        $('.accordionButton').removeClass('on');
          
        //NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
        $('.accordionContent').slideUp('normal');
   
        //IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
        var paragraph_content = $(this).next().find('.project_description').text()

        if($(this).next().is(':hidden') == true && paragraph_content !== '') {
            
            //ADD THE ON CLASS TO THE BUTTON
            $(this).addClass('on');
              
            //OPEN THE SLIDE
            $(this).next().slideDown('normal');
         } 
          
     });
      
    /****
    CLOSES ALL S ON PAGE LOAD
  ***/   
 
  	$(".project_description:empty").parents('.accordionContent').prev('.accordionButton').addClass('empty')

    $('.accordionContent').hide();

//##############################
//  News Slide Up && Down
//############################ 
	
	$('.entry-content').hide();

	$('#aktualnosci').on('click', '.entry-title', function(event){
		var title_id = $(this).attr('id')
		var content = $('.'+title_id)
		content.siblings().slideUp('slow')
			content.slideToggle('slow');			
	});

//##############################
//  News Nav Links
//############################ 
	

	$('#aktualnosci').on('click', 'a', function(e){
		e.preventDefault()
		var href = $(e.target).attr('href');
		$.ajax({
		  url: href,
		  beforeSend: function(){
		  	$('#news article').fadeOut('fast')
		  },
		  success: function(data){
		  	var news = $(data).find('#news')
		  	news.find('.entry-content, .news_content').hide();
		  	console.log( news.find('.entry-content') )
		  	$('#news').replaceWith(news)
		  	$('.news_content').fadeIn();
		  }
		});
	})


//##############################
//  Responsive Animations
//############################ 
	var winWidth = $(window).width();
	
	var curtainContainer = $('#curtain_container')
	$(window).resize(function(){
		winWidth = $(window).width();
		removeCurtain()
	})
	var bodyTopMargin = $(window).height()*4
	function removeCurtain(){
		//give min height to body to enable scrolling
	 	//$('body').css('min-height', docHeight - bodyTopMargin) 

		if ( winWidth < 485 ) {
			curtainContainer.removeClass('fixed_body')
			return true; 
		} else {
			return false;
		}
	}

	$('html, body').scrollTop(1);
	$('html, body').scrollTop(0);

	//removeCurtain();




});


$(window).load(function(){
	$('body').css('min-height', $('#curtain_container').height()) 
});
	
