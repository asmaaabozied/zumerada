<?php

namespace App;

use App\Models\Currency;
use App\Models\Currency_Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Illuminate\Support\Facades\Session;
use Sqits\UserStamps\Concerns\HasUserStamps;

class Product extends Model
{
    use Translatable;
    use HasUserStamps;
    use SoftDeletes;

    protected $guarded = [];
    protected $hidden = ['translations', 'created_by', 'updated_by', 'updated_at', 'deleted_at', 'deleted_by'];
    public $translatedAttributes = ['name', 'description'];

    protected $appends = ['image_path'];
    protected $with = ['images', 'category'];

    public function showProductCurrency($id)
    {
        return Currency_Product::where('currency_id', $id)->where('product_id', $this->id)->first()->values ?? '';

    }

    public function showPreviousPrice()


    {

        $price = $this->price;


        if (Session::has('currency')) {
            $curr = Currency::find(Session::get('currency'));

            $currs = $curr->products->where('id', $this->id);


        } else {
            $curr = Currency::where('is_default', '=', 1)->first();
            $currs = $curr->products->where('id', $this->id);

        }

        foreach ($currs as $value) {
            $price = $value->pivot->values;

        }


        return $curr->sign . $price;


    }

    public function showPrice()
    {

        $price = $this->price;


        if (Session::has('currency')) {
            $curr = Currency::find(Session::get('currency'));

            $currs = $curr->products->where('id', $this->id);


        } else {
            $curr = Currency::where('is_default', '=', 1)->first();
            $currs = $curr->products->where('id', $this->id);

        }

        foreach ($currs as $value) {
            $price = $value->pivot->values ?? '';

        }
        $offers = Offer::where('product_id', $this->id)->first();
        if ($offers) {
            $offer = $offers->discount ?? 0;

            $price = $price - $offer ?? '';
        }
        return $curr->sign . $price;


    }
    public function showPriceWithoutCurrency()
    {

        $price = $this->price;


        if (Session::has('currency')) {
            $curr = Currency::find(Session::get('currency'));

            $currs = $curr->products->where('id', $this->id);


        } else {
            $curr = Currency::where('is_default', '=', 1)->first();
            $currs = $curr->products->where('id', $this->id);

        }

        foreach ($currs as $value) {
            $price = $value->pivot->values ?? '';

        }
        $offers = Offer::where('product_id', $this->id)->first();
        if ($offers) {
            $offer = $offers->discount ?? 0;

            $price = $price - $offer ?? '';
        }
        return  $price;


    }

    public function currenies()
    {
        return $this->belongsToMany(Currency::class)->withPivot('values');
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites');

    }

    public function getImagePathAttribute()
    {
        return asset('uploads/' . $this->image);

    }//end of get image path

    public function images()
    {

        return $this->morphMany(Image::class, 'imageable');

    }//end of images

    public function category()
    {
        return $this->belongsTo(Catogery::class, 'catogery_id')->withDefault();

    }//end of catogery


    public function offers()
    {
        return $this->hasMany(Offer::class, 'product_id');

    }//end of offers

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites');

    }//end of users

    public function seller()
    {
        return $this->belongsTo(User::class, 'family_id')->where('type','seller');

    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'product_id');

    }//end of ratings


    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withDefault();

    }//end of orders

}
