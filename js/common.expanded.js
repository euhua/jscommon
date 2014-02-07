// Js Common Library v1.32
// Required: jquery.js 
// Some functions may require: jquery-ui.js, jquery.mousewheel.js, jquery.flash.js


//--validations--
//Is it a hand held device, e.g. tablet, smartphones
function isHandHeldDevice(){
	if( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 ){
		return true;
	}else{
		return false;
	}
}
//--end of validations--


//--strings--
//Get current time in string format
function getCurrentDateTimeInString(){
	var currentTime = new Date();
	var month = ((currentTime.getMonth()+1) < 10) ? '0'+(currentTime.getMonth()+1) : currentTime.getMonth()+1;
	var day = (currentTime.getDate() <10) ? '0'+currentTime.getDate() : currentTime.getDate();
	var year = currentTime.getFullYear();
	var hour = (currentTime.getHours() <10) ? '0'+currentTime.getHours() : currentTime.getHours();
	var minute = (currentTime.getMinutes() <10) ? '0'+currentTime.getMinutes() : currentTime.getMinutes();
	var second = (currentTime.getSeconds() <10) ? '0'+currentTime.getSeconds() : currentTime.getSeconds();

	return year + '' + month + '' + day + '' + hour + '' + '' + minute + '' + second;
}

//Get input date in string format
function getDateTimeInString(inputDate){
	var selTime = new Date(inputDate);
	var month = ((selTime.getMonth()+1) < 10) ? '0'+(selTime.getMonth()+1) : selTime.getMonth()+1;
	var day = (selTime.getDate() <10) ? '0'+selTime.getDate() : selTime.getDate();
	var year = selTime.getFullYear();
	var hour = (selTime.getHours() <10) ? '0'+selTime.getHours() : selTime.getHours();
	var minute = (selTime.getMinutes() <10) ? '0'+selTime.getMinutes() : selTime.getMinutes();
	var second = (selTime.getSeconds() <10) ? '0'+selTime.getSeconds() : selTime.getSeconds();

	return year + '' + month + '' + day + '' + hour + '' + '' + minute + '' + second;
}

//Get hash value, the string after # in url
function getHashValue(){
	return window.location.hash.replace('#', '');
}
//--end of strings--


//--events--
//Auto focus the next target field when reached maxlength
function autoToNextField(sourceField, targetField, maxLength){
	$(sourceField).keyup(function(e){
		if(e.which != 37 && e.which != 38 && e.which != 39 && e.which != 40){
			var len = $(this).val().length;
			
			if(len == maxLength)
				$(targetField).focus();
		}
	});
}

//Allow field to have alphanumeric values only
function bindAlphaNumericOnly(elementName){
	$(elementName).keypress(function(e){
		// control keys and reserved characters
		if ((e.which==null) || (e.which==0) || (e.which==8) || 
			(e.which==9) || (e.which==13) || (e.which==27) || (e.which==95) || (e.which==45))
		   return true;
		
		keychar = String.fromCharCode(e.which);
		keychar = keychar.toLowerCase();
		
		// alphas and numbers
		if ((("abcdefghijklmnopqrstuvwxyz0123456789 ").indexOf(keychar) > -1))
		   return true;
		else
		   return false;
	});
}

//Bind trigger onclick, back to the top of the page
function bindBackToTopTrigger(element){
	$(element).click(function(e){
		e.preventDefault(); //prevent redirect
		
		var currentLocation = $('html').scrollTop();
		//some browser cannot support, read the body element then
		if(currentLocation == 0)
			currentLocation = $('body').scrollTop();
			
		var delay = parseInt(currentLocation / 1.5);
		$('html,body').animate({'scrollTop': 0}, delay);
	});
}

//Shows characters count left of the field and blocks when maxChar is reached
function bindCharCounter(inputElement, counterDisplayElement, maxChar){
    $(inputElement).each(function(){
        var charLength = $(this).val().length;
        var charLeft = maxChar - charLength;
            
        $(counterDisplayElement).html(charLeft + "/" + maxChar);
        
        $(this).keyup(function(){
            var charLength = $(this).val().length;
            var newCharLeft = maxChar - charLength;
            
			if (charLength > maxChar)
            	$(inputElement).val(($(this).val()).substr(0, maxChar));
			
            $(counterDisplayElement).html(newCharLeft + "/" + maxChar);
        });
        
        $(this).keydown(function(e){
            var charLength = $(this).val().length;
            var newCharLeft = maxChar - charLength;
            
            if(newCharLeft == 0 && e.which!=8 && e.which!=0 && e.which!=46)
                e.preventDefault();
        });
		
        // Prevent Copy Paste
		// if too long...trim it!
        if (charLength > maxChar)
            $(inputElement).val(($(this).val()).substr(0, maxChar));
    });
}

//Show default text when no value is present on field
function bindDefaultText(element){
	var default_value = $(element).prop('title');
	$(element).val(default_value);
	$(element).addClass('defaultValue');
	
	$(element).focus(function(){
		$(this).removeClass('defaultValue');
		if($(this).val() == default_value) {
			$(this).val('');
		}
	});
	$(element).blur(function(){
		if($(this).val() == '') {
			$(this).addClass('defaultValue');
			$(this).val(default_value);
		}
	});
}

//Bind friendly date
function bindFriendlyDate(element, timeToCompare, detail, attr){
	var compareDate;
	
	//no time to compare? use current client's time
	if(timeToCompare == null || timeToCompare == 'undefined')
		compareDate = new Date();
	else
		compareDate = new Date(timeToCompare.replace(/-/g,"/").replace(/[TZ]/g," "));
	
	if(detail == null || detail == 'undefined')
		detail = true;
		
	$(element).each(function(){
		var field;
		
		//set the attribute to get the values
		if(attr == null || attr == 'undefined')
			field = $(this).text();
		else
			field = $(this).prop(attr);
		
		var friendlyDate = field;
		var date = new Date(field.replace(/-/g,"/").replace(/[TZ]/g," "));
		var diff = ((compareDate.getTime() - date.getTime()) / 1000);
		var day_diff = Math.floor(diff / 86400);
		
		if(isNaN(day_diff) || day_diff < 0 || day_diff >= 7){
			//do nothing
		}else{
			if(day_diff == 0){
				if(detail){
					if(diff < 60)
						friendlyDate = 'just now';
					else if(diff < 120)
						friendlyDate = '1 minute ago';
					else if(diff < 3600)
						friendlyDate = Math.floor(diff/60)+' minutes ago';
					else if(diff < 7200)
						friendlyDate = '1 hour ago';
					else if(diff < 86400)
						friendlyDate = Math.floor(diff/3600)+' hours ago';
				}else{
					friendlyDate = 'today';
				}
			}else if(day_diff == 1)
				friendlyDate = 'yesterday';
			else if(day_diff < 7)
				friendlyDate = day_diff+' days ago';
			
			//set the attribute to get the values
			if(attr == null || attr == 'undefined')
				$(this).text(friendlyDate);
			else
				$(this).prop(attr, friendlyDate);
		}
	});
}

//Allow field to have number values only
function bindNumericOnly(elementName){
    $(elementName).keypress(function(e){
      //do not allow other characters except number
      if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
        return false;
    });
}

//Allow field to have signed numeric values only
function bindNumericOnlyWithSign(elementName){
	$(elementName).keypress(function(e){
    	//do not allow other characters except number
    	if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57) && e.which!= 45 && e.which!=43)
        	return false;
    });
}

//Setup overlay pop up window
function bindOverlayWindow(triggerElement, windowElement, closeElement, darkenBackground, fadeIn, overlayBgElement, zIndex){		
    //when trigger element is clicked
    $(triggerElement).click(function(e){
		e.preventDefault(); //prevent redirect
        
        //bind the windowElement to make it on screen
		var elementHeight = parseInt($(windowElement).height());
        var marginLeftOffset = parseInt($(windowElement).outerWidth()/2);
        var marginTopOffset = parseInt($(windowElement).height()/2);
        var height = $(window).height();
        var scrollTop = $(window).scrollTop();
		
		if(zIndex == null || zIndex == 'undefined')
			zIndex = 10000;
		
        $(windowElement).css({
            'position' : 'absolute',
            'zIndex' : zIndex,
            'top': '150px',
			'left': '50%',
            'marginLeft' : '-'+marginLeftOffset+'px'
        });
        
		if(darkenBackground){
			if(overlayBgElement == null || overlayBgElement == 'undefined')
				$('#overlayBg').show();
			else
				$(overlayBgElement).show();
		}
		
		if(fadeIn == null || fadeIn == 'undefined' || fadeIn == true)
        	$(windowElement).fadeIn(300);
		else
			$(windowElement).show();
 	});
    
    //when close element is clicked
    $(closeElement).click(function(e){
        e.preventDefault(); //prevent redirect
        
		if(fadeIn == null || fadeIn == 'undefined' || fadeIn == true){
        	$(windowElement).fadeOut(300, function(){
        		if(darkenBackground){
            		if(overlayBgElement == null || overlayBgElement == 'undefined')
						$('#overlayBg').hide();
					else
						$(overlayBgElement).hide();
				}
			});
		}else{
			$(windowElement).hide();
			if(darkenBackground){
            	if(overlayBgElement == null || overlayBgElement == 'undefined')
					$('#overlayBg').hide();
				else
					$(overlayBgElement).hide();
			}
		}
    });
}

//Bind custom scroller for container
function bindScroller(scrollBar, scrollTop, scrollBottom, scrollContent){
	$(scrollBar).slider({
		animate: false,
		change: function(e, ui){
			updateScrollChanges(ui.value, scrollBar, scrollContent, scrollTop, scrollBottom);
		},
		slide: function(e, ui){
			updateScrollChanges(ui.value, scrollBar, scrollContent, scrollTop, scrollBottom);
		},
		orientation: 'vertical',
		value: 100 
	});

	if(scrollTop != '' && scrollTop != null){
		$(scrollTop).click(function(){
			$(scrollBar).slider('value', $(scrollBar).slider('value')+10);									 
		});
	}
	if(scrollBottom != '' && scrollBottom != null){
		$(scrollBottom).click(function(){
			$(scrollBar).slider('value', $(scrollBar).slider('value')-10);			
		});
	}
	$(scrollContent).mousewheel(function(e,delta){
		e.preventDefault();
		$(scrollBar).slider('value', $(scrollBar).slider('value') + (delta*3));
	});
	$(scrollContent).scrollTop(0);
	updateScrollChanges(null, scrollBar, scrollContent, scrollTop, scrollBottom);
	updateScrollerActivation(scrollBar, scrollTop, scrollBottom, scrollContent);
} 

function updateScrollerActivation(scrollBar, scrollTop, scrollBottom, scrollContent){
	var childrenTotalHeight = 0;
	var scrollContentHeight = parseInt($(scrollContent).height());
	$(scrollContent).children().each(function(){
		childrenTotalHeight += parseInt($(this).outerHeight());	
	});
	
	if(childrenTotalHeight <= scrollContentHeight){
		$(scrollBar).find('.ui-slider-handle').hide();
		
		if(scrollTop != '' && scrollTop != null)
			$(scrollTop).css('opacity', '0.3');
		if(scrollBottom != '' && scrollBottom != null)	
			$(scrollBottom).css('opacity', '0.3');
	}else{
		$(scrollBar).find('.ui-slider-handle').show();
	
		if(scrollTop != '' && scrollTop != null)
			$(scrollTop).css('opacity', '1');
		if(scrollBottom != '' && scrollBottom != null)	
			$(scrollBottom).css('opacity', '1');
	}
}

function forceScrollerActive(scrollBar, scrollTop, scrollBottom, scrollContent){
	$(scrollBar).find('.ui-slider-handle').show();
	$(scrollTop).css('opacity', '1');
	$(scrollBottom).css('opacity', '1');
}

function updateScrollChanges(scrollValue, scrollBar, scrollContent, scrollTop, scrollBottom){
	if(scrollValue != null){
		var maxScroll = $(scrollContent).prop('scrollHeight') - $(scrollContent).height();
		$(scrollContent).scrollTop((100 - scrollValue) * (maxScroll / 100));
	}
}

//Setup animated slider
function bindSlider(container, prevTrigger, nextTrigger, speed, interval, animTimer, slotIndicator, rotating){
	var totalItems = $(container).find('li').length;
	var containerWidth = $(container).width();
	var containerScrollWidth = totalItems * containerWidth;
	
	//setup hidden counters
	var strCounters = '<input type="hidden" class="currentItem" value="1" />\
						<input type="hidden" class="totalItem" value="'+totalItems+'" />';
	
	$(container).append(strCounters);
	
	var i = 0;
	$(container).find('li').each(function(){
		$(this).append('<input type="hidden" class="itemCount" value="'+(++i)+'">');
	});
	
	//setup slot indicator if available
	if(slotIndicator != null && slotIndicator != 'undefined'){
		var strSlotIndicator = '<ul>'
		for(i=0; i< totalItems; i++){
			strSlotIndicator += '<li><span>'+(i+1)+'</span></li>';
		}
		strSlotIndicator += '</ul>';
		
		//bind the indicators
		$(slotIndicator).html(strSlotIndicator);
		
		//adjust the indicator position
		$(slotIndicator).css('position', 'absolute');
		$(slotIndicator).css('left', '50%');
		$(slotIndicator).css('marginLeft', '-' + parseInt($(slotIndicator).width()/2) + 'px');
		
		//default selection
		$(slotIndicator).find('li:first').addClass('selected');
	}
	
	//bind the width for the scroller first
	$(container).find('ul:first').width(containerScrollWidth);
	$(container).find('ul:first').css('position', 'absolute');
	$(container).find('ul:first').css('top', 0);
	$(container).find('ul:first').css('left', 0);
	
	//bind button scrollers
	$(prevTrigger).click(function(e){
		e.preventDefault();
		if(animTimer)
			clearInterval(animTimer);
		scrollSlider(container, prevTrigger, nextTrigger, false, speed, slotIndicator, rotating);
	});
	$(nextTrigger).click(function(e){
		e.preventDefault();
		if(animTimer)
			clearInterval(animTimer);
		scrollSlider(container, prevTrigger, nextTrigger, true, speed, slotIndicator, rotating);
	});
	
	if(interval != '' && interval != 0 && animTimer != 'undefined'){
		animTimer = setInterval(function(){
			scrollSlider(container, prevTrigger, nextTrigger, true, speed, slotIndicator, true);
		}, interval);
	}
	
	if(!rotating)
		$(prevTrigger).hide();
}

function scrollSlider(container, prevTrigger, nextTrigger, isForward, speed, slotIndicator, rotating){
	var containerSlider = $(container).find('ul:first');
	var currentItem = $(container).find('.currentItem:first').val();
	var totalItem = $(container).find('.totalItem:first').val();
	var prevItem = currentItem;
	
	//stop if still in animate progress
	if($(containerSlider).hasClass('animating'))
		return;
	
	//check has the rotating option enabled
	if(rotating == null || rotating == 'undefined')
		rotating = false;
		
		
	//determine the direction to go
	if(isForward){
		if(currentItem == totalItem){
			currentItem = 1;
		}else
			currentItem++;
	}else{
		if(currentItem == 1)
			currentItem = totalItem;
		else
			currentItem--;
	}

	//handling rotations
	var rotateForward = false;
	var rotateBackward = false;
	var prevSlide = $(containerSlider).find('.itemCount[value="'+prevItem+'"]').parents('li');
	var currentSlide = $(containerSlider).find('.itemCount[value="'+currentItem+'"]').parents('li');

	if(rotating){
		if(isForward && currentItem < prevItem){ 
			$(prevSlide).prependTo($(containerSlider));
			$(containerSlider).css('left', '+'+$(prevSlide).position().left + 'px');
			rotateForward = true;
		}else if(!isForward && currentItem > prevItem){
			$(currentSlide).prependTo($(containerSlider));
			$(containerSlider).css('left', '-'+$(prevSlide).position().left+'px');
			rotateBackward = true;
		}
	}
	
	//update the current selected item
	$(container).find('.currentItem:first').val(currentItem);
	$(container).find('.currentItem:first').trigger('change');
	
	var targetPanelLoc = $(containerSlider).find('.itemCount[value="'+currentItem+'"]:first').parents('li').position().left;
	var totalJumps = 1;
	var itemLeftLoc = 0 - targetPanelLoc;
	
	if(!rotating)
		totalJumps = Math.abs(currentItem - prevItem);
	
	
	$(containerSlider).addClass('animating');
		
	$(containerSlider).stop(true, true).animate({
		'left': itemLeftLoc+'px'
	}, speed * totalJumps, function(){
		$(this).removeClass('animating');
		
		if(rotating){
			if(rotateForward){
				$(prevSlide).appendTo($(containerSlider));
				$(containerSlider).css('left', '+'+$(currentSlide).position().left + 'px');
			}else if(rotateBackward){
				$(currentSlide).appendTo($(containerSlider));
				$(containerSlider).css('left', '-'+$(currentSlide).position().left + 'px');
			}
		}else{
			if(currentItem == totalItem)
				$(nextTrigger).hide();
			else
				$(nextTrigger).show();
			
			if(currentItem == 1)
				$(prevTrigger).hide();
			else
				$(prevTrigger).show();
		}
		
		//update the slot indicator if present
		if(slotIndicator != null && slotIndicator != 'undefined')
			updateItemSlotIndicator(slotIndicator, currentItem);
	});
}

function updateItemSlotIndicator(slotIndicator, currentItem){
	$(slotIndicator).find('ul:first li').removeClass('selected');
	$(slotIndicator).find('ul:first li:nth('+(currentItem-1)+')').addClass('selected');
}

//Shows word count left of the field blocks when maxWord is reached            
function bindWordCounter(inputElement, counterDisplayElement, maxWord){
    $(inputElement).each(function(){
        var wordLength = $(this).val().split(/\s/).length-1;
        var wordLeft = maxWord - wordLength;
            
        $(counterDisplayElement).html(wordLeft + "/" + maxWord);
        
        $(this).keyup(function(){
            var wordLength = $(this).val().split(/\s/).length-1;
            var newWordLeft = maxWord - wordLength;
			
			if(wordLength > maxWord){
				var arrWords = $(this).val().split(/\s/);
				var currentWords = '';
				for(i=0; i< maxWord; i++){
					currentWords += arrWords[i]+' ';
				}
				
				$(this).val(currentWords);
				return;
			}
			
            $(counterDisplayElement).html(newWordLeft + "/" + maxWord);
        });
        
        $(this).keydown(function(e){
            var wordLength = $(this).val().split(/\s/).length-1;
            var newWordLeft = maxWord - wordLength;
				
            if(newWordLeft == 0 && e.which!=8 && e.which!=0 && e.which!=46)
                e.preventDefault();
        });
    });
}
//--end of events--


//--helper--
//preload images
function preloadImage(images){
	try{
		if(images instanceof Array){
			for(var i=0; i<images.length; i++){
				var image = images[i];
				var imgObj = new Image();
			
				$(imgObj).load(function(){ }).error(function(){ }).prop('src', image);
			}
		}else{
			var imgObj = new Image();
			$(imgObj).load(function(){ }).error(function(){ }).prop('src', images);
		}
	}catch(err){

	}	
}

//postload image
function postloadImage(element, delay){
	if(delay == null || delay == 'undefined')
		delay = 300;
	
	$(element).each(function(){
		var target = $(this).parent();
		var src = $(this).val();
		var img = new Image();
		
		$(img).load(function(){
			$(target).html('');
			$(target).append('<img src="'+$(img).prop('src')+'" alt="" />');
			$(target).find('img').fadeIn(delay);
		}).error(function(){
			//do nothing on error
		}).prop('src', src);
	});
}
//--end of helper--

//--animation--
//Scroll to the selected element, based on the specified delay
function scrollToElementAnimated(element, delay, parent){
	if(parent != null && parent != 'undefined'){
		var containerOffset = $(parent).offset().top;
		var sectionOffset = $(element).offset().top
		var scroll = sectionOffset - containerOffset;

		$(parent).animate({'scrollTop': '+=' + scroll + 'px' }, delay);
	}else{
		var elementScrollTop = $(element).offset().top;
		$('html,body').animate({'scrollTop': elementScrollTop}, delay);
	}
}
//--end of animation--


//--flash--
//Init Flash media on to container
function initFlash(flashSource, container, width, height, wMode, flashVars){
	if(wMode == 'undefined' || wMode == null)
		wMode = 'transparent';
	
	if(flashVars == 'undefined' || flashVars == null){
		$(container).flash({ 
			src: flashSource,
			width: width,
			wmode: wMode,
			height: height
		});
	}else{
		$(container).flash({ 
			src: flashSource,
			width: width, 
			height: height,
			wmode: wMode,
			flashvars: flashVars
		});
	}
}
//--end of flash--