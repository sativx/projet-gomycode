/*Main Page(platform) JS*/
/*initialisation AOS*/
AOS.init();

$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});

/*var accr=localStorage.getItem("acc"); 

if  (accr=="admin"){
	$('#homeSubmenu').hide();	
}*/