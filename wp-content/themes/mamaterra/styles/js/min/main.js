(function($) {/* js/accordion.js */

	$(window).load(function(){
		$('.accordion .accordion-toggle').click(function(){
    		$(this).toggleClass('clicked');

    	});
	});
	
/* js/animations.js */

  function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };

  $(document).ready(function(){
    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });
  });
/* js/buttons.js */
/* js/equalheightelements.js */

equalheight = function(container){
var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.equalheightcontainer .equalheight');
});


$(window).resize(function(){
  equalheight('.equalheightcontainer .equalheight');
});
/* js/fonts.js */
(function($) {
	$(document).ready(function() {
    function new_map( $el ) {
        var $markers = $el.find('.marker');

        var args = {
            zoom		: 16,
            center		: new google.maps.LatLng(0, 0),
            mapTypeId	: google.maps.MapTypeId.ROADMAP,
            scrollwheel	: true,
            draggable: true,
            streetViewControl : false,
            zoomControl : true,
            mapTypeControl: false,
            draggableCursor: 'move'
        };


        // create map
        var map = new google.maps.Map( $el[0], args);

        // add a markers reference
        map.markers = [];

        // add markers
        $markers.each(function(){
            add_marker( $(this), map );
        });

        // center map
        center_map( map );

        google.maps.event.addListenerOnce(map,"projection_changed", function() {
            recenter_map( map );
        });

        google.maps.event.addDomListener(window, "resize", function() {
            center_map( map );
            recenter_map( map );

        });

        google.maps.event.addListener(map,"click", function(e) {
            var loc = $('.time-place-container > a').attr('href');
            console.log(loc);
            window.open( loc ,'_blank');
        });

        var mapStyles = [
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            }
        ];

        var mapType = new google.maps.StyledMapType(mapStyles);
        map.mapTypes.set('mapStyle', mapType);
        map.setMapTypeId('mapStyle');

        // return
        return map;
    }

    function add_marker( $marker, map ) {
       var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
        var marker = new google.maps.Marker({
            position	: latlng,
            map			: map,
            //visible: false
        });

         map.markers.push( marker );
    }

    function center_map( map ) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){

            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            bounds.extend( latlng );

        });

        // only 1 marker?
        if( map.markers.length == 1 )
        {
            // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 16 );
        }
        else
        {
            // fit to bounds
            map.fitBounds( bounds );
        }


    }

    function recenter_map( map ) {
        if($(window).width() <= 750 && $(window).width() > 550 ) {
	        var offsety = 0;
	        var offsetx = 100;
	        var latlng =  map.getCenter();
	
	        var point1 = map.getProjection().fromLatLngToPoint(
	            (latlng instanceof google.maps.LatLng) ? latlng : map.getCenter()
	        );
	        var point2 = new google.maps.Point(
	            ( (typeof(offsetx) == 'number' ? offsetx : 0) / Math.pow(2, map.getZoom()) ) || 0,
	            ( (typeof(offsety) == 'number' ? offsety : 0) / Math.pow(2, map.getZoom()) ) || 0
	        );
	        map.setCenter(map.getProjection().fromPointToLatLng(new google.maps.Point(
	            point1.x - point2.x,
	            point1.y + point2.y
	        )));
        }
    }


    var map = null;

    $(document).ready(function(){
        $('.acf-map').each(function(){
            // create map
            map = new_map( $(this) );
        });
    });


	 });
})( jQuery );


/* js/full-width-hero.js */
/* js/header.js */

(function($) {
	$(document).ready(function() {
	    
	    $(window).scroll(function() {
		    var scrolledHeight = 200;
		    if ($(window).width() >= 1000) {
                if ($(window).scrollTop() > scrolledHeight) {
                    $('body').addClass('scrolled');
                }
                else {
                    $('body').removeClass('scrolled');
                }
            }
		 
		 });
	 }); //end document ready
})( jQuery );

/* js/links.js */

/* js/modal.js */

(function($) {
    
    $(document).ready(function() {

    	$(".pop-it-up").on("click", function(){
    	  $(".mask").addClass("active");
    	});
    	
    	
    	function closeModal(){
    	  $(".mask").removeClass("active");
    	}
    	
    	
    	$(".close, .mask").on("click", function(){
    	  closeModal();
    	});
    	
    	$(document).keyup(function(e) {
    	  if (e.keyCode == 27) {
    	    closeModal();
    	  }
    	});
    });

})( jQuery );

/* js/modernizr.js */

/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-csscalc-cssvhunit-cssvwunit-flexbox-flexwrap-setclasses !*/
!function(e,n,t){function r(e,n){return typeof e===n}function s(){var e,n,t,s,o,i,a;for(var l in w)if(w.hasOwnProperty(l)){if(e=[],n=w[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(s=r(n.fn,"function")?n.fn():n.fn,o=0;o<e.length;o++)i=e[o],a=i.split("."),1===a.length?Modernizr[a[0]]=s:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=s),g.push((s?"":"no-")+a.join("-"))}}function o(e){var n=x.className,t=Modernizr._config.classPrefix||"";if(S&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),S?x.className.baseVal=n:x.className=n)}function i(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):S?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function a(){var e=n.body;return e||(e=i(S?"svg":"body"),e.fake=!0),e}function l(e,t,r,s){var o,l,f,u,d="modernizr",p=i("div"),c=a();if(parseInt(r,10))for(;r--;)f=i("div"),f.id=s?s[r]:d+(r+1),p.appendChild(f);return o=i("style"),o.type="text/css",o.id="s"+d,(c.fake?c:p).appendChild(o),c.appendChild(p),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(n.createTextNode(e)),p.id=d,c.fake&&(c.style.background="",c.style.overflow="hidden",u=x.style.overflow,x.style.overflow="hidden",x.appendChild(c)),l=t(p,e),c.fake?(c.parentNode.removeChild(c),x.style.overflow=u,x.offsetHeight):p.parentNode.removeChild(p),!!l}function f(e,n){return!!~(""+e).indexOf(n)}function u(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function d(e,n){return function(){return e.apply(n,arguments)}}function p(e,n,t){var s;for(var o in e)if(e[o]in n)return t===!1?e[o]:(s=n[e[o]],r(s,"function")?d(s,t||n):s);return!1}function c(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(n,r){var s=n.length;if("CSS"in e&&"supports"in e.CSS){for(;s--;)if(e.CSS.supports(c(n[s]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var o=[];s--;)o.push("("+c(n[s])+":"+r+")");return o=o.join(" or "),l("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function h(e,n,s,o){function a(){d&&(delete N.style,delete N.modElem)}if(o=r(o,"undefined")?!1:o,!r(s,"undefined")){var l=m(e,s);if(!r(l,"undefined"))return l}for(var d,p,c,h,v,y=["modernizr","tspan","samp"];!N.style&&y.length;)d=!0,N.modElem=i(y.shift()),N.style=N.modElem.style;for(c=e.length,p=0;c>p;p++)if(h=e[p],v=N.style[h],f(h,"-")&&(h=u(h)),N.style[h]!==t){if(o||r(s,"undefined"))return a(),"pfx"==n?h:!0;try{N.style[h]=s}catch(g){}if(N.style[h]!=v)return a(),"pfx"==n?h:!0}return a(),!1}function v(e,n,t,s,o){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+z.join(i+" ")+i).split(" ");return r(n,"string")||r(n,"undefined")?h(a,n,s,o):(a=(e+" "+P.join(i+" ")+i).split(" "),p(a,n,t))}function y(e,n,r){return v(e,t,t,n,r)}var g=[],w=[],C={_version:"3.3.1",_config:{enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){w.push({name:e,fn:n,options:t})},addAsyncTest:function(e){w.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=C,Modernizr=new Modernizr;var x=n.documentElement,S="svg"===x.nodeName.toLowerCase(),_=C._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];C._prefixes=_,Modernizr.addTest("csscalc",function(){var e="width:",n="calc(10px);",t=i("a");return t.style.cssText=e+_.join(n+e),!!t.style.length});var b=C.testStyles=l;b("#modernizr { height: 50vh; }",function(n){var t=parseInt(e.innerHeight/2,10),r=parseInt((e.getComputedStyle?getComputedStyle(n,null):n.currentStyle).height,10);Modernizr.addTest("cssvhunit",r==t)}),b("#modernizr { width: 50vw; }",function(n){var t=parseInt(e.innerWidth/2,10),r=parseInt((e.getComputedStyle?getComputedStyle(n,null):n.currentStyle).width,10);Modernizr.addTest("cssvwunit",r==t)});var T="Moz O ms Webkit",z=C._config.usePrefixes?T.split(" "):[];C._cssomPrefixes=z;var P=C._config.usePrefixes?T.toLowerCase().split(" "):[];C._domPrefixes=P;var E={elem:i("modernizr")};Modernizr._q.push(function(){delete E.elem});var N={style:E.elem.style};Modernizr._q.unshift(function(){delete N.style}),C.testAllProps=v,C.testAllProps=y,Modernizr.addTest("flexbox",y("flexBasis","1px",!0)),Modernizr.addTest("flexwrap",y("flexWrap","wrap",!0)),s(),o(g),delete C.addTest,delete C.addAsyncTest;for(var j=0;j<Modernizr._q.length;j++)Modernizr._q[j]();e.Modernizr=Modernizr}(window,document);})( jQuery );