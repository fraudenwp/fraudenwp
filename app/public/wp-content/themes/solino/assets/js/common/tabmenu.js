
$(".tab-menu .tab").click(function() {
	$(".tab-menu .tab").removeClass("active").eq($(this).index()).addClass("active");
	$(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");