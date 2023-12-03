<?php 

class model
{
    public $connection;
    public function __construct()
    {
        try
        {

            $this->connection = new mysqli("localhost","root","","todo");
        }
        catch(\Throwable $th)
        {
            // echo "Connection was not successful";
        }
    }

    public function input($data)
    {
        $keysdata = implode(",", array_keys($data));
        $valuesdata = implode("','", $data);
        $sql = "INSERT INTO tasklist ($keysdata) VALUES ('$valuesdata')";
           
        $this->connection->query($sql);
        // header("location:home");
        
    }

    public function select($table)
    {
        $SQL = "SELECT * FROM $table";
        
        $SQLEX = $this->connection->query($SQL);
       
        if($SQLEX->num_rows > 0)
        {
    
            while($data = $SQLEX->fetch_object())
            {
                $taskdata[] = $data;
            }
           
            return $taskdata;
    
        }
    }


}

















?>