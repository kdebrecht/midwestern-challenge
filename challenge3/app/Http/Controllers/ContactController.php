<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
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
        $contact = Contact::all();

        return $this->respond($contact);
    }

    /**
     * Save record, using Request
     * TODO: Validate, Sanitize
     *
     * @param Request $request
     * @return redirect
     */
    public function store(Request $request)
    {


        // this could have been done cleaner, but this was the quickest
        // way to get it submitted.

        $new = [];

        $new['first_name'] = $request['firstName'];
        $new['last_name'] = $request['lastName'];
        $new['title'] = $request['lastName'];
        $new['email'] = $request['email'];
        $new['message'] = $request['message'];

        //TODO Validate response


        $newContact = Contact::create($new);



        return redirect(Route('contact.show', $newContact['id']));

    }




    /**
     * Return JSON Object of single record
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);

        // prepare result for response
        $contact = $contact ? [$contact] : [];

        return $this->respond($contact);
    }



}
