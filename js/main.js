$( document ).ready
(
	function()
	{
		var fade_time_unit = 300;
		var fade_time      = 4 * fade_time_unit;
		var i;
		var j;

		$( "#menu" ).fadeOut( 0, "swing" );
		$( "#webpage" ).css( "visibility", "visible");
		$( "#home" ).fadeIn( fade_time, "swing" );

		$( "#popup_message" ).click
		(
			function ( event )
			{
				$( "#popup_message" ).css( "display", "none");
			}
		)

		for (i = 1;i < 6; i++)
		{
			$("p#metherapy_menu_text0"+i).fadeOut( 0, "swing");
			$("img#metherapy_foto0"+i ).fadeOut( 0, "swing" );
			$("#bee_button_0"+i).click
			(
				{active_button: i},
				function ( event )
				{
					$( this ).finish();
					for (j = 1; j < 6; j++)
					{
						if ( j !== event.data.active_button )
						{
							$( "p#metherapy_menu_text0" + j ).fadeOut( fade_time, "swing" );
							$( "img#metherapy_foto0" + j ).fadeOut( fade_time, "swing" );
							$( "img#Letter_W_MeTherapy_0" + j ).attr( 'src', "images/Letter_W_MeTherapy.svg" );
							$( "a#bee_button_0" + j ).css( { "cursor": "pointer" } );
						};
					};
					$( "p#metherapy_menu_text0" + event.data.active_button ).fadeIn( fade_time, "swing" );
					$( "img#metherapy_foto0" + event.data.active_button ).fadeIn( fade_time, "swing" );
					$( "img#Letter_W_MeTherapy_0" + event.data.active_button ).attr( 'src', "images/Letter_W_MeTherapy_Selected.svg" );
					$( "a#bee_button_0" + event.data.active_button ).css( { "cursor": "not-allowed" } );
				}
			);
		}
		$( "p#metherapy_menu_text01" ).fadeIn( fade_time, "swing" );
		$( "img#metherapy_foto01" ).fadeIn( fade_time, "swing" );
		$( "img#Letter_W_MeTherapy_01" ).attr( 'src', "images/Letter_W_MeTherapy_Selected.svg" );
		$( "a#bee_button_01" ).css( { "cursor": "not-allowed" } );
	}
);
