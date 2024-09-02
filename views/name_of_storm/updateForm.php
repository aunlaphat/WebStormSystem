<form method="get" action="">

<label>รหัสพายุ <select name="SID" id=""></label>
    
    <?php foreach($Nameofstorm_list as $namestorm){
    echo"<option value= $namestorm->SID ";
    if($namestorm->SID == $nameofstorm_ulist->SID)
    {
        echo 'selected="selected"';
    }
    echo"> $namestorm->SID</option>";
    }?>
    </select></label><br>

<label>ประเทศ <select name="CID" id=""></label>
    
    <?php foreach($Country_list as $c){
    echo"<option value= $c->CID ";
    if($c->CID == $country_ulist->CID)
    {
        echo 'selected="selected"';
    }
    echo"> $c->Cname</option>";
    }?>
    </select></label><br>

<label>ชุดในบัญชีรายชื่อ <select name="COID" id=""></label>
    
    <?php foreach($Column_list as $column){
    echo"<option value= $column->COID ";
    if($column->COID == $column_ulist->COID)
    {
        echo 'selected="selected"';
    }
    echo"> $column->COND</option>";
    }?>
    </select></label><br>

<label>ชื่อพายุ <input type="text" name="Sname"/> </label><br>
<label>ชื่อภาษาอังกฤษ <input type="text" name="SEname"/> </label><br>
<label>ความหมาย <input type="text" name="SM"/> </label><br>

<label>ชื่อทดแทน <select name="naID" id=""></label>
    
    <?php foreach($Nameano_list as $nameano){
    echo"<option value= $nameano->naID ";
    if($nameano->naID == $nameano_ulist->naID)
    {
        echo 'selected="selected"';
    }
    echo"> $nameano->naName</option>";
    }?>
    </select></label><br>

<label>สถานะชื่อ <select name="staSID" id=""></label>
    
    <?php foreach($Status_list as $sta){
    echo"<option value= $sta->staSID ";
    if($sta->staSID == $status_ulist->staSID)
    {
        echo 'selected="selected"';
    }
    echo"> $sta->staNSID</option>";
    }?>
    </select></label><br>

<label>ปีที่เริ่มใช้ชื่อ <input type="text" name="SYS"/>   *ใช้ปีค.ศ.*</label><br>
<label>ปีที่ชื่อถูกถอดถอน <input type="text" name="SYE"/>   *ใช้ปีค.ศ.*</label><br>

<input type="hidden" name="controller" value="name_of_storm"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Save</button>

</form>