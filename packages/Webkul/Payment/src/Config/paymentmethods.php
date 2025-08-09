<?php

return [
    'cashondelivery'  => [
        'code'        => 'cashondelivery',
        'title'       => 'Cash On Delivery',
        'description' => 'Cash On Delivery',
        'class'       => 'Webkul\Payment\Payment\CashOnDelivery',
        'active'      => true,
        'sort'        => 1,
    ],

    'moneytransfer'   => [
        'code'        => 'moneytransfer',
        'title'       => 'Money Transfer',
        'description' => 'Money Transfer',
        'class'       => 'Webkul\Payment\Payment\MoneyTransfer',
        'active'      => true,
        'sort'        => 2,
    ],

    'pagomovil'   => [
        'code'        => 'pagomovil',
        'title'       => 'Pago Movil',
        'description' => 'Pago Movil',
        'class'       => 'Webkul\Payment\Payment\PagoMovil',
        'active'      => true,
        'sort'        => 3,
    ],
];
