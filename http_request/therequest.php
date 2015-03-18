<!DOCTYPE html>
<html>
<head>
    <title>The Request</title>
    <link rel="stylesheet" href="./therequest.css" type="text/css" />
</head>
<body>
<div class="title">The Request</div>
<div class="explanation">This page contains all of the server information from your request.</div>
<div class="contents">
    <div class="tableHead">
        <div style="display:table-cell">Server variable</div>
        <div style="display:table-cell">Value</div>
    </div>
    <?php
    $keys = array_keys($_SERVER);
    foreach ($keys as $aKey) {
    ?>
        <div style="display:table-row">
            <div class="keyCell"><?php echo($aKey);?></div>
            <div class="valueCell"><?php echo($_SERVER[$aKey]);?></div>
        </div>
    <?php } ?>
</div>

</body>
</html>