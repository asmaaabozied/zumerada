<?php

namespace App\Http\Controllers\Dashboard;

use App\Catogery;
use App\Slider;
use App\Image;

use App\Mail\MailMessage;
use App\Order;
use App\Store;
use App\Subscribe;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Modules\Geography\Entities\Geography;

class SellerController extends Controller
{


    public function SendEmail(Request $request, $id)
    {


        $request->validate([

            'password' => 'required|confirmed',

        ]);

        $users = Store::find($id);


        $users['password'] = bcrypt($request->password);
        $users->save();
        $usr = User::where('email', $users->email)->first();
        $usr['password'] = $users['password'];
        $usr->save();


        $user = $request->password;

        Mail::to($users->email)->send(new MailMessage($user));

        session()->flash('success', __('site.email_successfully'));

        return redirect()->route('dashboard.sellers.index');


    }

    public function sendEmailorders($id)
    {

        $user = Store::find($id);


        return view('dashboard.sellers.sendemail', compact('user'));

    }


    public function index(Request $request)
    {
        //abort_unless(\Gate::allows('read_jobs'), 403);

        $sellers = User::where('type','seller')->where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%')
                    ->orWhere('phone', 'like', '%' . $request->search . '%')
                    ->orWhere('created_at', 'like', '%' . $request->search . '%');
            });
        })->latest()->paginate(25);

        return view('dashboard.sellers.index', compact('sellers'));

    }//end of index

    public function create()
    {
        return view('dashboard.sellers.create');

    }//end of create

    function str_random($length = 4)
    {
        return Str::random($length);
    }

    function str_slug($title, $separator = '-', $language = 'en')
    {
        return Str::slug($title, $separator, $language);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'phone' => 'required|string|unique:users',
            'image' => 'image',

            'password' => 'required',
        ],
            [
//                'password.regex'=> __("site.password_regex"),
            ]
        );

//

        $request_data = $request->except(['password', 'password_confirmation']);


        // To Make User Active
        $request_data['status'] = 1;

        $user = User::create($request_data + ['type' => 'seller']);
        $user['password'] = bcrypt($request->password);


        if ($request->file('image')) {

            $images = $request->file('image');

            $img = "";
            $img = $this->str_random(4) . $images->getClientOriginalName();
            $originname = time() . '.' . $images->getClientOriginalName();
            $filename = $this->str_slug(pathinfo($originname, PATHINFO_FILENAME), "-");
            $filename = $images->hashName();
            $extention = pathinfo($originname, PATHINFO_EXTENSION);
            $img = $filename;

            $destintion = 'uploads';
            $images->move($destintion, $img);
            $image = new \App\Image();
            $image->image = $img;
            $image->imageable_id = $user->id;
            $image->imageable_type = 'App\User';
            $image->save();


        }

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.sellers.index');

    }//end of store

    public function edit($id)
    {
        $user = User::find($id);


        return view('dashboard.sellers.edit', compact('user'));

    }//end of edit

    public function update(Request $request, $id)
    {
        $store = User::find($id);





        $store->update($request->except(['_token', '_method', 'image', 'password_confirmation', 'password']));
        $store['password'] = bcrypt($request->password);




        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            \Intervention\Image\Facades\Image::make($thumbnail)->resize(300, 300)->save(public_path('/uploads/' . $filename));
            $store->image = $filename;
            $store->save();
        }



        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.sellers.index');

    }//end of update

    public function destroy($id)
    {
        //  abort_unless(\Gate::allows('job_delete'), 403);
        $store = User::find($id);

        $store->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return back();
    }//end of destroy


    public function change_status($id)
    {

        $info = User::find($id);


        $status = ($info->status == 0) ? 1 : 0;
        $info->status = $status;
        $info->save();


        session()->flash('success', __('site.updated_successfully'));
        return back();


    }

}//end of controller
