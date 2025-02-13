
<table border=1px width=100%>
    <tr>
        <th>User Name</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
<?php

#open 
#read
#close
// $content=file_get_contents('trainee.txt');
$lines=file('trainee.txt');
foreach ($lines as $line)
{
  explode($line,',');
    echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>link update link delere</td>
    </tr>";
}
?>
</table>