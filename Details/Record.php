<?php
namespace Details\DBdata;
class Record
    {
        private $allhost;
        private $name;
        private $username;
        private $password;
        public $combine;
        public function build()
            {
                $this->allhost = server;
                $this->name = name;
                $this->username = username;
                $this->password = password;
            }
    
        public function bridge() 
            {
                $this->combine = null;
    
        try 
            {
                $this->combine = new \PDO
                ("mysql:allhost={$this->allhost};name={$this->name}",
                $this->username,
                $this->password);
            } 

        catch(\PDOException $exp) 
            {
                echo "Connection Error: ".$exp->getMessage();
            }
    
        return $this->combine;
            }
    
    }
?>