<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
$keys = array_keys($arrs); 
echo "<table border='1'cellspacing=0 cellpading=0>"; 
echo "<tr>";
echo "<th>Thêm Sinh Viên</th>";
echo "</tr>";
foreach ($keys as $k) {
    echo "<tr>";
    echo "<td>" . $arrs[$k] . "</td>"; 
    echo "</tr>"; 
}
echo "</table>";
?>
