/* Author: Gavin Blair

*/

$(document).ready(function(){
	$("#tweet").attr("href", $("#tweet").attr("href")+"+"+window.location.href);
	$("#percent").keyup(function(){
		var result = (parseFloat($("#percent").val())/100*2799).toFixed(2);
		$("#result>span").text("$"+result);
		
		var thingstobuy = [
			{'name': 'timbits', 'price': 0.15},
			{'name': 'large coffees', 'price': 2.70},
			{'name': 'big macs meals', 'price': 6.75}
		];
		
		for(var i = 0; i < thingstobuy.length; i++) {
			var name = thingstobuy[i].name;
			var price = thingstobuy[i].price;
			var num = Math.round(result/price);
			
			if(num <= 10 || i == thingstobuy.length-1) {
				$(".num").text(num);
				if(num == 1) {
					name = name.slice(0, -1)
				}
				$(".type").text(name);
				$(".cost").text(price);
				break;
			}
		}
		
	});
});





















