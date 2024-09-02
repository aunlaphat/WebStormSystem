<form method="get" action="">

<label>รหัสชื่อทดแทน <select name="naID" id=""></label>
    
    <?php foreach($nameanoList as $na){
    echo"<option value= $na->naID ";
    if($na->naID == $nameano_ulist->naID)
    {
        echo 'selected="selected"';
    }
    echo"> $na->naID</option>";
    }?>
    </select></label><br>
    
<label>ชื่อทดแทน <input type="text" name="naName"/>  </label><br>

<input type="hidden" name="controller" value="name_of_another"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>

</form>