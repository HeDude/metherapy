$( document ).ready
(
	function()
	{
		var fade_time_unit = 200;
		var fade_time      = 4 * fade_time_unit;
		var i;
		var j;

		$( "#webpage" ).css( "visibility", "visible");
		$( "#home" ).fadeIn( fade_time, "swing" );

		for (i = 0;i < 6; i++)
		{
			$("p#metherapy_menu_text0"+i).fadeOut( 0, "swing");
			$("img#metherapy_menu_foto0"+i ).fadeOut( 0, "swing" );
			$("#metherapy_menu_title0"+i).click
			(
				{active_button: i},
				function ( event )
				{
					$( this ).finish();
					for (j = 0; j < 6; j++)
					{
						if ( j !== event.data.active_button )
						{
							$( "p#metherapy_menu_text0" + j ).fadeOut( 0, "swing" );
							$( "img#metherapy_menu_foto0" + j ).fadeOut( 0, "swing" );
							$( "a#metherapy_menu_title0" + j ).css( { "cursor": "pointer" } );
							$( "a#metherapy_menu_title0" + j ).css( { "color": "white" } );
						};
					};
					$( "p#metherapy_menu_text0" + event.data.active_button ).fadeIn( 0, "swing" );
					$( "img#metherapy_menu_foto0" + event.data.active_button ).fadeIn( 0, "swing" );
					$( "a#metherapy_menu_title0" + event.data.active_button ).css( { "cursor": "not-allowed" } );
					$( "a#metherapy_menu_title0" + event.data.active_button ).css( { "color": "grey" } );
				}
			);
		}
		$( "p#metherapy_menu_text00" ).fadeIn( 0, "swing" );
		$( "img#metherapy_menu_foto00" ).fadeIn( 0, "swing" );
		$( "a#metherapy_menu_title00" ).css( { "cursor": "not-allowed" } );
		$( "a#metherapy_menu_title00" ).css( { "color": "grey" } );
	}
);

/* Scaling function to fit into different devices */
var $el = $("#metherapy_menu_container");
var elWidth = $el.outerWidth();
var $wrapper = $("#scaleable_wrapper");
var scale;
scale = $wrapper.width() / elWidth;
$el.css
(
	{
		transform: "translate(-50%, -50%) " + "scale(" + scale + ")"
	}
);
