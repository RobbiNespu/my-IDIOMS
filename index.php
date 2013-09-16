<html>
<title>My Idioms</title>
<script type="text/javascript">

function ajax(cbFunction){
	var req = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("MSXML2.XMLHTTP.3.0");
	var querystring = 'idioms.php';
	req.open("GET", querystring , true);
	req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	req.onreadystatechange = function(){
		if (req.readyState == 4 && req.status == 200){
			if (req.responseText){
			  cbFunction(req.responseText);
			}
		}
	}
	req.send(null);
}
function showResult(str){
	var box = document.getElementById("collection")
	box.innerHTML = str;
	str = str.replace(/esc">/,'> - ').replace(/<[^>]*>/ig,'');
	
}
function collection(){
	ajax(showResult);
}
function initpg(){
	collection();
}


</script>
<style type="text/css">
body{
	background:#000;
	color:#999;
	font-family:Lucida Console, Monotype, Tahoma, Verdana;
	font-size:12px;
	margin:40px;padding:0;
}
#homepage{
	text-align:center;
	width:100%;
}
#myIdioms{
	width:100%;
	padding:20px 0;
}
a{
	color:#999;
	text-decoration:none;
}
.qword{
	margin:0;
	padding:0;
}
.qdesc{
	margin:0;
	padding:0;
	font-size:9px;
	color:#444;
}
</style>
</head>
<body onload="initpg();">
<div id="homepage">
	<div id="myIdioms">
	<p id="collection"></p>
	</div>
</div>
</body>
</html>