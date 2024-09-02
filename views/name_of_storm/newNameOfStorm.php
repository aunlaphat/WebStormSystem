
<form method="get" action="">

<label>รหัสพายุ <input type="text" name="SID"/>  *put S before num ex. S01,S02...*</label><br>

<label>ประเทศ <select name="CID">
<?php 
        foreach($country_list as $country)
        { echo "<option value = $country->CID > $country->Cname </option>"; }
?>
</select></label><br>

<label>ชุดในบัญชีรายชื่อ <select name="COID">
<?php 
        foreach($column_list as $column)
        { echo "<option value = $column->COID > $column->COND </option>"; }
?>
</select></label><br>

<label>ชื่อพายุ <input type="text" name="Sname"/> </label><br>
<label>ชื่อภาษาอังกฤษ <input type="text" name="SEname"/> </label><br>
<label>ความหมาย <input type="text" name="SM"/> </label><br>

<label>ชื่อทดแทน <select name="naID">
<?php 
        foreach($nameano_list as $nameano)
        { echo "<option value = $nameano->naID> $nameano->naName</option>"; }
?>
</select></label><br>

<label>สถานะชื่อ <select name="staSID">
<?php 
        foreach($status_list as $status)
        { echo "<option value = $status->staSID> $status->staNSID</option>"; }
?>
</select></label><br>

<label>ปีที่เริ่มใช้ชื่อ <input type="text" name="SYS"/>   *ใช้ปีค.ศ.*</label><br>
<label>ปีที่ชื่อถูกถอดถอน <input type="text" name="SYE"/>   *ใช้ปีค.ศ.*</label><br>

<input type="hidden" name="controller" value="name_of_storm"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addNameOfStorm"> Save</button>

</form>