<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Validator;

use Session ; 

class ContactController extends Controller
{
    

    public function contact ()
    {


        return view ('contact') ; 
    }







    public function save (Request $request)
    {

        $validator = Validator::make($request->all(), [
                /*
                'email' =>'required|email',
                
                'nom' =>'required' ,
                'adresse' =>'required',
                'message' =>'required' ,
                'telephone' =>'required',*/
                    
                'g-recaptcha-response' => 'recaptcha',

                
            ])  ;
         


            if ($validator->fails()) {
                return redirect()->Back()->withInput()->withErrors($validator);
       
             }
        


            // envoie l'email a l'administrateur 

             
           $data = [

            'nom' => $request->nom,
            'email' =>$request->email,
            'adresse' =>$request->adresse,
            'telephone' =>$request->telephone,
            'message' =>$request->message,
            'countries' =>json_encode($request->countries)
                       ];
            
                       try {
                        // Send the email
                        Mail::to('nakourimayssa@gmail.com')->send(new MyTestMail($data));
                    
                        // Email sent successfully
                        $message = 'Email envoyé avec succée!';
                        $status = 'success';
                    } catch (\Exception $e) {
                        \Log::error('Exception during email sending: ' . $e->getMessage());
                        $message = 'Erreur lors de lenvoi de le-mail. Veuillez réessayer plus tard.';
                        $status = 'error';
                    }
                    
                    return redirect()->back()->with(['message' => $message, 'status' => $status]);
                    
            
    }
}


