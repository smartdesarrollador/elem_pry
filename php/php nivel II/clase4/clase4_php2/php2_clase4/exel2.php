<?php
  header("Content-type:application/vnd.ms-excel");
  header("Expires:0");
  header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
?>

<html>

<head>
	

	<title>hojas de excel</title>
</head>

<body>
<table width="200" border="1" cellpadding="2" cellspacing="0">
   <tr align="center" bgcolor="#ffff00">
      <td colspan="2"><font face="arial"><strong>articulo</strong></font></td>
   </tr>
   <tr >
     <td width="155" align="right" ><font size="4" face="times new roman" ><em>manzanas:</em></font></td> 
	 <td width="31" align="left" bgcolor="pink" ><font color="red" >5</font></td>  
   </tr>
   <tr>
     <td align="right" ><font size="4" face="arial"><em>naranja:</em></font></td>
     <td align="left" bgcolor="pink" ><font color="#blue" >15</font></td>
   </tr>
   <tr>
      <td align="right" >total</td>
      <td align="left" > <font color="blue" size="5" face="arial"><strong>=SUMA(B2:B3)</strong></font></td>
   </tr>

</table>



</body>
</html>