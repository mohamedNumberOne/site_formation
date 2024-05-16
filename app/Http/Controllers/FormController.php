<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    public function add_info(StoreFormRequest $request)
    {


        $confirm =  $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'formation' => 'required',
            'tlf' => 'numeric',

            // Autres règles de validation...
        ]);



        if ($confirm) {
            $user = new Form();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->formation = $request->formation;
            $user->message = $request->message;
            $user->tlf = $request->tlf;

            $user->save();


            $to = "mohamedmld954@gmail.com";
            $subject = "nouvelle inscription";
            $message =   $request->name . "\n " .
                $request->formation  . " \n "
                . $request->message . " \n " . $request->tlf;

            // En-têtes de l'e-mail
            $headers = "From: contact@formation-dev-web.com\r\n";

            $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

            // Envoyer l'e-mail
            // if (mail($to, $subject, $message, $headers)) {
            //     echo "E-mail envoyé avec succès.";
            // } else {
            //     echo "Erreur lors de l'envoi de l'e-mail.";
            // }

            return redirect()->back()->with("msg",  "   Nous avons reçu votre message, Merci!   ");
        } else {
            return redirect()->back()->with("msg",  "  Erreur! Verifier le Formulaire ");
        }
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
