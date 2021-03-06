var main = function() {
	$('.login_btn_header').click(function() {
    	$('.login').fadeToggle(150);
    });

    $('.register_btn_header').click(function() {
        $('.register').fadeToggle(150);
    })

    $('.login_ul').click(function() {
    	$('.login').fadeToggle(150);
    });

    $('.register_ul').click(function() {
        $('.register').fadeToggle(150);
    });

    $('.logout_btn').click(function() {
        $('.lg_box').fadeToggle(150);
    });

    $('.uitloggen_m').click(function() {
        $('.lg_box').fadeToggle(150);
    });

    $('.add_faq').click(function() {
        $('.af').fadeToggle(150);
    });

    $('.profile_btn').click(function() {
        $('.profile').fadeToggle(150);
    });

    $('.mobile_profile').click(function() {
        $('.profile').fadeToggle(150);
    });

    $('.search, .search_btn').click(function() {
        $('.search_modal').fadeToggle(150);
    });

    $('.close').click(function() {
    	$('.login').fadeOut(150);
        $('.register').fadeOut(150);
        $('.profile').fadeOut(150);
        $('.messagebox').fadeOut(150);
        $('.search_modal').fadeOut(150);
    });

    $('.close_btn').click(function() {
        $('.messagebox').fadeToggle(150);
    });    

    $('.mnu_btn').click(function() {
        $('.mobile_menu').toggle('slideToggle', 'easeOutQuart', 600);
    });

    /*$('#id01').click(function() {
    	$(this).fadeOut(300);
    });*/

    var modal = document.getElementById("id01");
    var modal2 = document.getElementById("id02");

    window.onclick = function(event) {
    	if (event.target == modal) {
    		modal.style.display = "none";
    	}
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
    
};

$(document).ready(main);