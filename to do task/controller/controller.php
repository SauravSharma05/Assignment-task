<?php 

require_once("model/model.php");
class controller extends model
{   
    public function __construct()
    {
        parent::__construct();

        if($_SERVER['PATH_INFO'])
        {
            switch ($_SERVER['PATH_INFO']) 
            {
                case '/home.php':

                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $datain = json_decode(file_get_contents('php://input'));
                        // Process $datain and prepare the response data
                        $response = array( "taskname" => $datain->taskname,);
                        header('Content-Type: application/json');
                        // echo json_encode($response);
                        $datas = $this->input($response);
                        
                        
                    } 
                    else {
                        require_once("view/home.php");
                    }
                    $tasklistd = $this->select('tasklist');
                    // echo json_encode($tasklistd);
                    if(isset($tasklistd))
                    {
                         foreach ($tasklistd as $value) {
                             echo "<ul><li>".$value->taskname."</li></ul>";
                         }
                    }
                    break;

                    // case '/view/taskdata.php':
                    //     $Response = $this->select();
                    //     echo json_encode($Response);
                    //     break;

                
                
                


            }

        }
        else {
            header("location:home");
        }
    }
}

$obj = new controller;























?>