if(window.matchMedia("(max-width: 991px)").matches){
    //Cambia de valor del value del bottom a Close
    document.getElementById("btn_collapseMenuV").value = "Max_width";  

    //Se aplican estilos a menu Vertical
    $(".cnt_elementsMenuV").addClass("width_small_GlobalE");
    $(".cnt_rightGlobal").addClass("width_Big_GlobalE");
    $(".header_global").addClass("width_Big_GlobalE");
    $(".logo_Big").css({"display":"none"});
    $(".logo_Small").css({"display":"block"});
    $(".cnt_imgAvatar").addClass("img_small");

    $(".cnt_imgAvatarPrincipal p").addClass("display_none_GlobalM");        
    $(".cnt_imgAvatarPrincipal .cnt_imgAvatar .circle_status.active").addClass("c_collase");
    $(".cnt_imgAvatarPrincipal nav ul li a.ancla_m").addClass("a_collapse");      
    $(".cnt_imgAvatarPrincipal nav ul li a i.material-icons").addClass("i_collapse");      
    $(".cnt_imgAvatarPrincipal nav ul li a strong").addClass("hover_effect");    

    $("i.material-icons.min_width").addClass("min_scale_GlobalM");
    $("i.material-icons.max_width").addClass("max_scale_GlobalM");
}

if(window.matchMedia("(max-width: 767px)").matches){
    //Cambia de valor del value del bottom a Open        
    document.getElementById("btn_collapseMenuV").value = "Min_width";         

    //Se aplican estilos a menu Vertical
    $(".cnt_elementsMenuV").removeClass("width_small_GlobalE");
    $(".cnt_rightGlobal").removeClass("width_Big_GlobalE");
    $(".header_global").removeClass("width_Big_GlobalE");
    $(".logo_Big").css({"display":"block"});
    $(".logo_Small").css({"display":"none"});        
    $(".cnt_imgAvatar").removeClass("img_small");        

    $(".cnt_imgAvatarPrincipal p").removeClass("display_none_GlobalM");
    $(".cnt_imgAvatarPrincipal .cnt_imgAvatar .circle_status.active").removeClass("c_collase");    
    $(".cnt_imgAvatarPrincipal nav ul li a.ancla_m").removeClass("a_collapse");      
    $(".cnt_imgAvatarPrincipal nav ul li a i.material-icons").removeClass("i_collapse"); 
    $(".cnt_imgAvatarPrincipal nav ul li a strong").removeClass("hover_effect");      

    $("i.material-icons.max_width").removeClass("max_scale_GlobalM");
    $("i.material-icons.min_width").removeClass("min_scale_GlobalM");

}