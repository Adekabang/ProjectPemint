<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->url = env("SERVICE_USER", null);
    }

    public function userGet() {
        $client=new Client();
        $response=$client->request('GET', $this->url);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function userPost(Request $request) {
        $client=new Client();
        $request_data=
        [
            'username'=>$request->username,
            'password'=>$request->password,
            'password_confirmation'=>$request->password_confirmation
        ];
        $response=$client->request('POST', $this->url, ['form_params'=>$request_data]);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function userPut($id, Request $request) {
        $client=new Client();
        $request_data=
        [
            'username'=>$request->username,
            'password'=>$request->password,
            'password_confirmation'=>$request->password_confirmation
        ];
        $response=$client->request('PUT', $this->url.$id, ['form_params'=>$request_data]);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }

    public function userDelete($id) {
        $client=new Client();
        $response=$client->request('DELETE', $this->url.$id);
        $statusCode=$response->getStatusCode();
        $body=$response->getBody()->getContents();

        return $body;
    }
}
