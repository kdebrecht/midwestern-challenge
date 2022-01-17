<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    /**
     * returns prepared response depending on what is provided
     *
     * @param array $data
     * @return void
     */
    public function respond($data)
    {

        // If there is an array, proceeed with
        // returning a positive result
        if(sizeof($data)>0){
            $payload = $this->success($data);
        }else{
            $payload = $this->fail('Result not found');
        }

        //encode response
        $response = json_encode($payload);

        return response($response,200)
                ->withHeaders(  [
                    'Content-Type' => 'application/json',
                    'Charset' => 'utf-8'
                    ]);
    }

    /**
     * Returns array for successful api response
     *
     * @param array $data
     * @return array
     */
    public function success($data)
    {
        return ['success'=> 'true', 'data' => $data];
    }

    /**
     * Returns array for failed api usage
     *
     * @param array $data
     * @return array
     */
    public function fail($message)
    {
        return ['success'=> 'false', 'data' => $message];
    }


}
