<?php echo "<br> Are you sure to delete this column <br>
            <br> $column_dlist->COID $column_dlist->COND <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="column"/>
<input type="hidden" name="COID" value="<?php echo $column_dlist->COID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>