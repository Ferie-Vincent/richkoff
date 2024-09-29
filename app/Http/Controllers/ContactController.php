<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }
    public function submit(Request $request)
    {
        // Vérifier le champ botcheck pour éviter les bots
        if ($request->input('botcheck')) {
            return redirect()->back()->with('error', 'Bot détecté.');
        }

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'fullName'   => 'required|string|max:255',
            'email'      => 'required|email',
            'objet'      => 'required|string|max:255',
            'telephone'  => 'required|string|max:20',
            'message'    => 'required|string',
        ]);

        // Préparer les données pour l'email
        $emailData = [
            'name'           => $validatedData['fullName'],
            'email'          => $validatedData['email'],
            'subject'        => $validatedData['objet'],
            'telephone'      => $validatedData['telephone'],
            'messageContent' => $validatedData['message'],
        ];

        try {
            // Envoyer l'email
            Mail::to('infos@richkoff.com')->send(new ContactFormMail($emailData));

            // Rediriger avec un message de succès
            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
        } catch (\Exception $e) {
            // Gérer les erreurs d'envoi d'email
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre message.');
        }
    }
}