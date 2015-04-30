		<script src="inc/jquery/jquery-2.1.0.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script-->

		<script src="inc/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="inc/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<script src="inc/jquery.appear.js"></script>
		<script src="inc/retina.min.js"></script>
		<script src="inc/jflickrfeed.min.js"></script>

		<script src="inc/isotope/isotope.pkgd.min.js"></script>
		<script src="inc/isotope/imagesloaded.pkgd.min.js"></script>
		
		<script src="inc/jquery.validate.min.js"></script>
		<script src="inc/locale/messages_es.js"> </script>


		<!-- Main javascript file -->
		<script src="js/script.js"></script>

		<script src="js/bootstrap-ckeditor-fix.js"></script>

		<!-- Wizard -->
		<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>


		<!-- Código para la url limpia al crear o editar contenidos dinámicos -->
		<script>
				$('#titulo').keyup(function(){
				    var ref = normalize($(this).val()).toLowerCase().replace(/[^a-z0-9]+/g,'-');
				    $('#enlace').val(ref);
				});

				var normalize = (function() {
				  var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç", 
				      to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
				      mapping = {};
				 
				  for(var i = 0, j = from.length; i < j; i++ )
				      mapping[ from.charAt( i ) ] = to.charAt( i );
				 
				  return function( str ) {
				      var ret = [];
				      for( var i = 0, j = str.length; i < j; i++ ) {
				          var c = str.charAt( i );
				          if( mapping.hasOwnProperty( str.charAt( i ) ) )
				              ret.push( mapping[ c ] );
				          else
				              ret.push( c );
				      }      
				      return ret.join( '' );
				  }
				 
				})();
		</script>
