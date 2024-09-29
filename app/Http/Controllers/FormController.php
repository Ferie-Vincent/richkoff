<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'full-name' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'quantity' => 'required|integer|min:1',
            'paiement' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Préparer les données du formulaire
        $formData = $request->only(['full-name', 'telephone', 'quantity', 'paiement']);

        // Envoi de l'email
        try {
            Mail::send(new FormSubmissionMail($formData));
        } catch (\Exception $e) {
            // Gérer les erreurs d'envoi
            return redirect()->back()->with('error', 'Erreur lors de l\'envoi du formulaire. Veuillez réessayer plus tard.');
        }

        return redirect()->back()->with('success', 'Formulaire envoyé avec succès !');
    }
}
