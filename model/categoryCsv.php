<?php

/**
 * @author LEFEBVRE Julien
 */
class categoryCsv extends controllerCsv{
    
    private $category;
    private $good = false;
    private $listGet = array();
    private $listSet = array();
    
    public function __construct() {
        
    }
    
    /**
     * @return array
     */
    Public function getAllCategory(){
        $this->connectCsv('category');
        while($this->category = fgetcsv($this->connection, 255, ";")){
            $this->listGet[] = $this->category;
        }
        $this->closeCsv();
        return $this->listGet;
    }
       
    /**
     * @param String $name
     */
    public function addCategory($name){
        $this->connectCsv("category", "a+");
        if(fputs($this->connection, $name."\r\n")){$this->good = true;}
        $this->closeCsv();
        $this->returnMsg("Ajout");
    }
    
    /**
     * @param String $old
     * @param String $new
     */
    public function updCategory($old, $new){
        foreach($this->getAllCategory() as $category){
            if($category[0] == $old){$this->listSet[] = $this->toArray($new);}
            else{$this->listSet[] = $category;}
        }
        if($this->updFile()){$this->returnMsg("Modification");}
    }
 
     /**
     * @param String $nom
     * @return String
     */
    public function delCategory($nom){
        foreach($this->getAllCategory() as $category){
            if($category[0] != $nom){$this->listSet[] = $category;}
        }
        if($this->updFile()){$this->returnMsg("Suppression");}
    }
    
    /**
     * @return boolean
     */
    private function updFile(){
        $this->connectCsv('category', 'w+');
        foreach($this->listSet as $d){
            if(fputs($this->connection, $d[0]."\r\n")){$this->good = true;}
        }
        $this->closeCsv();
        return true;
    }
    
    /**
     * @param String $subject
     */
    private function returnMsg($subject){
        if($this->good == false){$this->setMsg('Echec de "'.$subject.'", contacter l\'administrateur');}
        else{$this->setMsg($subject.' réussie');}
        $this->render("admin");
    }
}
