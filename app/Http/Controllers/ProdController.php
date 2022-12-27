<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;
use App\Models\Category;
use App\Models\Unit as ModelsUnit;

class ProdController extends Controller
{
    public function showProds(){
        // dd(request(['search', 'category']));
        return view('prods.showProds', [
            // 'prods' => Production::with('category', 'user')->get()->sortBy('id')

            // we deleted the with part because we already mentioned that we should call both user and category relationships
            // in 'with' param in the Production eloquent model

            // for example, if for a particular view, we wouldn't call the relationships because it's not necessary
            // we could call the method without to cancel them
            // here's an example, for cancelling both of them:

            // 'prods' => Production::without('category', 'user')->get()->sortBy('id')

            'prods' => Production::latest()->filter(request(['search', 'category', 'user']))->paginate(2)->appends(request()->all()),
            'units' => ModelsUnit::all()->unique()
        ]);
    }

    public function prodDetails(Production $prod){
        return view('prods.prodDetails', [
            'prod' => $prod,
            'units' => ModelsUnit::all()->unique()
        ]);
    }
}
