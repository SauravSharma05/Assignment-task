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
                        $name= $_REQUEST['name'];   
                        $email= $_REQUEST['email'];
                        $address= $_REQUEST['address'];
                        $dept= $_REQUEST['dept'];
                        $edu= $_REQUEST['edu'];
                        $exp= $_REQUEST['exp'];
                        $contact= $_REQUEST['contact'];
                        $gender= $_REQUEST['gender'];
                        $hobby= $_REQUEST['hobby'];
                        $hob = implode(',',$hobby);
                        
                        $file = $_FILES['image']['tmp_name'];
                        $loc = "images/".time().$_FILES['image']['name'];
                        move_uploaded_file($file,$loc);

                    $data = array(
                        "name" => $name,
                        "email" => $email,
                        "address" => $address,
                        "hobby" => $hob,
                        "edu" => $edu,
                        "exp" => $exp,
                        "contact" => $contact,
                        "dept" => $dept,
                        "gender" => $gender,
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