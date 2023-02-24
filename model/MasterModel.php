<?php

    include_once '../lib/conf/connection.php';

    class MasterModel extends Connection{

        public function insert($sql){
            $result=mysqli_query($this->getConnect(),$sql);
            return $result;
        }
        public function update($sql){
            $result=mysqli_query($this->getConnect(),$sql);
            return $result;
        }
        public function delete($sql){
            $result=mysqli_query($this->getConnect(),$sql);
            return $result;
        }

        public function consult($sql, $params = array()){
            $stmt = $this->getConnect()->prepare($sql);
            if (!empty($params)) {
                $types = "";
                $params_ref = array();
                foreach ($params as $param) {
                    if (is_int($param)) {
                        $types .= "i";
                    } elseif (is_float($param)) {
                        $types .= "d";
                    } elseif (is_string($param)) {
                        $types .= "s";
                    } else {
                        $types .= "b";
                    }
                    $params_ref[] = &$param;
                }
                array_unshift($params_ref, $types);
                call_user_func_array(array($stmt, 'bind_param'), $params_ref);
            }
            $stmt->execute();
            $result = $stmt->get_result();
            return $result;
        }

        public function autoIncrement($table,$field){
            $sql="SELECT MAX($field) FROM $table";
            $result=$this->consult($sql);
            $account=mysqli_fetch_row($result);

            return end($account)+1;
        }
    }
?>