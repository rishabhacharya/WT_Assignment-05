<?php
namespace Details\DBdata;
class UserDetails
    {
        private $con=null;
        public function build($con)
            {
                $this->con=$con;
            }
        public function insertDetails($data)
            {
                $sql = "insert into student(Name,Age,email,Platform) values(:name,:age,:email,:plat)";
                $stmt = $this->con->prepare($sql);
                $name=$data->First_Name." ".$data->Last_Name;
                $stmt->bindParam(":name",$name);
                $stmt->bindParam(":age",$data->Age);
                $stmt->bindParam(":email",$data->Email);
                $stmt->bindParam(":tech",$data->Platform_Known);
            
            if($stmt->execute()==TRUE)
                {
                    return true;
                }
            else
                {
                    return false;
                }
            }

        public function getData()
            {
                $sql = "select * from student";
                $stmt = $this->con->prepare($sql);
                $stmt->execute();
                return $stmt;
            }
    }
?>