<?php
function test(){
	return "daowzadsfaf";
}

function databaseAccess(){

try {
$conn = new PDO ( "sqlsrv:server = tcp:w6wekl8y64.database.windows.net,1433; Database = octocat_db", "octocat", "Hacktx12");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch ( PDOException $e ) {
print( "Error connecting to SQL Server." );
die(print_r($e));
}

#SQL Server Extension Sample Code:

$connectionInfo = array("UID" => "octocat@w6wekl8y64", "pwd" => "Hacktx12", "Database" => "octocat_db", "LoginTimeout" => 30, "Encrypt" => 1);
$serverName = "tcp:w6wekl8y64.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

return $conn;

}

?>
