<?php

namespace fsm\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class fsmUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
