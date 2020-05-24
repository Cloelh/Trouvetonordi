<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function mysql_xdevapi\expression;


class TestController extends Controller
{
    public function helloWorld()
    {
        return view("test");

    }
//
//    public function addFilter()
//    {
//        return view('testBis');
//    }


    public function showList()
    {
//        $this->listOf(expression());
//        return 'ça work';
        $element = $_GET['date'];
        $this->listOf($element);
        return $this->addFilter();


    }

    public function listOf(string $element)
    {

//        $users = User::whereRaw("name LIKE CONCAT(?, '%')"), [$s])->get();

//        $users = DB::select('select * from users where active = ?', [1]);
//        return view('user.index', ['users' => $users]);

        $sql = 'select '.$element.' from ordinateur';
        $elements = DB::select($sql);
        var_dump($elements);

//        return view('test', ['elements' => $elements]);

    }


}
