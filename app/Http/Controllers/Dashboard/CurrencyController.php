<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Catogery;
use App\Models\Currency;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {

        //abort_unless(\Gate::allows('read_categories'), 403);

        $currencies = Currency::latest()->paginate(25);

        return view('dashboard.currencies.index', compact('currencies'));

    }//end of index

    public function create()
    {
        // abort_unless(\Gate::allows('create_categories'), 403);




        return view('dashboard.currencies.create');

    }//end of create

    public function store(Request $request)
    {
//
//return $request;


        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }//end of for each

        $request->validate($rules);

        Currency::create($request->all());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.currencies.index');

    }//end of store

    public function edit($id)
    {
        $category=Currency::find($id);
        return view('dashboard.currencies.edit', compact('category'));

    }//end of edit

    public function update(Request $request, $id)
    {
        $category=Currency::find($id);
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];

        }//end of for each

        $request->validate($rules);

        $category->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.currencies.index');

    }//end of update

    public function destroy($id)
    {
        $category=Currency::find($id);
        //  abort_unless(\Gate::allows('category_delete'), 403);

        $category->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.currencies.index');

    }//end of destroy

}//end of controller
