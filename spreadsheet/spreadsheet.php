<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: inline; filename='thefile.xls'")
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Spreadsheet</title>
</head>
<body>

<table>
    <tr>
        <td>Quantity</td>
        <td>Show Date</td>
        <td>Show Time</td>
        <td>Name</td>
    </tr>
    <tr>
        <td>1</td>
        <td><?=time();?></td>
        <td>9:00</td>
        <td>John Doe</td>
    </tr>
    <tr>
        <td>3</td>
        <td>1/2/2010</td>
        <td>18:00</td>
        <td>Tom Swift</td>
    </tr>

</table>
</body>
</html>