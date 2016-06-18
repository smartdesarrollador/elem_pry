<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	
	<title>Untitled 3</title>
	
	<style type="text/css">
	#descripcion{
		border: 5px outset blue;
		
	}
	
	
	</style>
</head>

<body>

 <form>
 <label for="nombre">nombre del producto  </label>
 <input type="text" id="nombre" name="nombre">
 <br>
 <label for="descr">descripcion  del producto</label> 
 <textarea id="descripcion" name="descripcion" cols="38" rows="6"> escribe</textarea>
 <hr>
 <label for="so">sistemas operativos</label><br>
 <select id="so" name="so">
   <option value="" selected="selected"  >--selecciona--</option>
   <option value="windows">windows</option>
   <option value="linux">linux</option>
   <option value="mac">mac</option>
   <option value="otros">otros</option>
 
 </select><br>
 
 <label for="so2">sistemas operativos 2</label><br>
  <select id="so2" name="so2" size="5">
   <option value="" selected="selected"  >--selecciona--</option>
   <option value="windows">windows</option>
   <option value="linux">linux</option>
   <option value="mac">mac</option>
   <option value="otros">otros</option>
 
 </select>
 
 </select><br>
 
 <label for="so3">sistemas operativos 3</label><br>
  <select id="so3" name="so3" size="5" multiple="multiple">
        <option value="" selected="selected"  >--selecciona--</option>
        <option value="windows">windows</option>
        <option value="linux">linux</option>
        <option value="mac">mac</option>
        <option value="otros">otros</option>
 
 </select>
 
 
 
 </form>

</body>
</html>