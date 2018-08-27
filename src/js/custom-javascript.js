console.log("HERE");
jQuery( document ).ready(function() {
    console.log( "ready!" );
    
	var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        //sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
        sectionsColor: ['lightgreen', '#1BBC9B', '#7E8F7C'],
        css3: true
    });

});


