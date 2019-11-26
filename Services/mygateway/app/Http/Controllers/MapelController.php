<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MapelController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->url = env("SERVICE_MAPEL", null);
    }

    public function mapelGet() {
        $client=new Client();
        $response=$client->request('GET', $this->url);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function mapelPost(Request $request) {
        $client=new Client();
        $request_data=
        [ 
            'nama_mapel'=>$request->nama_mapel,
            'guru_id'=>$request->guru_id,
            'description'=>$request->description
        ];
        $response=$client->request('POST', $this->url, ['form_params'=>$request_data]);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function mapelPut($id, Request $request) {
        $client=new Client();
        $request_data=
        [ 
            'nama_mapel'=>$request->nama_mapel,
            'guru_id'=>$request->guru_id,
            'description'=>$request->description
        ];
        $response=$client->request('PUT', $this->url.$id, ['form_params'=>$request_data]);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function mapelDelete($id) {
        $client=new Client();
        $response=$client->request('DELETE', $this->url.$id);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }
}
