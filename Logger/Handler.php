<?php
declare(strict_types=1);

namespace APCS\BaseLogger\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    /**
     * @var int
     */
    protected $loggerType = Logger::ERROR;

    /**
     * @var string
     */
    protected $fileName = '/var/log/APCS/error.log';
}
