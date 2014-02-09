<?php

/**
 * @author LEFEBVRE Julien
 */
class userDao extends controllerDao{
    
    private $userFile;
    
    public function __construct() {
        $this->connectCsv('user');
        $this->userFile = fgetcsv($this->connection, 255, ";");
    }
    
    public function getPseudo(){
        return $this->userFile[0];
    }
    
    public function getPwd(){
        return $this->userFile[1];
    }
    
}
