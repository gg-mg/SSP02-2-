<?php

echo
"
<ol>
<li>Open table HTML</li>
<li>Table Caption</li>
<li>Table Header Row</li>


";
for ($counter = 1; $counter < 8;$counter++) {
    echo
    "
    <li>Doing something the $counter time will cost me ".$counter*.5."effort</li>
    ";
}
echo
"
</ol>
";
?>
<?php
echo
"
<table>
<caption>CS2623 Weekly Planner: George Gichuki</caption>
";
echo
"
 <tr>
    <th>Day</th>
    <th>Details</th>
    <th>Time</th>
</tr>
";
for ($counter = 1;$counter < 8;$counter++) {
    echo
"
 <tr>
    <td>$counter</td>
    <td>Study for CS2623</td>
    <td> " .$counter*.5." </td>
</tr>
";
}

echo
"
</table>
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/main.css">
    <title>CS2623 Gichuki</title>
</head>
<body>
    
</body>
</html>


