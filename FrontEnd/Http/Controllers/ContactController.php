<?php

namespace FrontEnd\Http\Controllers;


use Config;
use FrontEnd\Mail\SimpleMail;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Lang;
use Mail;

class ContactController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [];
//        return view('contact');
    }

    public function contactForm(Request $request)
    {
        if (!$request->has('form')) {
            return response()->json(['success' => false, 'reason' => 'Invalid form 123']);
        }

        $formService = new \Mcms\FrontEnd\FormBuilder\FormBuilderService();
        $form = $formService->bySlug($request->form);
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $request->input('token')
            ]
        ]);
        $captchaResult = json_decode((string) $response->getBody());

        if (!$captchaResult->success) {
            return ['success' => true, 'captcha' => false ];
        }

        // now send the email
        Mail::to(Config::get('mail.from.address'), Config::get('mail.from.name'))
            ->bcc('mbouclas@gmail.com', 'Michael Bouclas')
            ->sendNow(new SimpleMail($request->all(), Lang::get('emails.contactForm.subject', [
                'siteName' => Config::get('core.siteName')
            ])));

        return ['success' => true, 'message' => 'email sent'];
    }

    public function post(Request $request)
    {
        if (!$request->has('g-recaptcha-response')) {
            return ['success' => true, 'captcha' => false ];
        }

        // verify the captcha
        $client = new Client();

        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $request->input('g-recaptcha-response')
            ]
        ]);
        $captchaResult = json_decode((string) $response->getBody());
        if (!$captchaResult->success) {
            return ['success' => true, 'captcha' => false ];
        }

        //validate and send mail
        Mail::to(Config::get('mail.from.address'), Config::get('mail.from.name'))
            ->bcc('mbouclas@gmail.com', 'Michael Bouclas')
            ->sendNow(new SimpleMail($request->all(), Lang::get('emails.contactForm.subject', [
                'siteName' => Config::get('core.siteName')
            ])));


        return ['success' => true ];
    }
}
