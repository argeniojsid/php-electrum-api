<?php

namespace Electrum\Response\Model\Wallet;

use Electrum\Response\ResponseInterface;
use Electrum\Response\Traits\Transactions;

/**
 * @author Pascal Krason <p.krason@padr.io>
 */
class History implements ResponseInterface
{
    use Transactions;
}