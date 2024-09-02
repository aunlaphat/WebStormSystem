<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 69%;
}

td, th {
  border: 2.5px solid #c5d2e7;
  text-align: center;
  padding: 10px;
       
}

tr:nth-child(odd) {
  background-color: #9DD0E7;
}
</style>
</head>
<body>

    <br> เพิ่มกลุ่มชุดใหม่ <a href = "?controller=column&action=newColumn"> click! </a>
    <br>
</body>
<table class="center" border = 1>

    <tr style="color: #fff; background: #007CAD ;font-size: 20;">
    <td> รหัสชุด </td>
    <td> ชุดในบัญชีรายชื่อ </td>
    <td style="color: #fff; background: #34D399 ;font-size: 20;"> update </td>
    <td style="color: #fff; background: Tomato ;font-size: 20;"> delete </td>
    </tr>

    <?php foreach( $columnList as $column) 
    {
        echo "<tr>
        <td> $column->COID </td>
        <td> $column->COND </td>
        <td> <a href=?controller=column&action=updateForm&COID=$column->COID> update </a> </td>
        <td> <a href=?controller=column&action=deleteConfirm&COID=$column->COID> delete </a> </td>
         </tr>";
    }
    echo"</table>";
    ?>
<html>


