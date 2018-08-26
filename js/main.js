$(document).ready
(
	function()
	{
		var fade_time_unit = 500;
		var fade_time      = 4 * fade_time_unit;
		var i;
		var j;

		for (i = 1;i < 6; i++)
		{
			$("p#bee_menu_text_0"+i).fadeOut(0, "swing");
		    $("img#bee_foto_meTherapy_0"+i ).fadeOut( 0, "swing" );
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
							$( "p#bee_menu_text_0" + j ).fadeOut( fade_time, "swing" );
							$( "img#bee_foto_meTherapy_0" + j ).fadeOut( fade_time, "swing" );
							$( "img#Letter_W_MeTherapy_0" + j ).attr( 'src', "images/Letter_W_MeTherapy.svg" );
					        $( "a#bee_button_0" + j ).css( { "cursor": "pointer" } );
						};
					};
					$( "p#bee_menu_text_0" + event.data.active_button ).fadeIn( fade_time, "swing" );
					$( "img#bee_foto_meTherapy_0" + event.data.active_button ).fadeIn( fade_time, "swing" );
				    $( "img#Letter_W_MeTherapy_0" + event.data.active_button ).attr( 'src', "images/Letter_W_MeTherapy_Selected.svg" );
					$( "a#bee_button_0" + event.data.active_button ).css( { "cursor": "not-allowed" } );
				}
			);
		}
		$( "p#bee_menu_text_01" ).fadeIn( fade_time, "swing" );
		$( "img#Letter_W_MeTherapy_01" ).attr( 'src', "images/Letter_W_MeTherapy_Selected.svg" );
		$( "a#bee_button_01" ).css( { "cursor": "not-allowed" } );
	}
);
