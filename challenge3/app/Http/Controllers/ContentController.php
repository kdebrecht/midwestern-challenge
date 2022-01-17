<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Content;


class ContentController extends Controller
{
    //
    /*
        I probably would not have structured the actual applicaiton
        in this manner. Because this is such a simple application duplication
        would have been ok.  This was basically an illustration of a possible
        way to handle responses

    */



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

        // prepare result for response
        $content = $content ? [$content] : [];

        return $this->respond($content);
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

        return redirect(Route('content.show', $newContent['id']));

    }



}
