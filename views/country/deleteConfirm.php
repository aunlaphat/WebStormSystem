<?php echo "<br> Are you sure to delete this country <br>
            <br> $country_dlist->CID $country_dlist->Cname <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="country"/>
<input type="hidden" name="CID" value="<?php echo $country_dlist->CID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>