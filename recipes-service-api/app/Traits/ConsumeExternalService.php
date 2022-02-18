<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

trait ConsumeExternalService
{


    /**
     * Send request to any service
     * @param $base_uri
     * @param $secret
     * @param $method
     * @param $requestUrl
     * @param array $formParams
     * @param array $headers
     * @return mixed
     */
    public function performRequest($base_uri, $secret, $method, $requestUrl, array $formParams = [], $headers = [])
    {
        $headers['Authorization'] = $secret;

        if ($method == "POST") {
            $response = Http::withHeaders($headers)->withBody(
                json_encode($formParams), "application/json")->post($base_uri . $requestUrl);

            return json_decode($response->body(), true);
        }

//        $client = new Client();
//        $response = $client->request('GET', $base_uri.$requestUrl, [
//            'query' => ['foo' => 'bar']
//        ]);

        //        return (($response->getBody()));

        $response = Http::get($base_uri.$requestUrl,[$formParams]);
        return (($response->json()));
    }



    /**
     * Send request to any service
     * @param $base_uri
     * @param $secret
     * @param $method
     * @param $requestUrl
     * @param array $formParams
     * @param array $headers
     * @return mixed
     */
    public function performRequestWithStatus($base_uri,$secret,$method, $requestUrl, $formParams = [], $headers = [])
    {
        $headers['Authorization'] = $secret;

        if ($method == "POST") {
            $response = Http::withHeaders($headers)->withBody(
                json_encode($formParams), "application/json")->post($base_uri . $requestUrl);
            $status = $response->status();
            return ["response" => json_decode($response->body(), true), "status" => $status];
        }

        $query = http_build_query($formParams);
        $response = Http::get($base_uri.$requestUrl."?".$query);
        $status = $response->status();
        return ["response" => ($response->json()),"status" => $status];
    }

    /**
     * Send request to any service
     * @param $base_uri
     * @param $secret
     * @param $method
     * @param $requestUrl
     * @param array $formParams
     * @param array $headers
     * @return mixed
     */
    public function performRequestWithFile($base_uri,$secret, $requestUrl, $formParams = [], $file="", $file_name="")
    {
            $headers['Authorization'] = $secret;

            $response = Http::attach('file', $file, $file_name)
                ->post($base_uri . $requestUrl, $formParams);

            $status = $response->status();
            return ["response" => json_decode($response->body(), true), "status" => $status];

    }

}
