<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class gatewayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function mapelGet()
    {
        $client = new Client();
    	$response = $client->request( 'GET', 'http://localhost:8000/api/mapel');
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();

    	return $body;
    }

    public function mapelPost(Request $request)
    {
        $client = new Client();
        $request_data = [
            'nama_mapel' => $request->nama_mapel,
            'guru_id' => $request->guru_id,
            'description' => $request->description
        ];
    	$response = $client->request( 'POST', 'http://localhost:8000/api/mapel', [
            'form_params'=>$request_data
        ]);
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();

    	return $body;
    }

    public function mapelPut($id,Request $request)
    {
        $client = new Client();
        $request_data = [
            'nama_mapel' => $request->nama_mapel,
            'guru_id' => $request->guru_id,
            'description' => $request->description
        ];
    	$response = $client->request( 'PUT', "http://localhost:8000/api/mapel/$id", [
            'form_params'=>$request_data
        ]);
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();

    	return $body;
    }
    public function mapelDelete($id)
    {
        $client = new Client();
    	$response = $client->request( 'DELETE', "http://localhost:8000/api/mapel/$id");
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();

    	return $body;
    }
}
