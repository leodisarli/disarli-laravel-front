<?php

namespace App\Exceptions\Custom;

use Exception;

class UnauthorizedException extends Exception
{
        /**
     * constructor
     * @param string $message
     * @param integer $code
     */
    public function __construct(
        $message = 'Unauthorized',
        $code = 403
    ) {
        parent::__construct(
            $message,
            $code
        );
    }
}
