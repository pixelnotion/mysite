<!DOCTYPE html>

<!-- Open the HTML document as usual -->
<html>
<head>
    <title>Database access basics</title>
</head>
<body>

    <!-- Start a table element, add the table heading -->
    <table border="1" cellpadding="4" cellspacing="2">
        <thead> <td>ID</td> <td>Name</td> <td>Email</td> </thead>


    <?php

    // Connect to the database by creating a new mysqli object
    $mysql = new mysqli("localhost", "root", "root", "phpschema", 3306);

    // If the connection didn't work out, there will be a connect_errno property on the $mysql object.  End
    // the script with a fancy message.
    if ($mysql->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysql->connect_error . ")";
    }

    // Run a query and put the result into a new variable named $result -- It's just a table of results
    $result = $mysql->query("select id, firstname, lastname, email from users");

    // Loop through the result from 0 to the number of rows in the result, one row at a time. $i will contain
    // the current row number every pass through the loop ( you could do it backwards too but why? )
    for ($i = 0; $i < $result->num_rows; $i++) {
        // Move to row number $i in the result set.
        $result->data_seek($i);

        // Get all the columns for the current row as an associative array -- we named it $aRow
        $aRow = $result->fetch_assoc();

        // Write a table row to the output containing information from the current database row.
        print "<tr>";
        print "<td>" . $aRow['id'] . "</td>";
        print "<td>" . $aRow['firstname'] . " " . $aRow['lastname'] . "</td>";
        print "<td>" . $aRow['email'] . "</td>";
        print "</tr>";
    }

    // Very important: Close your result set to free up the memory it's taking.
    $result->free()
    ?>

    <!-- Close the table, body, and html -->
    </table>
    </body>

</html>

