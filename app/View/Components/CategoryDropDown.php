<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class CategoryDropDown extends Component
{
    public function render()
    {
        return view('components.category-drop-down', [
            'categories' => Category::all()->unique(),
            'currentCategory' => Category::where('slug', request('category'))->first()
        ]);
    }
}
