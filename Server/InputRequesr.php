<?php

    require_once "../configuration.php";
    
    require_once "../Details/UserDetails.php";
    
    require_once "../Details/Record.php";

    use Details\DBdata\UserDetails;
    use Details\DBdata\Record;

    $data = json_decode(file_get_contents("php://input"));
    
    if($data!=null)
        {
            $bridge = new Record();

            $entity = new UserDetails($bridge->bridge());
                
                if($entity->insertDetails($data)==True)
                    {
                        echo "<h1>Registration is Succesfull</h1>";
                    }
                else
                    {
                        echo "<h1>Sorry! Please try again</h1>";
                    }
        }
    
    else
    {
        print "No items to show";
    }
?>