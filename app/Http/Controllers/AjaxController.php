<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use Response;

class AjaxController extends Controller
{
    public function get_communes(){
        $wilaya = $_POST['wilaya'];
        $communes = Commune::where('wilaya_id', '=', $wilaya)->get();
        $html = '<option value="no-choice">----------</option>';
        foreach ($communes as $key => $value) {
            $html .= '<option value="' . $value->id . '">' . $value->label . '</option>';
        }
        return Response::json($html, 200);
    }
}
