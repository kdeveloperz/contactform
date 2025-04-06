<?php

namespace Kacedeveloperz\Contactform\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Kacedeveloperz\Contactform\Http\Requests\ContactFormRequest;
use Kacedeveloperz\Contactform\Models\Contact;
use Kacedeveloperz\Contactform\Mail\InquiryEmail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contactform::create');
    }

    public function store(ContactFormRequest $request)
    {
        
            Contact::create($request->validated());
            $admin_email = \config('kace_contactform.admin_email');

            if($admin_email === null || $admin_email === ''){
                echo 'The valuse of admin email not set';
                return back()->with('error', 'The value of admin email not set');
            }
        try {
            Mail::to($admin_email)->send(new InquiryEmail($request->validated()));
            return back()->with('success', 'Contact created successfully.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Contact created failed.');
        }
    }
}
