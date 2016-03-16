
$(document).ready(function() {
	
	$('#idFr').click(function(event) 
	{
		$.post("/../sharme_frame/connexion/setLanguage", {langId: 'fr'},
		function(data){
			$('#main').append(data);
			window.location.reload();
		}
		);
		return false;
   });
	$('#idEn').click(function(event) 
	{
		$.post("/../sharme_frame/connexion/setLanguage", {langId: 'en'},
		function(data){
			$('#main').append(data);
			window.location.reload();
		}
		);
		return false;
   });
});
