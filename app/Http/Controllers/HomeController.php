<?php

namespace App\Http\Controllers;

use App\Category;
use App\Catogery;
use App\Contact;
use App\Models\Cart;
use App\Models\Currency;
use App\Models\Currency_Product;
use App\Product;
use App\User;
use App\Uservistor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Modules\Pages\Entities\Page;
use Illuminate\Support\Facades\DB;
use Hash;


use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\Auth\Login;

use Str;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::where('status', 1)->latest()->paginate(12);
        $productss = Product::where('status', 1)->paginate(6);
        $categories = Catogery::latest()->paginate(8);

        $productsss = Product::with('offers')->get();


        return view('home', compact('products', 'productss', 'categories', 'productsss'));
    }

    public function payment()
    {

        return view('frontend.payment');

    }

    public function storeproduct()
    {

        $sellers = User::where('type', 'seller')->paginate(12);


        return view('frontend.storeproduct', compact('sellers'));


    }

    public function removecart($id)
    {
        if (Session::has('currency')) {
            $curr = Currency::find(Session::get('currency'));
        } else {
            $curr = Currency::where('is_default', '=', 1)->first();
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
//        dd($oldCart);
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

//
//            Session::forget('cart');
//            Session::forget('already');
//            Session::forget('coupon');
//            Session::forget('coupon_total');
//            Session::forget('coupon_total1');
//            Session::forget('coupon_percentage');
//
//            $data = 0;
//            return response()->json($data);
        return back();

    }

    public function storecategories($id)
    {

        $category = Catogery::with('products')->find($id);
//
        $products = $category->products;


        return view('frontend.storecategories', compact('products'));


    }


    public function Allproducts()
    {
        $products = Product::latest()->paginate(12);

        return view('frontend.products', compact('products'));

    }

    public function sellers()
    {

        return view('frontend.sellers');


    }

    public function login()
    {
        return view('frontend.login');

    }

    public function favourite()
    {

        $user = Auth::id() ?? '';

        $users = User::find($user);

        $products = $users->Products;


        return view('frontend.favourite', compact('products'));
    }

    public function deletefavourite($id)
    {

        DB::table('favorites')->where('product_id', $id)->delete();

        return back();

    }

    public function favouritproduct($id)
    {

        $user_id = Auth::id();

        $users = User::find($user_id);


        $user = $users->Products()->toggle($id);

        $status = ($user['attached'] !== []) ? 'added' : 'deleted';

        return response()->json(['status' => $status, 'content' => 'success']);

    }
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();

    }

    public function handleRedirectCallback($provider)
    {

        $user = Socialite::driver($provider)->user();



        $authUser = User::firstOrCreate([
            'email' => $user->getEmail(),
        ], [
            'name' => $user->getName(),
            'type' => 'User',
            'password' => Hash::make(Str::random(24))
        ]);
        Auth::login($authUser, true);

        return redirect('/');
    }

    public function showproduct($id)
    {
        $product = Product::find($id);

        $ipAddr = \Request::ip();


        $data = Uservistor::updateOrCreate(['ip' => $ipAddr],
            ['ip', $ipAddr]);


        return view('frontend.showproduct', compact('product'));

    }

    public function currency($id)
    {

        Session::put('currency', $id);

        return redirect()->back();
    }


    public function clients()
    {
        return view('frontend.clients');

    }


    public function storeclients(Request $request)
    {


        $data = $request->validate([
            "email"             => 'required|email|max:255|unique:users,email',
            "phone"             => 'required|numeric|unique:users,phone',
        ]);


        $user = User::create($request->except('_token', 'password') + ['type' => 'User', 'password' => bcrypt($request->password)]);
        Auth::login($user);
        session()->flash('success', __('site.added_successfully'));

        return redirect(route('home'));
    }

    public function sale()
    {

        $products = Product::with('offers')->get();

        return view('frontend.sale', compact('products'));


    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('home'));
    }

    public function stores()
    {

        $sign = Currency::where('is_default', '=', 1)->first();


        $currency_All = Currency::get();
        $currency = $currency_All->mapWithKeys(function ($curr, $key) use ($currency_All) {
            return [$curr['key'] => $currency_All];
        })->map(function ($item) {
            return $item->pluck('value', 'key');
        });

        $baseChange = $currency[$sign->key];

        $currecny_json = $currency->map(function ($items, $parentkey) use ($baseChange) {
            $from = $baseChange[$parentkey];
            $result = [];
            $final = [];
            foreach ($items as $key => $item) {
                $from_currecny = $baseChange[$key];
                $result[$key] = round(($from_currecny / $from), 2);
            }

            return $result;

        })->toArray();

        return view('frontend.stores', compact('sign', 'currecny_json'));


    }

    public function removeitem($id)
    {
//        $cart = Session::get('cart');
//        unset($cart->items[$id]);
//        Session::put('cart', $cart);
//        return back();

        $products = Session::get('cart')->items;


        foreach ($products as $key => $value) {
            if ($value['id'] == $id) {
                unset($products [$key]);
            }
        }
        //put back in session array without deleted item
//        request->session()->push('cart',$products);
        //then you can redirect or whatever you need
        return redirect()->back();

    }

    public function carts()
    {
        return view('frontend.carts');

    }

    public function cart($id)
    {
        $prod = Product::where('id', '=', $id)->first(['id', 'price', 'image']);

        // Set Attrubutes


        $keys = '';
        $values = '';


        // Set Size


        // Set Color

        $price = '';
        if (!empty($prod->price)) {
            $color = $prod->price[0];
            $color = str_replace('#', '', $price);
        }


//        if($prod->user_id != 0){
//            $gs = Generalsetting::findOrFail(1);
//            $prc = $prod->price + $gs->fixed_commission + ($prod->price/100) * $gs->percentage_commission ;
//            $prod->price = round($prc,2);
//        }

        // Set Attribute


        if (!empty($prod->attributes)) {
            $attrArr = json_decode($prod->attributes, true);

            $count = count($attrArr);
            $i = 0;
            $j = 0;
            if (!empty($attrArr)) {
                foreach ($attrArr as $attrKey => $attrVal) {

                    if (is_array($attrVal) && array_key_exists("details_status", $attrVal) && $attrVal['details_status'] == 1) {
                        if ($j == $count - 1) {
                            $keys .= $attrKey;
                        } else {
                            $keys .= $attrKey . ',';
                        }
                        $j++;

                        foreach ($attrVal['values'] as $optionKey => $optionVal) {

                            $values .= $optionVal . ',';

                            $prod->price += $attrVal['prices'][$optionKey];
                            break;


                        }

                    }
                }

            }

        }
        $keys = rtrim($keys, ',');
        $values = rtrim($values, ',');


        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($prod, $prod->id, $price, $prod->image);

        $cart->totalPrice = 0;
        foreach ($cart->items as $data)
            $cart->totalPrice += $data['price'];
        Session::put('cart', $cart);


        return redirect()->route('home');
    }


    public function addproducts(Request $request)
    {


        $rules = ['price' => 'required'];
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => ['required']];
            $rules += [$locale . '.description' => ['required']];

        }//end of for each

        $request->validate($rules);

        $product = Product::create($request->except(['_token', '_method', 'image', 'currency', 'currency_id', 'use_currency']) + ['family_id' => Auth::id()]);
        if ($request->hasFile('image')) {
            $thumbnail = $request->file('image');
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/uploads/' . $filename));
            $product->image = $filename;
            $product->save();
        }
        if ($request->currency) {


            foreach ($request->currency as $key => $value) {


                Currency_Product::create([
                    'values' => $request->currency[$key],
                    'currency_id' => $request->currency_id[$key],
                    'product_id' => $product->id,


                ]);

            }


        }
        session()->flash('success', __('site.added_successfully'));

        return back();
//        return redirect()->route('dashboard.products.index');

    }

    public function ckecklogin(Request $request)
    {


        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

            $user = User::where('email', request('email'))->first();
            Auth::login($user);

            return redirect(route('home'));

        } else {


            Auth::logout();

            return back()->withErrors(__('site.messages.user_loginInvalid'));

        }

    }

    public function updateprofiles($id, Request $request)
    {
        $user = User::find($id);

        $user->update($request->except('_token', 'password') + ['password' => bcrypt($request->password)]);


        return back();
    }

    public function profile($id)
    {

        $user = User::find($id);

        return view('frontend.profile', compact('user'));

    }

    public function storesellers(Request $request)
    {
        $data = $request->validate([
            "email"             => 'required|email|max:255|unique:users,email',
            "phone"             => 'required|numeric|unique:users,phone',
        ]);

        $user = User::create($request->except('_token', 'password') + ['type' => 'seller', 'password' => bcrypt($request->password)]);
        Auth::login($user);
        session()->flash('success', __('site.added_successfully'));

        return redirect(route('home'));
    }

    public function categories()
    {
        $categories = Catogery::latest()->paginate(12);

        return view('frontend.categories', compact('categories'));


    }

    public function searchproduct(Request $request)
    {
        if ($request->search != null) {

            $products = Product::when($request->search, function ($q) use ($request) {
                return $q->whereTranslationLike('name', '%' . $request->search . '%');

            })->latest()->paginate(12);

            return view('frontend.search', compact('products'));
        } else {

            return back()->withErrors(__('site.messages.user_dataNotExist'));

        }


    }


    public function pages($data)
    {


        $pages = \Modules\Pages\Entities\Page::where('slug', $data)->first();

        return view('frontend.pages', compact('pages'));

    }

    public function contact()
    {

        return view('frontend.contact');

    }

    public function storecontact(Request $request)
    {
        $userid = Auth::id() ?? '';
        Contact::create($request->except('_token') + ['user_id' => $userid]);

        return redirect(route('contact'));
    }
}
