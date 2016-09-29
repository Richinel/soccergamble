var main = function() {
	$('.login_btn_header').click(function() {
    	$('.login').fadeToggle(300);
    });

    $('.register_btn_header').click(function() {
        $('.register').fadeToggle(300);
    })

    $('.login_ul').click(function() {
    	$('.login').fadeToggle(300);
    });

    $('.register_ul').click(function() {
        $('.register').fadeToggle(300);
    });

    $('.logout_btn').click(function() {
        $('.messagebox').fadeToggle(300);
    });

    $('.uitloggen_m').click(function() {
        $('.messagebox').fadeToggle(300);
    });

    $('.profile_btn').click(function() {
        $('.profile').fadeToggle(300);
    });

    $('.mobile_profile').click(function() {
        $('.profile').fadeToggle(300);
    });

    $('.close').click(function() {
    	$('.login').fadeOut(300);
        $('.register').fadeOut(300);
        $('.profile').fadeOut(300);
        $('.messagebox').fadeOut(300);
    });

    $('.close_btn').click(function() {
        $('.messagebox').fadeToggle(300);
    });    

    $('.mnu_btn').click(function() {
        $('.mobile_menu').toggle('slideToggle', 'easeOutQuart', 600);
    });

    /*$('#id01').click(function() {
    	$(this).fadeOut(300);
    });*/

    var modal = document.getElementById("id01");

    window.onclick = function(event) {
    	if (event.target == modal) {
    		modal.style.display = "none";
    	}
    }
    
};

$(document).ready(main);