<?php

define('ZOHO_CLIENT_ID', '1000.6VRHJKGRKBH5302BFI8R76BWZZPXNH');
define('ZOHO_CLIENT_SECRET', 'ca76cd3cc460ca06f8ac8682891ad31fbf7dd37b90');
define('ZOHO_REFRESH_TOKEN', '1000.9ac37ec509ec526a9c9444ca3281ab8e.93e196256155c5e7dbf662302d2d9e8e');

session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

$statusResponse = -8;
$response;

if (isset($_SESSION['idUser'])) {

    $leadData = $_POST;
    $files = $_FILES['files'];

    // Manejo de archivos subidos
    $uploadDir = __DIR__ . '/../views/app/dashboard/add/';
    $fileURLs = [];

    foreach ($files['name'] as $key => $name) {
        $filePath = $uploadDir . basename($name);
        if (move_uploaded_file($files['tmp_name'][$key], $filePath)) {
            $fileURLs[] = 'application/views/app/dashboard/add/' . basename($name);
        }
    }

    // Insertar cliente y manejar datos
    $leadData['email'] = strtolower($leadData['email']);
    $emailParts = explode('@', $leadData['email']);
    $leadData['email'] = $emailParts[0];
    $leadData['domain'] = $emailParts[1];

    $checkEmailResponse = $model->checkEmail($leadData['email'], $leadData['domain']);
    if ($checkEmailResponse >= 0) {

        $checkPhoneResponse = $model->checkPhone($leadData['phone']);
        if ($checkPhoneResponse > 0) {

            $insertEmailResponse = $model->insertEmail($leadData['email'], $leadData['domain'], $checkEmailResponse, 2, 0);
            if ($insertEmailResponse > 0) {

                $insertLeadResponse = $model->insertLead($leadData['name'], $leadData['last_name'], $insertEmailResponse, $_SESSION['idUser'], $leadData['idGender'], $leadData['idMedium']);
                if ($insertLeadResponse > 0) {

                    $statusResponse = 1;

                    $insertPhoneResponse = $model->insertPhone($leadData['phone'], 1, 2, 2, 0);
                    if ($insertPhoneResponse > 0) {
                        $updateLeadPhoneResponse = $model->update('leads', 'idPhone', $insertPhoneResponse, 'idLead', $insertLeadResponse, 'ii');
                        $statusResponse = (!is_null($updateLeadPhoneResponse)) ? 2 : -5;
                    } else {
                        $statusResponse = -4;
                    }

                    if (!empty($leadData['address'])) {
                        $insertAddressResponse = $model->insertABC('addresses', 'address', $leadData['address'], 'idCountryCode', 1, 'idAddressType', $model::LEAD_ADDRESS_ID, 'sii');
                        if ($insertAddressResponse > 0) {
                            $updateAddressResponse = $model->update('leads', 'idAddress', $insertAddressResponse, 'idLead', $insertLeadResponse, 'ii');
                            $statusResponse = (!is_null($updateAddressResponse)) ? 3 : -7;
                        } else {
                            $statusResponse = -6;
                        }
                    }

                    // Guardar URLs de archivos en la base de datos
                    foreach ($fileURLs as $fileURL) {
                        $model->update('leads', 'URL', $fileURL, 'idLead', $insertLeadResponse, 'si');
                    }

                    // Código para insertar datos en Zoho CRM sigue igual...

                } else {
                    $statusResponse = -3;
                }
            } else {
                $statusResponse = -2;
            }
        } else {
            $statusResponse = -1;
        }
    } else {
        $statusResponse = 0;
    }

    $response = '{"status": ' . $statusResponse . ', "errorReport": ' . json_encode($model->errorReport) . '}';
} else {
    $model->destroySession();
    $response = '{"status": ' . $statusResponse . '}';
}

echo $response;

?>
