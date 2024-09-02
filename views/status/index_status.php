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
  background-color: #F7D991;
}
</style>
</head>
<body>
    <br> เพิ่มสถานะชื่อใหม่ <a href = "?controller=status&action=newStatus"> click! </a>
    <br>
</body>
<table class="center" border = 1>

    <tr style="color: #fff; background: #F0B323 ;font-size: 20;">
    <td> รหัสสถานะ </td>
    <td> สถานะชื่อ </td>
    <td style="color: #fff; background: #34D399 ;font-size: 20;"> update </td>
    <td style="color: #fff; background: Tomato ;font-size: 20;"> delete </td>
    </tr>

    <?php foreach( $statusList as $status) 
    {
        echo "<tr>
        <td> $status->staSID </td>
        <td> $status->staNSID </td>
        <td> <a href=?controller=status&action=updateForm&staSID=$status->staSID> update </a> </td>
        <td> <a href=?controller=status&action=deleteConfirm&staSID=$status->staSID> delete </a> </td>
         </tr>";
    }
    echo"</table>";
    ?>
<html>


