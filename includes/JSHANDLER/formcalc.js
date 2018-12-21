function getarea(){
	var area=0;
	var theform= document.forms["jcform"];
	var length= Number(theform.elements["length"].value);
	var width= Number(theform.elements["width"].value);
	area= length*width;
	return area;
}

function getcostcard(type, gsm){
	var costcard=0;
	var theform= document.forms["jcform"];
	var type= theform.elements["somename"];
	var gsm= Number(theform.elements["gsm"].value);

	if(type="" && gsm=0){
		costcard=0;
		return 0;
	}else{
		if(window.XMLHttpRequest){
			xmlhttp= new XMLHttpRequest();
		}else{
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange= function(){
			if(this.readyState==4 && this.status==200){
				costcard=this.responseText;
			}
		};
		xmlhttp.open("GET","getcost.php?q="+type+"r="+gsm,true);
		xmlhttp.send();
	}
	return costcard;
}

var lami=new Array();
lami[0]=0;
lami[1]=28;

function getlam(){
	var lamcost=0;
	var theform= document.forms["jcform"];
	var select= theform.elements["lam"];

	lamcost=lami[select.value];

	return lamcost;
}

function getnocards(){
	var nocards;
	var theform= document.forms["jcform"];
	var number= Number(theform.elements["noc"].value);

	nocards=number;

	return nocards;
}

function calculateTotal(){
	var printcost=0;
	
		var cost1= getarea() * getcostcard();
		var cost2= cost1 + getlam();
		printcost= cost2 * getnocards();
		var divobj= document.getElementById('totalprice');
		divobj.style.display='block';
		divobj.innerHTML="Total Cost ₹"+printcost;
	
}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}