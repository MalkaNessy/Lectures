/* <script type="text/javascript"> */
$(document).ready(function() {
	
	
$("#nav .button a").each( function(){console.log("aaa");    
//takes id-attribute from this button
var id=($(this).attr("id"));

//when element with this id hovered... 
$("#"+id).hover(function(){
		$("#nav .button a").removeClass("selected");
		$(this).addClass("selected");
var htmlString1 = $( "#sub" + id).html();
		$("#subnav").html(htmlString1);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
	}
	);
});

/*
	$("#menu0").addClass("selected");
	var htmlString = $( "#submenu0" ).html();
	$("#subnav").html(htmlString);
	
	$("#menu0").hover(function(){
		$(this).addClass("selected");
		
		var htmlString1 = $( "#submenu0" ).html();
		$("#subnav").html(htmlString1);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
			
	});
	
	$("#menu1").hover(function(){
		$(this).addClass("selected");
		
		var htmlString1 = $( "#submenu1" ).html();
		$("#subnav").html(htmlString1);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	
	$("#menu2").hover(function(){
		$(this).addClass("selected");
		$("#menu1").removeClass("selected");
		var htmlString2 = $( "#submenu2" ).html();
		$("#subnav").html(htmlString2);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	$("#menu3").hover(function(){
		$(this).addClass("selected");
		$("#menu1").removeClass("selected");
		var htmlString3 = $( "#submenu3" ).html();
		$("#subnav").html(htmlString3);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	
	$("#menu4").hover(function(){
		$(this).addClass("selected");
		$("#menu1").removeClass("selected");
		var htmlString3 = $( "#submenu4" ).html();
		$("#subnav").html(htmlString3);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	
	$("#menu5").hover(function(){
		$(this).addClass("selected");
		$("#menu1").removeClass("selected");
		var htmlString3 = $( "#submenu5" ).html();
		$("#subnav").html(htmlString3);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	$("#menu6").hover(function(){
		$(this).addClass("selected");
		$("#menu1").removeClass("selected");
		var htmlString3 = $( "#submenu6" ).html();
		$("#subnav").html(htmlString3);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	
	$("#menu7").hover(function(){
		$(this).addClass("selected");
		$("#menu1").removeClass("selected");
		var htmlString3 = $( "#submenu7" ).html();
		$("#subnav").html(htmlString3);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	$("#menu8").hover(function(){
		$(this).addClass("selected");
		$("#menu1").removeClass("selected");
		var htmlString3 = $( "#submenu8" ).html();
		$("#subnav").html(htmlString3);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	$("#menu9").hover(function(){
		$(this).addClass("selected");
		
		var htmlString1 = $( "#submenu9" ).html();
		$("#subnav").html(htmlString1);
		$("#subnav .more ").click(function(){
			$(this).next().slideToggle();
		});
    }, 
		function(){
			if(!($("#subnav").is(":hover"))){
			$(this).removeClass("selected");
			$("#subnav .rem").remove();
			}
	});
	
	$("h3").click(function(){
		
		if (!($(this).hasClass("ground")))
		{$(this).addClass("ground");}
		else $(this).removeClass("ground");
		
        });
		
		
		/* , function(){
    $(this).removeClass("ground");
	}); */
	/* $("#subnav .more ").click(function(){
			$(this).next().slideToggle();
			
		
	}); */
	
});

