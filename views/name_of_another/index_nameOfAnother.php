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
  background-color: #ADE0EB;
}
</style>
</head>
<body>
    <br> เพิ่มชื่อทดแทนใหม่ <a href = "?controller=name_of_another&action=newNameAnother"> click! </a>
    <br>
</body>
<table class="center" border = 1>

    <tr style="color: #fff; background: #5BC1D7 ;font-size: 20;">
    <td> รหัสชื่อทดแทน </td>
    <td> ชื่อทดแทน </td>
    <td style="color: #fff; background: #34D399 ;font-size: 20;"> update </td>
    <td style="color: #fff; background: Tomato ;font-size: 20;"> delete </td>
    </tr>

    <?php foreach( $nameanoList as $nameano) 
    {
        echo "<tr>
        <td> $nameano->naID </td>
        <td> $nameano->naName </td>
        <td> <a href=?controller=name_of_another&action=updateForm&naID=$nameano->naID> update </a> </td>
        <td> <a href=?controller=name_of_another&action=deleteConfirm&naID=$nameano->naID> delete </a> </td>
         </tr>";
    }
    echo"</table>";
    ?>
<html>


