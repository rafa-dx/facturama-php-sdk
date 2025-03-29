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

$Id_BranchOffice='5JCn2yymUR7Srt-NRweRgQ2';
$params = 
[
    "Id"=>$Id_BranchOffice,
    "Name"=> "Sucursal de pruebas",
    "Description"=> "Sucursal del sauce, enfocada en la distribución de agua en garrafón",
    "Address"=> 
    [
        "Street"=> "Av. del Sauce",
        "ExteriorNumber"=> "120",
        "InteriorNumber"=> "",
        "Neighborhood"=> "Las Flores",
        "ZipCode"=> "78116",
        "Locality"=> "",
        "Municipality"=> "San Luis Potosi",
        "State"=> "San Luis Potosi",
        "Country"=> "México"
    ]
    
];
$result = $facturama->put('api/BranchOffice/'. $Id_BranchOffice, $params);
printf('<pre>%s<pre>', var_export($result, true));