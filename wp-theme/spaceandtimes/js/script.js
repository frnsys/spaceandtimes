// Author: Francis Tseng ( supermedes.com / @supermedes )

$(function() {
	var currentPost,
			jumping = false;

	$('.search').on('click', function() {
		$('.overlay').fadeIn( function() {
			$('.overlay #search-form input[type=text]').focus();
		});
	})

	$('.overlay').on('click', function(e) {
		if ( $(e.target).hasClass('overlay') ) {
			$(this).fadeOut();
		};
	});

	$('.shortcuts li[class!=shortcut-pages] a').on('click', function(e) {
		e.preventDefault();

		currentPost = $(this).closest('li').index() - 1;
		highlightPost( currentPost );

		var targetPos = $('a[name=' + $(this).attr('href').substring(1) + ']').closest('.post').offset().top - 60;
		jumping = true;
		$('body, html').animate({
			scrollTop: targetPos
		}, function() {
			jumping = false;
		});

		return false;
	});

	// Scroll post highlighting
	if ( window.location.hash ) {
		currentPost = $('a[name=' + window.location.hash.substring(1) + ']').closest('.post').index() - 1;
	} else {
		currentPost = 0;
	}
	highlightPost( currentPost );

	$(window).scroll( function() {
		if ( !jumping ) {
			if ( currentPost < $('.post').length - 1) {
				if ( $(window).scrollTop() - $('.post').eq(currentPost + 1).offset().top > -100) {
					currentPost++;
				}
			}
			if ( $(window).scrollTop() - $('.post').eq(currentPost).offset().top < -100 && currentPost > 0 ) {
				currentPost--;
			}
			highlightPost( currentPost );
		}
	});

});

function highlightPost( postIndex ) {
	$('.shortcuts li').removeClass('selected');
	$('.shortcuts li').eq( postIndex + 1 ).addClass('selected');
}
