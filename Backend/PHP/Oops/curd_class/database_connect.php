<?php
class database
{
    private  $servername = "localhost";
    private $username = "root";
    private $password = "";
    // private  $database = "curd_Oops";
    private  $database = "newcurd_oops";
    private $mysqli = "";
    private $result = array();
    private $conn = false;
    function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->database);
            $this->conn = true;
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }

    // function to insert into database.
    function insert($table, $params = array())
    {
        if ($this->tableExist($table)) {
            // echo "<pre>";
            // print_r($params);
            // echo "</pre>";
            $table_columns = implode(',', array_keys($params));
            // print_r($table_columns);
            $table_value = implode("','", $params);
            // print_r($table_value);
              $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return  false;
            }
        } else {
            return false;
        }
    }
    // function to update row into database.
    function update($table, $params = array(), $where = null)
    {
        if ($this->tableExist($table)) {
            // echo "<pre>";
            // print_r($params);
            // echo "</pre>";
            $args = array();
             foreach($params as $key => $value) {
                  $args[]= "$key  = '$value'";
             }

            // echo "<pre>";
            // print_r($args);
            // echo "</pre>";

            $sql = "UPDATE  $table SET " .   implode(',', $args);  // we use implode to convert array into string.
            if ($where != null) {
                $sql .= "WHERE $where";
            }
            //    echo  $sql;
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                // echo "connected";

            } else {
                array_push($this->result, $this->mysqli->error);
                // echo "no";

            }
        } else {
            return false;
        }
    }
    // Function to delete table or row(s)  from database.
    function delete($table, $where = null)
    {
        if ($this->tableExist($table)) {
            $sql = " DELETE FROM $table ";
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                // echo "connected";

            } else {
                array_push($this->result, $this->mysqli->error);
                // echo "no";

            }
        } else {
            return false;
        }
    }
    // Function to select from database.
    function select($table, $rows = "*", $join = null, $where = null, $order = null,$limit=null)
    {
        if ($this->tableExist($table)) {
            $sql = "SELECT $rows FROM $table";
            if ($join != null) {
                $sql .= " JOIN  $join";
            }
            if ($where != null) {
                $sql .= "  WHERE  $where";
            }
            if($order != null){
                $sql .= " ORDER BY $order";
              }
            if ($limit != null) {
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) *  $limit;
                $sql .= " LIMIT  $start,  $limit";
            }
          
            
            echo $sql;
            $query = $this->mysqli->query($sql);
            if ($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                // echo "connected";
                // return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                // echo "no";
                // return false;
            }
        } else {
            return false;
        }
    }
     
         public function pagination($table,$join = null,$where = null,$limit=null){
                // Check to see if table exists
                if($this->tableExist($table)){
                  if($limit != null){
                    // select count() query for pagination
                    $sql = "SELECT COUNT(*) FROM $table";
                    if($join != null){
                      $sql .= " JOIN $join";  
                    }
                    if($where != null){
                      $sql .= " WHERE $where"; 
                    }
            
                    $query = $this->mysqli->query($sql);
            
                    $total_record = $query->fetch_array();
                    // print_r($total_record);
                //  echo    $total_record = $total_record[0];
                     $total_record = $total_record[0];
                     $total_page = ceil($total_record/$limit);
                    //  print_r($total_page);
                     $url = basename($_SERVER['PHP_SELF']);
                    //  print_r($url);
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }
                    else{
                        $page = 1;
                    }

               $output = "<ul class = 'pagination'";
               if($page>1){
                   
                   $output .= "<li> <a   href='$url?page=". ($page - 1)."'> Prev </a> </li>";
               }
                   if($total_record > $limit){
                       for ($i=1; $i<=$total_page ; $i++) { 
                           if($i == $page){
                               $cls = "class = 'active'";
                            }else{
                               $cls = "";

                           }
                           $output .= "<li> <a  $cls href='$url?page=$i'>$i </a> </li>";
                           
                       }
                   }
                   if($total_page>$page){
                   
                    $output .= "<li> <a  $cls href='$url?page=". ($page + 1)."'>  Next </a> </li>";
                }
               $output .= "</ul>";
               echo $output;



                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

     
    function  sql($sql)
    {
        $query = $this->mysqli->query($sql);
        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }
    private function tableExist($table)
    {
        $sql = "SHOW TABLES FROM  $this->database  LIKE '$table' ";
        $tableInDb = $this->mysqli->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $table . "Table does not exist in database");
                return false;
            }
        }
    }
    function  getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
        // print_r($val);

    }

    function __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return true;
        }
    }
}
