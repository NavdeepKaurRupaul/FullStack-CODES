function check(ref, refi) {
	if (document.querySelector("#units").value == "") {
		document.querySelector("#units").style.backgroundColor = "white";
		ref.checked = false;
		alert("ADD UNITS");
		document.querySelector("#units").focus();
		return;
	}
	refi.disabled = false;
	refi.style.backgroundColor = "#f7f397";
	refi.focus();
	document.getElementById("comdis").disabled=false;
	document.getElementById("resdis").disabled=false;
}

function bill(items, totalbill, tb) {
	var x = items.id;
	if (x == "ac")
		totalbill.value = 100 * items.value;
	else if (x == "cooler")
		totalbill.value = 70 * items.value;
	else if (x == "fan")
		totalbill.value = 50 * items.value;

	var x = parseInt(totalbill.value);
	var y = parseInt(tb.value);
	var u =parseInt(document.getElementById("ub").value);
	if (isNaN(y))
		tb.value = x;
	else
		tb.value = x + y ;
}

function unitsbill(thisv, ub) {
	ub.value = thisv * 5;
	document.getElementById("tb").value=ub.value;
}

function finddis(ref, tb, dis) {
	var getdistype = ref.id;
	if (getdistype == "comdis")
		dis.value = tb.value * 10 / 100;
	else
		dis.value = tb.value * 20 / 100;

	var tbv = parseInt( document.getElementById("tb").value);
//	alert(tbv);
	
	var disv=parseInt(dis.value);
	var tbv=parseInt(tb.value);
	document.getElementById("tbad").value=tbv-disv;
	
}
