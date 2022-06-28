  <body class="page">
    <div class="uix-wrapper">
        <!-- Header Area
        ============================================= -->      
                <!-- Footer
        ============================================= -->    
    </div>
    <!-- .uix-wrapper end -->
	<script>
	( function( $ ) {
	"use strict";
		$( function() {
			/* 
			 ---------------------------
			 Input Validation 
			 ---------------------------
			 */ 
			$(document).off( 'submit' ).on( 'submit', '#app-my-form', function(e) {
				var $form        = $( this ),
					validationOK = true,
					emailRe      = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm,
					numReg       = /^\d+$/;
				//Radio
				var radioVal = $form.find( '[name="radioname"]:checked' ).val();
				if ( radioVal == '' || typeof radioVal == typeof undefined ) {
					$form.find( '.response' ).html( '<p class="uix-striking-msg uix-striking-msg--danger is-pill"><i class="fa fa-times" aria-hidden="true"></i> This value of radio cannot be left blank.</p>' );
					setTimeout( function(){
						$form.find( '.response' ).html( '' );
					}, 3000 );	
					validationOK = false;
				}
				//Email
				var emailVal = $form.find( '[name="email"]' ).val();
				if ( emailVal != '' && !emailRe.test( emailVal ) && typeof emailVal != typeof undefined ) {
					$form.find( '.response' ).html( '<p class="uix-striking-msg uix-striking-msg--danger is-pill"><i class="fa fa-times" aria-hidden="true"></i> A valid email address.</p>' );
					setTimeout( function(){
						$form.find( '.response' ).html( '' );
					}, 3000 );
					$form.find( '[name="email"]' ).focus();
					validationOK = false;
				}
				//Required Fields
				$form.find( '.required' ).each( function()  {
					if ( $( this ).val() == '' ) {
						var _ft = $( this )
										.closest( '.row' )
										.find( '[class*=col-]' )
										.html();
						if ( _ft.indexOf( '</select>' ) >= 0 ) {
							_ft = _ft.replace(/<select[\s\S]*<\/select>/ig, '' )
									 .replace(/<span\sclass=\"uix-controls\_\_select\-trigger\">[\s\S]*<\/span>/ig, '' );
						}
						var info = _ft.replace(/(&nbsp;|<([^>]+)>|\*)/ig, '' );
						$form.find( '.response' ).html( '<p class="uix-striking-msg uix-striking-msg--danger is-pill"><i class="fa fa-times" aria-hidden="true"></i> "'+info+'" Can not be empty.</p>' );
						setTimeout( function(){
							$form.find( '.response' ).html( '' );
						}, 3000 );
						$( this ).focus();
						validationOK = false;
						//break this loop
						return false;
					}
				});
				//Checkbox
				if ( validationOK && !$form.find( '[name="checkboxname"]' ).get(0).checked ) {
					$form.find( '.response' ).html( '<p class="uix-striking-msg uix-striking-msg--danger is-pill"><i class="fa fa-times" aria-hidden="true"></i> This value of checkbox cannot be left blank.</p>' );
					setTimeout( function(){
						$form.find( '.response' ).html( '' );
					}, 3000 );	
					validationOK = false;
				}
				if ( validationOK ) {
					return true;
				} else {
					return false;
				}
			});  	
		} );
	} ) ( jQuery );	
	</script>
