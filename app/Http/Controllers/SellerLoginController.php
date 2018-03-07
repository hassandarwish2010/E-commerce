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
       // dd('done');
            // $rules = array (
                    
            //         'name' => 'required',
            //         'password' => 'required' 
            // );
            // $validator = Validator::make ( Input::all (), $rules );
            // if ($validator->fails ()) {
            //     return Redirect::back ()->withErrors ( $validator, 'login' )->withInput ();
            // } else {
                // if (Auth::attempt ( array (
                        
                //         'name' => $request->get ( 'name' ),
                //         'password' => $request->get ( 'password' ) 
                // ) )) {
                //     session ( [ 
                            
                //             'name' => $request->get ('name') 
                //     ] );
                //     return view('seller.showProducts');
                // } else {
                //     Session::flash ( 'message', "Invalid Credentials , Please try again." );
                //     return view('seller.showProducts');
                // }
            //}

            // $name=$request->get('name');
            // if (Auth::attempt(['name' => $name]))
            //  {     
            //     return view('seller.showProducts');   
            //  }
            //  else 
            //  {
            //      return Redirect::back();
            //  }
            
            Auth::login($seller, true);

            // $this->validate($request,[
            //     'email' => 'required|email',
            //     'password' => 'required|min:6'
            // ]);
            // //attempt to login the admins in
            // if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password])){
            //     //if successful redirect to admin dashboard
            //     return redirect()->intended(route('seller.showProducts'));
            // }
            // //if unsuccessfull redirect back to the login for with form data
            // return redirect()->back()->withInput($request->only('email'));
        }
        public function register(Request $request) {
            // $rules = array (
            //         'email' => 'required|unique:sellers|email',
            //         'name' => 'required|unique:sellers|alpha_num|min:4',
            //         'company_name' => 'required|unique:companies|alpha_num|min:4',
            //         'password' => 'required|min:6' 
            // );
            // $validator = Validator::make ( Input::all (), $rules );
            // if ($validator->fails ()) {
            //     return Redirect::back ()->withErrors ( $validator, 'register' )->withInput ();
            // } else {
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
