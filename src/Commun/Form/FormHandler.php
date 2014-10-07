<?php

namespace Commun\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class FormHandler {

    protected $form;
    protected $request;
    protected $em;
    protected $commit;

    public function __construct(Form $form, Request $request, EntityManager $em, $commit) {

        $this->form = $form;
        $this->request = $request;
        $this->em = $em;
        $this->commit = $commit;
    }

    public function process() {
 
        if ($this->request->getMethod() == "POST") {
              $this->form->bind($this->request);
            if ($this->form->isValid()) {
                 
                $this->onSuccess($this->form->getData());
                return true;
            }
        }
    }

    public function onSuccess($obj) {
        $this->em->persist($obj);
        //Nouveau parametre en entrée = commit. Permet de gérer le cas des parents
        // avec enfants en 1 transaction.
        if ($this->commit == TRUE) {
            $this->em->flush();
        }
    }

}
