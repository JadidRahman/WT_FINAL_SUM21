<html>
<script>

   function get(id){
       return document.getElementById(id);
   }
   function loadDoc(){
	   var xhr = new XMLHttpRequest();
	   xhr.open("GET", "profile.php", true);
	   xhr.onreadystatechange = function(){
		   if(this.readystate == 4 && this.ststus == 200){
			   get("demo").innerHTML = this.responseText;
		   }
	   };
	   xhr.send();
	   
   }
</script>
    <body>
	    <button onclick = "loadDoc()">Click Me</button>
		<div id="demo"></div>
	</body>
</html>