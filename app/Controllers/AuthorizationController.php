<?

namespace App\Controllers;

use App\Request;

class AuthorizationController
{
    public function index()
    {
        return view('signin');
    }
    public function signin()
    {
        dd(Request::values());
    }
}
