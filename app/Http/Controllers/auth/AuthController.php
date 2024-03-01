<?php 

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterSaveRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Repositories\interface\AuthInterface;

class AuthController extends Controller{
    private $AuthInterface;

    public function __construct(AuthInterface $AuthInterface){
        $this->AuthInterface = $AuthInterface;
    }

    public function index (){
        $user = User::count();
        if($user === 0){
            return view("auth.register");
        }else{
            return redirect()->back();
        }
    
    }

    public function register(RegisterSaveRequest $request){
        $data = $this->AuthInterface->register($request);

        return $data;
    }

}