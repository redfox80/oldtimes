<?php

namespace App\Framework;

use App\Framework\Request\Router;
use App\Framework\Services\Log\Logger;
use App\Framework\Services\Log\Error;

class Boot {

    public function init() {
        
        $error = new Error;

        $error->throwError(403);

        Logger::logNow();

        Router::go();

    }

}