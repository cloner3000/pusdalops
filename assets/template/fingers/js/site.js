function setSiteURL() { 

	var server = window.location.host;

	window.site = "http://"+server+"/pusdalops/"; 

} 



$(document).ready( function() {

	setSiteURL();

});