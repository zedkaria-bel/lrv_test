<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
use App\Models\Wilaya;

class CategoryDropDown extends Component
{
    public function render()
    {
        return view('components.category-drop-down', [
            'categories' => Category::all()->unique(),
            'wilayas' => Wilaya::all(),
            'currentCategory' => Category::where('slug', request('category'))->first(),
            'currentWilaya' => Wilaya::where('id', request('wilaya'))->first()
        ]);
    }
}
