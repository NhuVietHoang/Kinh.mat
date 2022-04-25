$(document).ready(function(){
	var x=0;
	$('#right').click(()=>{
		if(x<-1000){
			$("#vitri").animate({left:"0px"},500);
			$('#vitri').css("left",0);
			x=0;

		}
		else{
			x=x-1000;
			$("#vitri").animate({left:x},500);
			$('#vitri').css("left",x);
		}
			
	})
	$('#left').click(()=>{
		if(x>=0){
			$("#vitri").animate({left:"-2000px"}, 500);
			$('#vitri').css("left",-2000);
			x=-2000;
		}
		else{
			x=x+1000;
			$("#vitri").animate({left:x}, 500);
			$('#vitri').css("left",x);
		}
	})
})