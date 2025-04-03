<?php

namespace App\Http\Controllers;

use view;
use App\Models\Evaluations;


class TableController extends Controller
{
    public function toDisplayPage(){
    $evaluation = Evaluations::with(['owner' => function ($q) {
            $q->select('*');
    }])->with(['coffeeshop' => function ($q) {
            $q->select('*');
    }])->with(['infraction' => function ($q) {
            $q->select('*');
     }])
    ->get();
    return view ('tableView', compact(var_name: 'evaluation'));
}
}
