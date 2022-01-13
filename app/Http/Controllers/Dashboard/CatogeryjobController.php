<?php

namespace App\Http\Controllers\Dashboard;



use App\Slider;
use Intervention\Image\Facades\Image;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Hash;
class CatogeryjobController extends Controller
{
    public function index(Request $request)
    {

       //abort_unless(\Gate::allows('read_categories'), 403);

        $jobs =Slider::when($request->search, function ($q) use ($request) {

            return $q->whereTranslationLike('name', '%' . $request->search . '%');

        })->latest()->paginate(25);

        return view('dashboard.complains.index', compact('jobs'));

    }//end of index

    public function create()
    {
      // abort_unless(\Gate::allows('create_categories'), 403);

        return view('dashboard.complains.create');

    }//end of create

    public function store(Request $request)
    {


        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }//end of for each

        $request->validate($rules);

       $slider= Slider::create($request->except(['_token','_method']));
//
        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->save(public_path('/uploads/' . $filename));
            $slider->image = $filename;
            $slider->save();
        }





       session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.catogeryjobs.index');

    }//end of store

    public function edit($id)
    {
        $category=Slider::find($id);

        return view('dashboard.complains.edit',compact('category'));

    }//end of edit

    public function update(Request $request,$id )
    {
        $catogery=Slider::find($id);

        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }//end of for each

        $request->validate($rules);

        $catogery->update($request->all());

        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->save(public_path('/uploads/' . $filename));
            $catogery->image = $filename;
            $catogery->save();
        }

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.catogeryjobs.index');

    }//end of update

    public function destroy($id )
    {

      //  abort_unless(\Gate::allows('category_delete'), 403);
     $catogery=Slider::find($id);

        $catogery->translations()->delete();
        $catogery->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.catogeryjobs.index');

    }//end of destroy







}//end of controller
