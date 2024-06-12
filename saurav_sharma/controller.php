<?php 

include "model.php";
class controller extends model
{
        public function __construct()
        {
            $url = $_SERVER['PATH_INFO'];
            model::__construct();
            switch ($url) 
            {
                case '/index':   
                    // print_r($_SERVER);
                    if(isset($_REQUEST['submit']))
                    {
                        
                        $file = $_FILES['image']['tmp_name'];
                        $loc = "images/".time().$_FILES['image']['name'];
                        move_uploaded_file($file,$loc);
                        
                        $hobby= $_REQUEST['hobby'];
                        $hob = implode(',',$hobby);
                        
                        $data = array(
                            "name" => $_REQUEST['name'],
                            "email" => $_REQUEST['email'],
                            "address" => $_REQUEST['address'],
                            "edu"=> $_REQUEST['edu'],
                            "exp"=> $_REQUEST['exp'],
                            "contact"=> $_REQUEST['contact'],
                            "gender"=> $_REQUEST['gender'],
                            "dept" => $_REQUEST['dept'],
                            "hobby" => $hob,
                            "image" => $loc,
                    );
                    $this->insert('userlist',$data);
                    header('location:index');
                    }
                include "index.php";
                break;
                
                case '/userdata':
                    $userdata = $this->show('userlist');
                    include "userdata.php";
                        break;
            }
        }
}

$obj = new controller;

?>