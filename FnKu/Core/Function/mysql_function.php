<?php
/**
 * FnKu MySql class
 */
require("./Config/confi.php");

class Fn_DB
{
    /**
     * Fn_DBConn [Fn_DBConn();]
     */
    public function Fn_DBConn()
    {
        $Fn_DBConn = new mysqli( mysql_servername,mysql_username,mysql_password,mysql_database);
        if( $Fn_DBConn->connect_errno <> 0 ){
            echo $Fn_DBConn->connect_error;
            die("SQL NO... (FnKu_E002_SQL)");
        }
        $Fn_DBConn->query("SET NAMES UTF8");
    }
    /**
     * Fn_DBQuery [Fn_DBQuery();]
     */
    public function Fn_DBQuery(){
        #查询MySql_1
        $sql = "SELECT * FROM FnB_Msg ORDER BY ID DESC";
        $mysqli_result = $Fn_DBConn->query($sql);
        if( $mysqli_result === false ){
            echo "SQL NO... (FnKu_E002_SQL)";
            exit;
        }
        $rows = [];
        while( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC ) ){
            $rows[] = $row; 
        }
        #查询MySql_2
        $ALLNUM_Query = 'SELECT * FROM FnB_Msg';
        $ALLNUM = mysqli_query( $Fn_DBConn, $ALLNUM_Query );
    }
    
}

$Fn_DB = new Fn_DB();
$Fn_DB->Fn_DBConn();