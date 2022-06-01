<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        Mail::to('vladapantic@hotmail.com')
            ->send(new ContactEmail($request->validated()));
    }
}
