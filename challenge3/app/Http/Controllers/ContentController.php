<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Content;


class ContentController extends Controller
{
    //




     /**
     * Return JSON Object of all content
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $content = Content::all();

        return $this->respond($content);
    }

    /**
     * Return JSON Object of single record
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::find($id);

        //$response = json_encode($content);
        if(! $content){ $content = []; }else{ $content =[$content];}

        return $this->respond($content);
    }

    private function respond($data)
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
    private function success($data)
    {
        return ['success'=> 'true', 'data' => $data];
    }

    /**
     * Returns array for failed api usage
     *
     * @param array $data
     * @return array
     */
    private function fail($message)
    {
        return ['success'=> 'false', 'data' => $message];
    }


    /**
     * Save record, using Request for time sake
     * TODO: Validate, Sanitize
     *
     * @param Request $request
     * @return redirect
     */
    public function store(Request $request)
    {

        //ddd($request);

        $new = [];
        $new['title'] = $request['title'];
        $new['content'] = $request['content'];
        $new['image_url'] = '/images/Rabbit.png';

        //TODO Validate response

        $newContent = Content::create($new);

        $route = Route('content.show', $newContent['id']);

        return redirect($route);



    }



}
