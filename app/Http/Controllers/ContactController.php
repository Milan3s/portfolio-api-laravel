<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController
{
    /**
     * Obtener todos los contactos
     */
    public function index()
    {
        return response()->json(
            Contact::latest()->get()
        );
    }

    /**
     * Crear nuevo contacto
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create([

            ...$request->validated(),

            /**
             * Información automática
             */
            'ip_address' => request()->ip(),

            'user_agent' => request()->userAgent(),
        ]);

        return response()->json([
            'message' => 'Mensaje enviado correctamente',
            'data' => $contact
        ], 201);
    }

    /**
     * Obtener contacto por ID
     */
    public function show(Contact $contact)
    {
        return response()->json($contact);
    }

    /**
     * Actualizar contacto
     */
    public function update(
        ContactRequest $request,
        Contact $contact
    ) {
        $contact->update(
            $request->validated()
        );

        return response()->json([
            'message' => 'Contacto actualizado correctamente',
            'data' => $contact
        ]);
    }

    /**
     * Eliminar contacto
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return response()->json([
            'message' => 'Contacto eliminado correctamente'
        ]);
    }
}
