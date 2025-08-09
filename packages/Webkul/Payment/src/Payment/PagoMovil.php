<?php

namespace Webkul\Payment\Payment;

use Illuminate\Support\Facades\Storage;

class PagoMovil extends Payment
{
    /**
     * Payment method code.
     *
     * @var string
     */
    protected $code = 'pagomovil';

    /**
     * Get redirect url.
     *
     * @return string
     */
    public function getRedirectUrl() {}

    /**
     * Returns payment method additional information.
     *
     * @return array
     */
    public function getAdditionalDetails()
    {
        // Keep same behavior as Money Transfer for now to display mailing address/instructions
        if (empty($this->getConfigData('mailing_address'))) {
            return [];
        }

        return [
            'title' => trans('admin::app.configuration.index.sales.payment-methods.mailing-address'),
            'value' => $this->getConfigData('mailing_address'),
        ];
    }

    /**
     * Returns payment method image.
     *
     * @return string
     */
    public function getImage()
    {
        $url = $this->getConfigData('image');

        // Reuse the default money transfer icon for now.
        return $url ? Storage::url($url) : bagisto_asset('images/money-transfer.png', 'shop');
    }
}
