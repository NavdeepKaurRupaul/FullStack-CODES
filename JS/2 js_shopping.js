function addoption(refcategory, refbrands, refprice) {
	//removing previous options
	if (refbrands.length > 0) {
		for (var i = 0; i < 4; i++) {
			//			alert(refbrands[i].value);
			refbrands.remove(0);
			refprice.remove(0);
		}
	}
	if (refcategory.value == "laptop") {
		//adding brands
		var option = document.createElement("option");
		option.text = "Apple MacBook";
		refbrands.appendChild(option);
		option = document.createElement("option");
		option.text = "Dell";
		refbrands.appendChild(option);
		option = document.createElement("option");
		option.text = "HP";
		refbrands.appendChild(option);
		option = document.createElement("option");
		option.text = "Lenovo";
		refbrands.appendChild(option);
		//adding price
		option = document.createElement("option");
		option.text = "100000";
		refprice.appendChild(option);
		option = document.createElement("option");
		option.text = "70000";
		refprice.appendChild(option);
		option = document.createElement("option");
		option.text = "55000";
		refprice.appendChild(option);
		option = document.createElement("option");
		option.text = "60000";
		refprice.appendChild(option);
	} else {
		//adding brands
		var option = document.createElement("option");
		option.text = "Apple";
		refbrands.appendChild(option);
		//		alert("hi");
		option = document.createElement("option");
		option.text = "Samsung";
		refbrands.appendChild(option);
		option = document.createElement("option");
		option.text = "One Plus";
		refbrands.appendChild(option);
		option = document.createElement("option");
		option.text = "Motorola";
		refbrands.appendChild(option);

		//adding price
		option = document.createElement("option");
		option.text = "85000";
		refprice.appendChild(option);
		option = document.createElement("option");
		option.text = "60000";
		refprice.appendChild(option);
		option = document.createElement("option");
		option.text = "40000";
		refprice.appendChild(option);
		option = document.createElement("option");
		option.text = "55000";
		refprice.appendChild(option);
	}
}

function addtocart(refbrand, refprice, refcart, refpricecart, refbill) {
	for (var i = 0; i < 4; i++) {
		if (refbrand.selectedIndex == i) {
			refprice.selectedIndex = i;
			var option = document.createElement("option");
			option.text = refbrand[i].value;
			refcart.appendChild(option);
			var option = document.createElement("option");
			option.text = refprice[i].value;
			refpricecart.appendChild(option);
			//adding amount in bill
			var amount = parseInt(refbill.value);
			if (isNaN(amount)) {
				refbill.value = refprice[i].value;
			} else {
				refbill.value = amount + parseInt(refprice[i].value)
			}
		}
	}
}

function selected_item_price(refcart, refpricecart) {
	for (var i = 0; i < refcart.length; i++) {
		if (refcart.selectedIndex == i) {
			refpricecart.selectedIndex = i;
		}
	}
}

function remove_from_cart(refcart, refprice, refbill) {
	
	var selected_index = refcart.selectedIndex;
	//taking confirmation
	var sure=confirm("You want to cencel the "+refcart[selected_index].value+"?")
	var amount_to_sub = refprice[selected_index].value;
	if(sure){
	refbill.value -= parseInt(amount_to_sub);
	refcart.remove(selected_index);
	refprice.remove(selected_index);
		alert("Canceled Successfully!")
	}
	else{
		alert("Not cenceled")
	}
}

function corresponding_price(refitem, refprice) {
	for (var i = 0; i < refitem.length; i++) {
		if (refitem.selectedIndex == i) {
			refprice.selectedIndex = i;
		}
	}
}
