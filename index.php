<html>
<head><title>Test</title></head>
<body>
<hr />
<?php

$x = 37;
echo "If \$x=37, ++\$x = ".++$x;
?>
<hr />
<?php
$x = 37;
echo "If \$x=37, \$x++ = ".$x++;
?>
<hr />
<?php
$one = 1;
$onetoo = "1";

?><hr />

$one == 1        <?php echo ($one == 1       ) ? "YES" : "NO" ?><br />
$onetoo == 1     <?php echo ($onetoo == 1    ) ? "YES" : "NO" ?><br />
$one == $onetoo  <?php echo ($one == $onetoo ) ? "YES" : "NO" ?><br />
$onetoo == $one  <?php echo ($onetoo == $one ) ? "YES" : "NO" ?><br />
$one == "1"      <?php echo ($one == "1"     ) ? "YES" : "NO" ?><br />
$one === $onetoo <?php echo ($one === $onetoo) ? "YES" : "NO" ?>

</body>
</html>












