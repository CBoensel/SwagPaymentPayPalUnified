<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace SwagPaymentPayPalUnified\Components;

/**
 * Class PaymentStatus
 */
class PaymentStatus
{
    /**
     * The default status for approved orders
     */
    const PAYMENT_STATUS_APPROVED = 12;
    /**
     * The default status for open orders
     */
    const PAYMENT_STATUS_OPEN = 17;
    /**
     * The default status for refunded orders
     */
    const PAYMENT_STATUS_REFUNDED = 20;
    /**
     * The default status for voided orders
     */
    const PAYMENT_STATUS_CANCELLED = 35;
    /**
     * The default status from PayPal to identify completed transactions
     */
    const PAYMENT_COMPLETED = 'completed';
}