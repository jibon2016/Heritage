<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchFilterController extends Controller
{
    public function searchFilter(Request $request)
    {
        $property = Property::where('name', 'LIKE', '%'. request('search').'%')->take(5)->get();

        return Inertia::render('SearchResult',[
            'properties' => $property ?? Null,
            'search' => request('search'),
        ]);
    }
}
