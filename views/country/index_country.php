<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 2.5px solid #c5d2e7;
  text-align: center;
  padding: 10px;
       
}

tr:nth-child(odd) {
  background-color: #DDD6FE;
}
</style>
</head>
<body>
    <br> เพิ่มประเทศใหม่ <a href = "?controller=country&action=newCountry"> click! </a>
    <br>  
</body>
<table class="center" border = 1>

    <tr style="color: #fff; background: #A78BFA ;font-size: 20;">
    <td > รหัสประเทศ </td>
    <td > ประเทศ </td>
    <td style="color: #fff; background: #34D399 ;font-size: 20;"> update </td>
    <td style="color: #fff; background: Tomato ;font-size: 20;"> delete </td>
    </tr>

    <?php foreach( $countryList as $country) 
    {
        echo "<tr>
        <td> $country->CID </td>
        <td> $country->Cname </td>
        <td> <a href=?controller=country&action=updateForm&CID=$country->CID> update </a> </td>
        <td> <a href=?controller=country&action=deleteConfirm&CID=$country->CID> delete </a> </td>
         </tr>";
    }
    echo"</table>";
    ?>
<html>


