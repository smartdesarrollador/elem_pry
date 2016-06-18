<?php

header ('content-type:application/vnd.ms-excel');
header('content-Disposition:attachment; filename-archivo.xls');
header('pragma: no-cache');
header("Expires:0");
echo "<table border=1>\n";
echo "</tr>\n";
echo "<th>nombre</th>\n";
echo "<th>email</th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td><font color-green>manual gomez</font></td>\n";
echo "<td>manuel@gomez.com</td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td><font color=red>fatima sanchez</font></td>\n";
echo "<td>fsanchez@gomez.com</td>\n";
echo "</tr>\n";
echo "</table>\n";
?>