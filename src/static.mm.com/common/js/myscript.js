$(document).ready(function(){	
	//build dropdown
	$("<select />").appendTo("nav#main_menu div");
	
	// Create default option "Go to..."
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "请选择分类"
	}).appendTo("nav#main_menu select");	
	
	// Populate dropdowns with the first menu items
	$("nav#main_menu li a").each(function() {
	 	var el = $(this);
	 	$("<option />", {
	     	"value"   : el.attr("href"),
	    	"text"    : el.text()
	 	}).appendTo("nav#main_menu select");
	});
	
	//make responsive dropdown menu actually work			
  	$("nav#main_menu select").change(function() {
    	window.location = $(this).find("option:selected").val();
  	});
	
	//Iframe transparent
	$("iframe").each(function(){
		var ifr_source = $(this).attr('src');
		var wmode = "wmode=transparent";
		if(ifr_source.indexOf('?') != -1) {
		var getQString = ifr_source.split('?');
		var oldString = getQString[1];
		var newString = getQString[0];
		$(this).attr('src',newString+'?'+wmode+'&'+oldString);
		}
		else $(this).attr('src',ifr_source+'?'+wmode);
	});
			
	//Twitter Setup
	$(".tweet_block").tweet({
	  join_text: "auto",
	  username: "envato",
	  avatar_size: 0,
	  count: 3,
	  auto_join_text_default: "",
	  auto_join_text_ed: "",
	  auto_join_text_ing: "",
	  auto_join_text_reply: "",
	  auto_join_text_url: "",
	  loading_text: "loading tweets..."
	});	
	
	//Flickr Integration
    $.getJSON(FOOT_JSON_URL + '?jsonpCallback=?', function(data){
        if(data.code == 200) {
            $.each(data.data, function (i, item) {
                if (i <= 11) { // <— change this number to display more or less images
                    var imgSrc = IMG_URL + JSON.parse(item.img)[0];

                    $("<img/>").attr("src", imgSrc).appendTo(".FlickrImages ul")
                        .wrap("<li><a href='" + DETAIL_URL + '/' + item.id +"' target='_blank' title='"+ item.title.substring(0,item.title.indexOf('(')) +"'></a></li>");
                }
            });
        }
    });


    /*$.ajax({
        type: 'get',
        url: FOOT_JSON_URL,
        dataType: 'jsonp',
        success: function (data, textStatus) {
            if(data.code == 200) {
                $.each(data.data, function (i, item) {
                    if (i <= 11) { // <— change this number to display more or less images
                        var imgSrc = IMG_URL + JSON.parse(item.img)[0];

                        $("<img/>").attr("src", imgSrc).appendTo(".FlickrImages ul")
                            .wrap("<li><a href='" + DETAIL_URL + '/' + item.id +"' target='_blank' title='"+ item.title.substring(0,item.title.indexOf('(')) +"'></a></li>");
                    }
                });
            }
        },
        error:function(){
            console.log('test_error');
        }

    });*/
	
	//Tooltip
	$('.follow_us a').tooltip();
	
	//PrettyPhoto
	$("a[rel^='prettyPhoto']").prettyPhoto();
	
	//Image hover
	$(".hover_img").live('mouseover',function(){
			var info=$(this).find("img");
			info.stop().animate({opacity:0.2},300);
			$(".preloader").css({'background':'none'});
		}
	);
	$(".hover_img").live('mouseout',function(){
			var info=$(this).find("img");
			info.stop().animate({opacity:1},300);
			$(".preloader").css({'background':'none'});
		}
	);
	
	
							
});	