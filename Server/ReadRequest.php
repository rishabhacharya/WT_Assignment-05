<?php
    
    require_once "../configuration.php";
    
    require_once "../Details/UserDetails.php";
    
    require_once "../Details/Record.php";

    use Details\DBdata\UserDetails;
    use Details\DBdata\Record;

    header('Content-type: application/json');
    
    $bridge = new Record();

    $entity = new UserDetails($bridge->bridge());
    
    $result = $entity->getData();
    
    if($result->rowCount()>0)
        {
            $ItemList = array("records" => array());
        
    $ItemList=array();
        
        while($row = $result->fetch(\PDO::FETCH_ASSOC)) 
            {
                $ItemList["records"][] = $row;
            }
            echo json_encode($ItemList);
        }
    
    else
        {
            echo json_encode(["No items to show"]);
        }
?>