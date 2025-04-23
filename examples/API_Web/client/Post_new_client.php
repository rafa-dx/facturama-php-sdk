<?php

/*
 * This file is part of Facturama PHP SDK.
 *
 * (c) Facturama <api@facturama.mx>
 *
 * This source file is subject to a MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require __DIR__.'/../../../vendor/autoload.php';
require_once '../../credentials.php';

use Facturama\Client;

$facturama = new Client(USER, PASSWORD);
$facturama->setApiUrl('https://apisandbox.facturama.mx/');

$body_RFCs_Moral = array(
  [
    'Id' => '',
    'Rfc' => 'URE180429TM6',
    'Name' => 'UNIVERSIDAD ROBOTICA ESPAÑOLA',
    'Email' => 'ejemplo@ejemplo.com',
    'EmailOp1' => 'ejemplo@ejemplo.com',
    'FiscalRegime' => '601',
    'CfdiUse' => 'G03',
    'TaxZipCode' => '86991',
    'TaxResidence' => '86991',
    'NumRegIdTrib' => '131494-1055',
    'Address' => [
      'Street' => 'Calle de Pruebas',
      'ExteriorNumber' => '123',
      'InteriorNumber' => '456',
      'Neighborhood' => 'Colombia',
      'ZipCode' => '86991',
      'Locality' => 'Mexico',
      'Municipality' => 'Mexico Mun',
      'State' => 'Cd de Mexico',
      'Country' => 'MX',
    ],
  ],
  [
    'Id' => '',
    'Rfc' => 'ZUÑ920208KL4',
    'Name' => 'ZAPATERIA URTADO ÑERI',
    'Email' => 'ejemplo@ejemplo.com',
    'EmailOp1' => 'ejemplo@ejemplo.com',
    'FiscalRegime' => '601',
    'CfdiUse' => 'G03',
    'TaxZipCode' => '34541',
    'TaxResidence' => '34541',
    'NumRegIdTrib' => '131494-1055',
    'Address' => [
      'Street' => 'Calle de Pruebas',
      'ExteriorNumber' => '123',
      'InteriorNumber' => '456',
      'Neighborhood' => 'Colombia',
      'ZipCode' => '34541',
      'Locality' => 'Mexico',
      'Municipality' => 'Mexico Mun',
      'State' => 'Cd de Mexico',
      'Country' => 'MX',
    ],
  ]
);
$body_RFCs_Fisica = array(
  [
    'Id' => '',
    'Rfc' => 'FUNK671228PH6',
    'Name' => 'KARLA FUENTE NOLASCO',
    'Email' => 'ejemplo@ejemplo.com',
    'EmailOp1' => 'ejemplo@ejemplo.com',
    'FiscalRegime' => '605',
    'CfdiUse' => 'S01',
    'TaxZipCode' => '01160',
    'TaxResidence' => '01160',
    'NumRegIdTrib' => '131494-1055',
    'Address' => [
      'Street' => 'Calle de Pruebas',
      'ExteriorNumber' => '123',
      'InteriorNumber' => '456',
      'Neighborhood' => 'Colombia',
      'ZipCode' => '01160',
      'Locality' => 'Mexico',
      'Municipality' => 'Mexico Mun',
      'State' => 'Cd de Mexico',
      'Country' => 'MX',
    ],
  ],
  [
    'Id' => '',
    'Rfc' => 'IAÑL750210963',
    'Name' => 'LUIS IAN ÑUZCO',
    'Email' => 'ejemplo@ejemplo.com',
    'EmailOp1' => 'ejemplo@ejemplo.com',
    'FiscalRegime' => '605',
    'CfdiUse' => 'S01',
    'TaxZipCode' => '82525',
    'TaxResidence' => '82525',
    'NumRegIdTrib' => '131494-1055',
    'Address' => [
      'Street' => 'Calle de Pruebas',
      'ExteriorNumber' => '123',
      'InteriorNumber' => '456',
      'Neighborhood' => 'Colombia',
      'ZipCode' => '82525',
      'Locality' => 'Mexico',
      'Municipality' => 'Mexico Mun',
      'State' => 'Cd de Mexico',
      'Country' => 'MX',
    ],
  ]
);
$body =
  [
    'Id' => '',
    'Rfc' => 'CACX7605101P8',
    'Name' => 'XOCHILT CASAS CHAVEZ',
    'Email' => 'test@facturma.com',
    'FiscalRegime' => '601',
    'CfdiUse' => 'G03',
    'TaxZipCode' => '10740',
    'TaxResidence' => '10740',
    'NumRegIdTrib' => '131494-1055',
    'Address' => [
      'Street' => 'Calle de Pruebas',
      'ExteriorNumber' => '123',
      'InteriorNumber' => '456',
      'Neighborhood' => 'Colombia',
      'ZipCode' => '10740',
      'Locality' => 'Mexico',
      'Municipality' => 'Mexico Mun',
      'State' => 'Cd de Mexico',
      'Country' => 'MX',
    ],
  ];


try {  // Crear un cliente
  //$result = $facturama->post('Client', $body_RFCs_Fisica[0]);
  $result = $facturama->post('Client', $body);
  printf('<pre>%s<pre>', var_export($result, true));
} catch (\Facturama\Exception\RequestException $e) {
  // Manejo de errores específicos de la API
  printf('%s', $e->getMessage());
} catch (\Facturama\Exception\ResponseException $e) {
  // Manejo de errores en la respuesta de la API
  printf('%s', $e->getMessage());
} catch (\Exception $e) {
  // Manejo de cualquier otro error
  printf('%s', $e->getMessage());
}
