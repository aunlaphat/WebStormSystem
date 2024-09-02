<?php echo "<br> Are you sure to delete this storm another <br>
            <br> $nameano_dlist->naID $nameano_dlist->naName <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="name_of_another"/>
<input type="hidden" name="naID" value="<?php echo $nameano_dlist->naID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>