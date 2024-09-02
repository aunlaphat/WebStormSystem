<form method="get" action="">

<label>รหัสชุด <select name="COID" id=""></label>
    
    <?php foreach($columnList as $co){
    echo"<option value= $co->COID ";
    if($co->COID == $column_ulist->COID)
    {
        echo 'selected="selected"';
    }
    echo"> $co->COID</option>";
    }?>
    </select></label><br>
    
<label>ชุดในบัญชีรายชื่อ <input type="text" name="COND"/>  </label><br>

<input type="hidden" name="controller" value="column"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>

</form>