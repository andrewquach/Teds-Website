Event.observe(document, "dom:loaded", function() {
	$$('.product-img-box .product-image-zoom .zoomoviewer_logo').invoke('observe', 'click', function() {
		if(zoomoviewer_popup_type == "popup") {
			zoomoviewer = window.open(zoomoviewer_popup_url+"?image="+zoomoviewer_image, "zoomoviewer", "width="+zoomoviewer_width+",height="+zoomoviewer_height+",left=200,top=100,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
			zoomoviewer.focus();
		} else if(zoomoviewer_popup_type == "lightbox") {
			$('lightbox').style.width		= (parseInt(zoomoviewer_width)+36)+'px';
			$('lightbox').style.height		= (parseInt(zoomoviewer_height)+36)+'px';
			$('lightbox').style.marginLeft	= '-'+((parseInt(zoomoviewer_width)+36)/2)+'px';
			$('lightbox').style.marginTop	= '-'+((parseInt(zoomoviewer_height)+36)/2)+'px';
			$('lightbox').innerHTML			= '<div><a href="#" class="lbAction close" id="close" rel="deactivate"></a></div><br/><iframe src="'+zoomoviewer_popup_url+"?image="+zoomoviewer_image+'" width="'+zoomoviewer_width+'" height="'+zoomoviewer_height+'" frameborder="0" scrolling="no"/>';
		}
	});
	
	var logo_visibility = true;
	$$('.product-img-box .product-image-zoom #image').invoke('observe', 'dblclick', function() {
		if($('image')) {
			if(logo_visibility) {
				$('zoomoviewer_logo').hide();
				logo_visibility = false;
			} else {
				$('zoomoviewer_logo').show();
				logo_visibility = true;
			}
		}
	});
});