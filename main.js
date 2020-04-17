$(document).ready(function() {
	$.getJSON(
    "https://docs.google.com/spreadsheets/feeds/list/1k2DWEXIioffZZWhDDsqm5bDkY9i1mBp6FboKaUdVYKI/od6/public/basic?alt=json",
    function(data){
    console.log(data);
	})
})
