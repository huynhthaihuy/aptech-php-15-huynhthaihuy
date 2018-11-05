<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request; /*import kái nay neu muon su dung request*/
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\User;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $users = DB::table('users')->get();
        return view('list', ['users' => $users]);
    }
}