<?php

/*
 * This file is part of Facturama PHP SDK.
 *
 * (c) Facturama <soporte-api@facturama.mx>
 *
 * This source file is subject to a MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require __DIR__.'/../../../vendor/autoload.php';

$facturama = new Facturama\Client('pruebas', 'pruebas2011');

$params = 
[
    'Rfc'=>'EKU9003173C9',
    'Name'=>'ESCUELA KEMPER URGATE',
    'ZipCode'=>'26015',
    'FiscalRegime'=>'601'
];
$result = $facturama->post('customers/validate', $params);

printf('<pre>%s<pre>', var_export($result, true));
