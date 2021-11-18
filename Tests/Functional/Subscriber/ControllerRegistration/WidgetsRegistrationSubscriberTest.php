<?php
/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagPaymentPayPalUnified\Tests\Functional\Subscriber\ControllerRegistration;

use PHPUnit\Framework\TestCase;
use SwagPaymentPayPalUnified\Subscriber\ControllerRegistration\Widgets;

class WidgetsRegistrationSubscriberTest extends TestCase
{
    public function testCanBeCreated()
    {
        $subscriber = new Widgets(Shopware()->Container()->getParameter('paypal_unified.plugin_dir'));
        static::assertNotNull($subscriber);
    }

    public function testGetSubscribedEvents()
    {
        $events = Widgets::getSubscribedEvents();
        static::assertCount(2, $events);
        static::assertSame('onGetEcV2ControllerPath', $events['Enlight_Controller_Dispatcher_ControllerPath_Widgets_PaypalUnifiedV2ExpressCheckout']);
    }

    public function testOnGetEcControllerPath()
    {
        $subscriber = new Widgets(Shopware()->Container()->getParameter('paypal_unified.plugin_dir'));
        $path = $subscriber->onGetEcV2ControllerPath();

        static::assertFileExists($path);
    }
}
