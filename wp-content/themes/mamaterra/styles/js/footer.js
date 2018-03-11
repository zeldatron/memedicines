(function($) {
	$(document).ready(function() {
    function new_map( $el ) {
        var $markers = $el.find('.marker');

        var args = {
            zoom		: 16,
            center		: new google.maps.LatLng(0, 0),
            mapTypeId	: google.maps.MapTypeId.ROADMAP,
            scrollwheel	: false,
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
        
         var image = {
          url: "/wp-content/themes/mamaterra/styles/img/leaf.png",
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(61, 70),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(40, 35)
        };
        
        
        var marker = new google.maps.Marker({
            position	: latlng,
            icon 		: image,
            map			: map
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

