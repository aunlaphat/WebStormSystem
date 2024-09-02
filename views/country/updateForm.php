<form method="get" action="">

<label>รหัสประเทศ <select name="CID" id=""></label>
    
    <?php foreach($countryList as $c){
    echo"<option value= $c->CID ";
    if($c->CID == $country_ulist->CID)
    {
        echo 'selected="selected"';
    }
    echo"> $c->CID</option>";
    }?>
    </select></label><br>
    
<label>ประเทศ <input type="text" name="Cname"/>  </label><br>

<input type="hidden" name="controller" value="country"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>

</form>