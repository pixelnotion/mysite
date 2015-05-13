<!DOCTYPE html>
<head><title>FormProcessor</title></head>
<body>
<?php include '../header.php'; ?>
<span style="font-weight: bold;">Subject: </span><?php echo($_REQUEST["subject"]); ?><br />
<span style="font-weight: bold;">Date:    </span><?php echo($_REQUEST["date"]);    ?><br />
<span style="font-weight: bold;">Category:</span><?php echo($_REQUEST["category"]);?><br />
<span style="font-weight: bold;">Privacy: </span><?php echo($_REQUEST["privacy"]); ?><br />
<span style="font-weight: bold;">Note:    </span><?php echo($_REQUEST["note"]);    ?><br />
</body>
</html>