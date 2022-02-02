<?php
/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagPaymentPayPalUnified\Components\Services\OrderBuilder\PaymentSource\PaymentSourceHandler;

use SwagPaymentPayPalUnified\Components\PayPalOrderParameter\PayPalOrderParameter;
use SwagPaymentPayPalUnified\Components\Services\OrderBuilder\PaymentSource\AbstractPaymentSourceHandler;
use SwagPaymentPayPalUnified\PayPalBundle\PaymentType;
use SwagPaymentPayPalUnified\PayPalBundle\V2\Api\Order\PaymentSource;
use SwagPaymentPayPalUnified\PayPalBundle\V2\Api\Order\PaymentSource\Multibanco;
use UnexpectedValueException;

class MultiBancoPaymentSourceHandler extends AbstractPaymentSourceHandler
{
    /**
     * {@inheritDoc}
     */
    public function supports($paymentType)
    {
        return $paymentType === PaymentType::APM_MULTIBANCO;
    }

    /**
     * {@inheritDoc}
     */
    public function createPaymentSource(PayPalOrderParameter $orderParameter)
    {
        $apmPaymentSourceValue = $this->paymentSourceValueFactory->createPaymentSourceValue($orderParameter);

        if (!$apmPaymentSourceValue instanceof Multibanco) {
            throw new UnexpectedValueException(
                sprintf(
                    'Payment source Multibanco expected. Got "%s"',
                    \get_class($apmPaymentSourceValue)
                )
            );
        }

        $paymentSource = new PaymentSource();
        $paymentSource->setMultibanco($apmPaymentSourceValue);

        return $paymentSource;
    }
}
