<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kavita's Portfolio</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="../js/jquery-photowall.js"></script> 
<link rel="prefetch" href="http://pitchedhigh.com/portfolio/view/">
<style type="text/css"> 
/* <!-- include jquery-photowall.css --> */
<?php readfile("../css/jquery-photowall.css"); ?>
html,body {
	background:#ffffcc;
}

img {
	padding: 4px;
}
#gallery {

}

#gallery img {
	-webkit-transform: none;
	-moz-transform: none;
}

#gallery img.even {
	-webkit-transform: rotate(1deg);
	-moz-transform: rotate(1deg);
}

#gallery img.third  {
	-webkit-transform: rotate(-1deg);
	-moz-transform: rotate(-1deg);
}

#gallery img.fifth {
	-webkit-transform: rotate(2deg);
	-moz-transform: rotate(2deg);
}

* {
   padding:0;
   margin: 0;
   outline: none !important; 
}


a {
	text-decoration: none;
	color: #000;
}

a:hover > #logo {
	opacity: 1;
	-webkit-transform: rotate(12deg);
	-moz-transform: rotate(12deg);
}

#logo {
	position: fixed;
	top: 48pt;
	left: 14pt;
	opacity: 0.3;
}


</style>
<script type="text/javascript">
/* <!-- include thumbnails.js --> */
<?php readfile("thumbnails.js"); ?>
$(document).ready(function(){
    PhotoWall.init({
        el:                 '#gallery'               // Gallery element
        ,zoom:              true                     // Use zoom
        ,zoomAction:        'mouseenter'             // Zoom on action
        ,zoomTimeout:       500                      // Timeout before zoom
        ,zoomDuration:      100                      // Zoom duration time
        ,zoomImageBorder:   5                         // Zoomed image border size 
        ,showBox:           true                     // Enavle fullscreen mode
        ,showBoxSocial:     true                     // Show social buttons
        ,padding:           5                        // padding between images in gallery
        ,lineMaxHeight:     240                      // Max set height of pictures line
        ,lineMaxHeightDynamic: true                  // Dynamic lineMaxHeight. If set to True,
                                                     // then line height will be changing on 
                                                     // resize, coressponding to 
                                                     // baseScreenHeight param
        ,baseScreenHeight:  960                      // Base screen size from wich calculating dynamic lineMaxHeight  
    });

	(function(data) {
		    var photos = {}
	        for(var i in data) {
		        var e     = data[i];
				var id    = i;
		        var t1h   = e.h;
		        var t1w   = e.w;
				var	cdn   = "";
				if(location.host.indexOf("pitchedhigh") !== -1) {
					cdn   = "http://cdn" + (i % 4) +".pitchedhigh.com/portfolio/";
				}
		        var t1src = cdn+escape(e.thumbnail);
		        
		        var t2w   = Math.round(t1w * 1.5);
		        var t2h   = Math.round(t1h * 1.5);

		        var t2src = t1src;
	            
	            var bsrc  = "view/?file="+escape("../"+e.thumbnail.replace(".png", ".pdf"));
	            var bw    = 0;			
	            var bh    = 0;
		        photos[id] = {id:id,img:bsrc,width:bw,height:bh,th:{src:t1src,width:t1w,height:t1h,zoom_src:t2src,zoom_factor:1.5}};
	        }	
		    PhotoWall.load(photos);
	 })(thumbnails);
	$("a").attr("target", "_blank");
	$("img.pw-zoom").each(function(i) {
		if(i > 0) {
			if(i%2 == 0) { $(this).addClass("even");}
			if(i%3 == 0) { $(this).addClass("third"); }
			if(i%5 == 0) { $(this).addClass("fifth"); }
		}
	});
});
</script> 
</head> 
<body> 
<div id="gallery" style="position: absolute; left:10%; right: 10%; top: 8%;"> 
	<div class="body"> 
	</div> 
</div> 
<a href="/"><img id="logo" src="/images/do-unto.png" width="150px" alt="Kavita Srinivasan"/></a>
</body> 
</html>
