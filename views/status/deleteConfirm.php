<?php echo "<br> Are you sure to delete this status <br>
            <br> $status_dlist->staSID $status_dlist->staNSID <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="status"/>
<input type="hidden" name="staSID" value="<?php echo $status_dlist->staSID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>