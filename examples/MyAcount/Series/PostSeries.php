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

$Id_BranchOffice='GHtxdqCdMm2qTLXvo8Eqgg2';
$params = 
[
    'IdBranchOffice'=>$Id_BranchOffice,
    'Name'=>'ABC',
    'Description'=>'Test Serie',
    'Folio'=>'999'
];
$result = $facturama->post('api/serie/', $params);
printf('<pre>%s<pre>', var_export($result, true));