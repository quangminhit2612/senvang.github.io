<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\ProductRepository;

class ProductManagementController extends Controller {

    public function __construct(ProductRepository $productRepo) {
        $this->productRepo = $productRepo;
    }

    public function index(Request $request) {
        $records = $this->productRepo->readFE($request);
        return view('frontend.product_management.index',  compact('records'));
    }

    public function login() {
        return view('frontend.product_management.login');
    }

    public function postLogin(Request $request) {
        $input = [
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($input)) {
            $user = Auth::user();
            $user->save();
            session_start();
            $_SESSION['KCFINDER'] = []; //
            $_SESSION['KCFINDER'] = array('disabled' => false, 'uploadURL' => "/public/upload");
            return Redirect::route('product_management.index');
        }
        return Redirect::route('product_management.login')->with('error', 'Wrong login account');
    }

    public function contact() {
        return view('frontend/contact/index');
    }

}
