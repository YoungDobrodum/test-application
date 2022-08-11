<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $applications = DB::table('applications')
            ->where('executor')
            ->leftJoin('categories', 'categories.id','=','applications.category_id')
            ->where('title')
            ->where('status_id', '=', '2')
            ->where('decision_date', '=','2022-08-02 23:17:18')
            ->where('decision_date', '=','2022-08-09 23:17:18');

//        dd($applications);
        return view('main.index', compact('applications'));
    }
    public function create()
    {
        $applications = Application::all();
        $categories = Category::all();
        $states = State::all();
        return view('main.create', compact('categories', 'states', 'applications'));
    }
}
