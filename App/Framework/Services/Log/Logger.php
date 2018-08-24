<?php

namespace App\Framework\Services\Log;

use App\Framework\Models\LogEventModel;
use Carbon\Carbon;

class Logger {

    public function logNow()
    {
        echo "\nLog now?\n";
    }

    public function storeLog($code, $data)
    {
        //Pretending to actually store data lul
        return 0;
    }

}