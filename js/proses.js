function GetXmlHttpObject(){
	var xmlHttp=null;
	
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlHttp;
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
	/*document.getElementById('id01').style.display='block'*/
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
	/*document.getElementById('id01').style.display='block'*/
}

function stateChangedd(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		console.log(xmlHttp.responseText);
		document.getElementById('cartmod').style.display='none';
	}
	
}