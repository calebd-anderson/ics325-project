<?php
session_start();
class DBController
{
    private $host = "localhost";
    private $user = "***REMOVED***";
    private $password = "***REMOVED***";
    private $database = "***REMOVED***";

    private $conn;

    public $username;
    public $memberID;

    // assign logged-in user memberID to local variable
    // $query3 = "DELETE FROM member_contact WHERE memberID = LAST_INSERT_ID();";
    // $stmt3 = $conn->prepare($query3);
    // $stmt3->execute();

    function __construct()
    {
        $this->conn = $this->connectDB();
        $this->username = $_SESSION['username'];
        $this->memberID = $this->get_memberID();
    }

    function get_memberID(){
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        $username = $this->username;
        $memberID = (int)$conn->query("SELECT memberID FROM member_creds WHERE username = '$username'")->fetch_object()->memberID;
        return $memberID;
    }

    function get_Username(){
        $username = $_SESSION['username'];
        return $username;
    }

    function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

    function runQuery($query, $param_type, $param_value_array)
    {
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
        $result = $sql->get_result();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        
        if (! empty($resultset)) {
            return $resultset;
        }
    }

    function bindQueryParams($sql, $param_type, $param_value_array)
    {
        $param_value_reference[] = & $param_type;
        for ($i = 0; $i < count($param_value_array); $i ++) {
            $param_value_reference[] = & $param_value_array[$i];
        }
        call_user_func_array(array(
            $sql,
            'bind_param'
        ), $param_value_reference);
    }

    function insert($query, $param_type, $param_value_array)
    {
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
    }
}

?>