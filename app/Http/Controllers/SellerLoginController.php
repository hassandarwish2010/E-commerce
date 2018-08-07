<?php

namespace App\Http\Controllers;
use App\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Company;
use Hash;
use Auth;
use Redirect;

use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SellerLoginController extends Controller
{
    //
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function showRegisterForm() {
        return view('seller.registerSeller');
    }
    public function showLoginForm() {
        return view('seller.loginSeller');
    }

  
    public function login(Request $request) {

            Auth::login($seller, true);

         
        }
        public function register(Request $request) {
        
                $comp=new Company();
                $comp->company_name=$request->get ( 'company_name' );
                $comp->save();
                //$comp = Company::create(request(['company_name']));

                $seller = new Seller ();
                $seller->name = $request->get ( 'name' );
                $seller->email = $request->get ( 'email' );
                $seller->address = $request->get ( 'address' );
                $seller->phone = $request->get ( 'phone' );
                $seller->password = Hash::make ( $request->get ( 'password' ) );
                $seller->remember_token = $request->get ( '_token' );
                
                $comp->sellers()->save ($seller);

                //auth()->login($seller);
                return Redirect::back ();
            //}
       }
        public function logout() {
            Session::flush ();
            Auth::logout ();
            return Redirect::back ();
        }
}
