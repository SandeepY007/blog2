<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function __invoke(MailchimpNewsletter $newsletter) {
        
        request()->validate(['email' => 'required|email']);
    
        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'This email is not subscibe to the news'
            ]);
        }
    
        return redirect('/')
            ->with('success', 'You are subscribed to the news letter');
    }
}
