<?php

namespace Heidelpay\PhpApi\PaymentMethods;

use Heidelpay\PhpApi\TransactionTypes\AuthorizeTransactionType;
use Heidelpay\PhpApi\TransactionTypes\FinalizeTransactionType;
use Heidelpay\PhpApi\TransactionTypes\RefundTransactionType;
use Heidelpay\PhpApi\TransactionTypes\ReversalTransactionType;

/**
 * Payolution Invoice
 *
 * heidelpay PHP-API integration for Invoice by Payolution
 *
 * @license Use of this software requires acceptance of the License Agreement. See LICENSE file.
 * @copyright Copyright © 2017-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link https://dev.heidelpay.de/php-api
 *
 * @author Stephano Vogel <development@heidelpay.de>
 *
 * @package heidelpay\php-api\payment-methods\payolution-invoice
 */
class PayolutionInvoicePaymentMethod
{
    use BasicPaymentMethodTrait;
    use AuthorizeTransactionType;
    use FinalizeTransactionType;
    use RefundTransactionType;
    use ReversalTransactionType;

    /**
     * @var string Payment code
     */
    protected $_paymentCode = 'IV';

    /**
     * @var string Brand name
     */
    protected $_brand = 'PAYOLUTION_DIRECT';
}