function GetXmlHttpObject(){
	var xmlHttp=null;
	
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlHttp;
}

function adrs(id){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="adrs.php"

	url=url+"?id="+id;
	location.href = url;
}

function stateChangeds(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		console.log(xmlHttp.responseText);
	}
	
}


function additemCart(id){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="functions.php"

	url=url+"?q="+id;
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}

function stateChanged(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("contentmodal").innerHTML=xmlHttp.responseText;
		document.getElementById('cartmod').style.display='block';
		console.log(xmlHttp.responseText);
	}
	
}

function addModal(id,quan,harga,nama){

	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="addtocart.php"

	url=url+"?q="+id+"&&qt="+quan+"&&prc="+harga+"&&nm="+nama;
	console.log(url);
	xmlHttp.onreadystatechange=stateChangedd;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}

function stateChangedd(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		console.log(xmlHttp.responseText);
		alert("Ditambahkan ke keranjang belanja");
		document.getElementById('cartmod').style.display='none';
	}
	
}

function addJasa(nama,harga,qty){

	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="addtocart.php"

	url=url+"?js="+nama+"&&hrg="+harga+"&&qty="+qty;
	
	console.log(url);
	xmlHttp.onreadystatechange=stateChangedj;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);


}
function stateChangedj(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		/*console.log(xmlHttp.responseText);
		document.getElementById('cartmod').style.display='none';*/
		alert("Ditambahkan ke keranjang belanja");
		window.open('grooming.php','_self');
	}
	
}

function kontak(nama,email,pesan){

	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="proseskontak.php"

	url=url+"?nm="+nama+"&&em="+email+"&&msg="+pesan;
	
	console.log(url);
	xmlHttp.onreadystatechange=stateChangedk;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);


}
function stateChangedk(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		/*console.log(xmlHttp.responseText);
		document.getElementById('cartmod').style.display='none';*/
		alert("Terima kasih. Pesan Anda akan kami tanggapi dalam 24 jam");
		window.open('kontak.php','_self');
	}
	
}