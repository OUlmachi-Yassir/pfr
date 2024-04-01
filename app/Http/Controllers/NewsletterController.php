<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{

    public function __invoke(Newsletter $newsletter)
    {

        request()->validate(['email'=>'required|email']);
                

            try{

                $newsletter->subscribe(request('email'));
            }catch(Exception $e){

               throw ValidationException::withMessages([

                    'email'=>'this email cold not be add to our newsletter lest'
                ]);
            }
                return redirect('/')->with('success','you are now signed up for our newsletter!');
    }
}
