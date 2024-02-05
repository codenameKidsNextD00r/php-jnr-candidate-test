<?php

require_once __DIR__ . '/vendor/autoload.php';

class GoogleSheetsIntegration
{
    private $spreadsheetId;
    private $service;

    public function __construct($spreadsheetId, Google_Service_Sheets $service)
    {
        $this->spreadsheetId = $spreadsheetId;
        $this->service = $service;
    }

    public function get_products()
    {
        $range = 'Sheet1!A:C'; // sheet name and range based on Google Sheets structure
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        $values = $response->getValues();

        if (empty($values)) {
            return [];
        }

        $products = [];
        foreach ($values as $row) {
            $products[] = [
                'id' => $row[0],
                'name' => $row[1],
                'price' => $row[2],
            ];
        }

        return $products;
    }
}

// credentials file path
$credentialsPath = __DIR__ . '/credentials.json';

// document ID
$spreadsheetId = '1DU1OdM7uFMYAtJCyyU8dNR7H-Mkp-9ZJoCTK-wRkMwY';

// Initialize the Google Sheets API service
// $client = new Google_Client();
// $client->setAuthConfig($credentialsPath);
// $client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);
// $service = new Google_Service_Sheets($client);

// // create instance of GoogleSheetsIntegration class
// $googleSheetsIntegration = new GoogleSheetsIntegration($spreadsheetId, $service);

// // get products from Google Sheets
// $products = $googleSheetsIntegration->get_products();

// //dump products 
// var_dump($products);
