<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('contacts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'firstName' => 'required|max:255',
      'lastName'  => 'required|max:255',
      'email'     => 'required|max:255',
      'website'   => 'required|max:255',
      'comments'  => 'required|max:255',
    ]);

    $contact             = new Contact;
    $contact->first_name = $validatedData['firstName'];
    $contact->last_name  = $validatedData['lastName'];
    $contact->email      = $validatedData['email'];
    $contact->website    = $validatedData['website'];
    $contact->comments   = $validatedData['comments'];
    $contact->save();

    return response()->json([
      'status' => 'Wonderful! Thanks for the feedback.',
    ]);
  }
}
