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

$clientId = 'KKzEkI-XznRK2kcmBwampg2';

$body = [
  'Id' => $clientId,
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

try {
  $result = $facturama->put('Client/' . $clientId, $body);
  printf('<pre>%s<pre>', var_export($result, true));
} catch (\Facturama\Exception\RequestException $e) {
  // Manejo de errores específicos de la API
  printf('Error en la solicitud: %s', $e->getMessage());
} catch (\Facturama\Exception\ResponseException $e) {
  // Manejo de errores en la respuesta de la API
  printf('Error en la respuesta: %s', $e->getMessage());
} catch (\Exception $e) {
  // Manejo de cualquier otro error
  printf('Ocurrió un error inesperado: %s', $e->getMessage());
}
