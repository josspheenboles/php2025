<?php
if(!isset($_POST['btnreg']))
{
?>
<form action='add.php'  method=post>
    <label>Username:</label>
    <input type=text name='uname'/>
</br>
    <label>Password:</label>
    <input type=password name='upass'/>
   
</br>
    <input type=submit name=btnreg value='Register'/>
</form>

<?php
}
else
{
    print_r($_POST);
}
?>