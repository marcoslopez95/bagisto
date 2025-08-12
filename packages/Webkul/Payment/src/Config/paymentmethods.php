<?php

return [
    'cashondelivery'  => [
        'code'        => 'cashondelivery',
        'title'       => 'Cash On Delivery',
        'description' => 'Cash On Delivery',
        'class'       => 'Webkul\\Payment\\Payment\\CashOnDelivery',
        'active'      => true,
        'sort'        => 1,
    ],

    'moneytransfer'   => [
        'code'        => 'moneytransfer',
        'title'       => 'Money Transfer',
        'description' => 'Money Transfer',
        'class'       => 'Webkul\\Payment\\Payment\\MoneyTransfer',
        'active'      => true,
        'sort'        => 2,
    ],

    'pagomovil'   => [
        'code'        => 'pagomovil',
        'title'       => 'Pago Movil',
        'description' => 'Pago Movil',
        'class'       => 'Webkul\\Payment\\Payment\\PagoMovil',
        'active'      => true,
        'sort'        => 3,
    ],

    'binance'   => [
        'code'        => 'binance',
        'title'       => 'Binance',
        'description' => 'Binance',
        'class'       => 'Webkul\\Payment\\Payment\\Binance',
        'active'      => true,
        'sort'        => 4,
    ],

    'zelle'   => [
        'code'        => 'zelle',
        'title'       => 'Zelle',
        'description' => 'Zelle',
        'class'       => 'Webkul\\Payment\\Payment\\Zelle',
        'active'      => true,
        'sort'        => 5,
    ],

    'zinli'   => [
        'code'        => 'zinli',
        'title'       => 'Zinli',
        'description' => 'Zinli',
        'class'       => 'Webkul\\Payment\\Payment\\Zinli',
        'active'      => true,
        'sort'        => 6,
    ],
];
