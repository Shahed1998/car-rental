<?php
  
    class CustomException extends Exception {
        public function errorMessage(){
            return ("Error in line: ".$this->getLine()
                ." on page: ".$this->getFile()."<br/>"
                .$this->getMessage());
        }
    }

?>