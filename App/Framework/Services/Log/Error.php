<?php

namespace App\Framework\Services\Log;

use App\Framework\Models\LogEventModel;

class Error extends Logger {

    public function throwError($code=500, $message=null)
    {
        $error = new LogEventModel;

        $error->code = $code;
        $error->message = ($message) ? $message:$this->defaultErrorMessages($code);

        echo $error->date . '<br/><br/><strong>' . $error->code . '</strong><br/><br/>' . $error->message;

        $this->storeLog($error->code, $error->message);

        exit($code);
    }

    protected function defaultErrorMessages($code)
    {
        switch($code)
        {
            case 500:
                return "Server error";
                break;

            case 404:
                return "Not found";
                break;

            case 403:
                return "Access denied";
                break;

            default:
                return "There is no specified error message for this error code";
                break;
        }
    }

}