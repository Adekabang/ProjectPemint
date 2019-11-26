<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SmkController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->url = env("SERVICE_SMK", null);

    }

    public function smkGet() {
        $client=new Client();
        $response=$client->request('GET', $this->url);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function smkPost(Request $request) {
        $client=new Client();
        $request_data=
        [
            'nama_smk'=>$request->nama_smk,
            'alamat'=>$request->alamat
        ];
        $response=$client->request('POST', $this->url, ['form_params'=>$request_data]);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function smkPut($id, Request $request) {
        $client=new Client();
        $request_data=
        [
            'nama_smk'=>$request->nama_smk,
            'alamat'=>$request->alamat
        ];
        $response=$client->request('PUT', $this->url.$id, ['form_params'=>$request_data]);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function smkDelete($id) {
        $client=new Client();
        $response=$client->request('DELETE', $this->url.$id);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }
}
