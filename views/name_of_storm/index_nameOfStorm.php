<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2.5px solid #c5d2e7;
  text-align: center;
  padding: -2px;
       
}

tr:nth-child(odd) {
  background-color: Pink;
}
</style>
</head>
<body>
    <br> เพิ่มระบบข้อมูลชื่อพายุใหม่ <a href = "?controller=name_of_storm&action=newNameOfStorm"> click! </a>
     <br>
</body>
<table class = "center" border = 1>

    <tr style="color: #fff; background: #f778ba ;font-size: 16;">
    <td> รหัสพายุ </td>
    <td> ประเทศ </td>
    <td> ชุดในบัญชีรายชื่อ </td>
    <td> ชื่อพายุ </td>
    <td> ชื่อภาษาอังกฤษ </td>
    <td> ความหมาย </td>
    <td> ชื่อทดแทน </td>
    <td> สถานะชื่อ </td>
    <td> ปีที่เริ่มใช้ชื่อ </td>
    <td> ปีที่ชื่อถูกถอดถอน </td>
    <td style="color: #fff; background: #34D399 ;font-size: 16;"> update </td>
    <td style="color: #fff; background: Tomato ;font-size: 16;"> delete </td>
    </tr>

    <?php foreach( $nameOfStormList as $nameofstorm ) 
    {
        echo "<tr>
        <td> $nameofstorm->SID </td>
        <td> $nameofstorm->Cname </td>
        <td> $nameofstorm->COND </td>
        <td> $nameofstorm->Sname </td>
        <td> $nameofstorm->SEname </td>
        <td> $nameofstorm->SM </td>
        <td> $nameofstorm->naName </td>
        <td> $nameofstorm->staNSID </td>
        <td> $nameofstorm->SYS </td>
        <td> $nameofstorm->SYE </td>
        <td> <a href=?controller=name_of_storm&action=updateForm&SID=$nameofstorm->SID> update </a> </td>
        <td> <a href=?controller=name_of_storm&action=deleteConfirm&SID=$nameofstorm->SID> delete </a> </td>
         </tr>";
    }
    echo"</table>";
    ?>
<html>


