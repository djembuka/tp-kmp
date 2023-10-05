$( function() {
  
  $( '.b-footer__form' ).submit( function(e) {
    e.preventDefault();
    
    var $form = $( this );
    
    $.ajax({
      url: $form.attr( 'action' ),
      method: $form.attr( 'method' ),
      dataType: 'json',
      data: $form.serialize(),
      success: function( data ) {
        if ( data.STATUS === 'Y' ) {
          console.log( data.MESSAGE );
        }
      },
      error: function() {}
    });
  });
  
});