<form method="get" action="">

<label>รหัสสถานะ <select name="staSID" id=""></label>
    
    <?php foreach($statusList as $s){
    echo"<option value= $s->staSID ";
    if($s->staSID == $status_ulist->staSID)
    {
        echo 'selected="selected"';
    }
    echo"> $s->staSID</option>";
    }?>
    </select></label><br>
    
<label>สถานะชื่อ <input type="text" name="staNSID"/>  </label><br>

<input type="hidden" name="controller" value="status"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>

</form>
