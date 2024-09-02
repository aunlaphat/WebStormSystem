<?php echo "<br> Are you sure to delete this name of storm <br>
            <br> $nameofstorm_dlist->SID $nameofstorm_dlist->Sname <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="name_of_storm"/>
<input type="hidden" name="SID" value="<?php echo $nameofstorm_dlist->SID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>