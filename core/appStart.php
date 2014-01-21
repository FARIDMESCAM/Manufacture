<?php


class appStart {

    private $xplurl;
    private $controleur;
    private $method;
    
    public function __construct()
    {
        if (empty($_SERVER['REDIRECT_URL']))
        {
            header('location:accueil');
        }
        $this->xplurl = explode('/', $_SERVER['REDIRECT_URL']);
        $this->startRooting();
    }
    
    private function startRooting()
    {
        $this->controleur = $this->xplurl[1];
        $this->method = (empty($this->xplurl[2]))? '' : $this->xplurl[2];
        if(file_exists(ROOT.'controleur/'.$this->controleur.'.php')){
            $this->controleur = new $this->controleur();
            if(method_exists($this->controleur, $this->method)){
                $this->controleur->{$this->method};
            }
        }
        else{require (ROOT.'vue/err404.php');}
    }
}