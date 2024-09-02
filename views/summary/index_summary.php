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
  padding: 10px;
       
}

tr:nth-child(odd) {
  background-color: #FFC39C;
}

.button-24 {
  background: #FF4742;
  border: 0.8px solid #FF4742;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 0.8px 5px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

.button-24:hover,
.button-24:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

.button-24:active {
  opacity: .5;
}

</style>
</head>

<form method="get" action="">
    <input type="text" name = "key">
    <input type = "hidden" name = "controller" value = "summary"/>
    <button class="button-24" role="button" type = "submit" name = "action" value = "search"> search </button>
</form>

<table class="center" border = 1>

    <tr style="color: #fff; background: #FF8A3D ;font-size: 20;">
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
    </tr>

    <?php foreach( $sumList as $nameofstorm ) 
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
         </tr>";
    }
    echo"</table>";
    ?>
<html>


