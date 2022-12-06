<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body id="pepe">


<style type="text/css">
	body {
		background-repeat: no-repeat;
		background-size: cover;

	}
	#caca{
		position: absolute;
		z-index: 1;
	}
	#output{
		position: absolute;
		z-index: 0;
		width: 100%;
		border-right: 20px;
		margin: -5;
	}
</style>
<img id="output"/>
<div id="caca">
<input type="file" accept="image/*" onchange="loadFile(event)">

<script>
  var imagen ;
  var loadFile = function(event) {
     var reader = new FileReader();
    reader.onload = function(){
     /*var output = document.getElementById('output'); No hace falta*/
     alert("a");
      document.body.style.backgroundImage = 'url('+reader.result+')';
      alert(reader.result);
      alert("b");

      var imagen64=reader.result;
      
      alert("c");
      /*document.write("<img src="+imagen64 +">");*/


      localStorage.setItem('img', reader.result);

      var cat = localStorage.getItem('img');
      alert("cat:"+cat);

    };
    reader.readAsDataURL(event.target.files[0]);
  };
  //localStorage.removeItem('img');
  var cat = localStorage.getItem('img');
      alert("cat:"+cat);
  
</script>

<h3>hAY COSAS</h3>
Hoola, que se cuenta?


</div>
</body>
</html>