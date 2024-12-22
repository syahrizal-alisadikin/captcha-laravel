<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function myCaptcha()

    {

        return view('captcha');
    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function myCaptchaPost(Request $request)

    {

        request()->validate(
            [

                'email' => 'required|email',

                'password' => 'required',

                'captcha' => 'required|captcha'

            ],

            ['captcha.captcha' => 'Invalid captcha code.']
        );

        dd("You are here :) .");
    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function refreshCaptcha()

    {

        return response()->json(['captcha' => captcha_img()]);
    }
}
