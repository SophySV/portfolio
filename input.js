$("#res1").on("click",function(){
	$("#num3").val(+$("#num1").val() + +$("#num2").val())
})
$("#res2").on("click",function(){
	$("#num6").val($("#num4").val() - $("#num5").val())
})
$("#res3").on("click",function(){
	$("#num9").val($("#num7").val() * $("#num8").val())
})
$("#res4").on("click",function(){
	$("#num12").val($("#num10").val() / $("#num11").val())
})
$("#res5").on("click",function(){
	$("#num15").val($("#num13").val() % $("#num14").val())
})
$("#res6").on("click",function(){
	$("#num18").val(Math.pow($("#num16").val(), $("#num17").val()))
})
$("#res7").on("click",function(){
	$("#num19").val(+$("#num19").val()+1)
})
$("#res8").on("click",function(){
	$("#num22").val(+$("#num22").val()-1)
})
$("#res9").on("click",function(){
	$("#log3").val($("#log1").val() && $("#log2").val())
})
$("#res10").on("click",function(){
	$("#log6").val($("#log4").val() || $("#log5").val())
})