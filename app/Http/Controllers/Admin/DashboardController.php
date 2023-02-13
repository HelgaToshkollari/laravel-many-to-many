<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home(){
        $user = Auth::user();
        $types= Type::all();
        $projects= Project::all();
        

        if ($user->role === "admin") {
            $users = User::all();
        }

        return view("admin.dashboard", [
            "users" => $users ?? null,
            "types" => $types ?? null,
            "projects" => $projects ?? null
        ]);
        
    }
}
