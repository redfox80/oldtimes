<?php

namespace App\Framework\Models;

use Carbon\Carbon;

class LogEventModel {

    public function __construct()
    {
        $this->date = Carbon::now();
    }

    public $code;
    public $errorMessage;
    public $date;
    
}