<?php
    $serverName = "jdlfa-server.database.windows.net,1433"; // update me
    $connectionOptions = array(
        "Database" => "jdlfa-database", // update me
        "Uid" => "jdlfa-server-admin", // update me
        "PWD" => "Fe3Mo0R5imp!" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * from jfwatab1 ORDER BY 'founddate' ";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['invtagid'] . " " . $row['lostitemtype'] . " " . $row['founddate'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>