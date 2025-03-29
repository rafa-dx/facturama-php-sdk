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
        "FiscalRegime"=> "601",
        "ComercialName"=> "ESCUELA KEMPER URGATE",
        "Rfc"=> "EKU9003173C9",
        "TaxName"=> "ESCUELA KEMPER URGATE",
        "Email"=> "ejemplo-api@ejemplo.com",
        "OptionalEmail"=> "",
        "TaxAddress"=> [
            "Street"=> "Av. Siempre Viva",
            "ExteriorNumber"=> "512",
            "InteriorNumber"=> "1024",
            "Neighborhood"=> "San",
            "ZipCode"=> "55555",
            "Locality"=> "",
            "Municipality"=> "Venustiano carranza",
            "State"=> "Chiapas",
            "Country"=> "MEXICO"
        ],
        "IssuedIn"=> [
            "Street"=> "Calle Central",
            "Neighborhood"=> "-",
            "ZipCode"=> "78000",
            "Municipality"=> "-",
            "State"=> "SAN LUIS POTOSI",
            "Country"=> "MEXICO",
            "Id"=> "GHtxdqCdMm2qTLXvo8Eqgg2"
        ],
        "UrlLogo"=> "data:image/png;base64,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"
];
$result = $facturama->put('taxentity', $params);
printf('<pre>%s<pre>', var_export($result, true));