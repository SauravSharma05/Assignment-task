<?php 

class model
{       
        public $connection;
        public function __construct()
        {
            $this->connection = new mysqli("localhost","root","","saurav_sharma"); 
        }
        public function insert($table, $data)
        {
            $arr = array_keys($data);
            $val = array_values($data);

            $arr1 = implode(",",$arr);
            $val1 = implode("','",$val);

            $sql  = "INSERT INTO $table ($arr1) VALUES ('$val1')";
            // echo $sql;
            $this->connection->query($sql);

        }
        public function show($table)
        {
            $sql = "SELECT * FROM $table";
            $data = $this->connection->query($sql);
            if($data->num_rows>0)
            {
                while ($datas = mysqli_fetch_object($data)) 
                {
                        $userdata[] = $datas; 
                }
            }
            return $userdata;
        }

}
   


?>