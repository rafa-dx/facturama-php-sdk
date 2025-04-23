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

$params =
    [
        'search' => '',
        'start' => '0',
        'length' => '100'
    ];

try {
    $result = $facturama->get('Clients', $params);
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
