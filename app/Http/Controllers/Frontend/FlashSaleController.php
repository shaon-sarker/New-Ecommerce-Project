<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FlashSale;
use App\Models\FlashSaleItem;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
    public function index()
    {
        // $flashSaleDate = FlashSale::first();
        $flashSaleDate = FlashSale::where('status',1)->first();
        // $flashSaleItems = FlashSaleItem::where('status', 1)->orderBy('id', 'ASC')->pluck('product_id')->toArray();
        $flashSaleItems = FlashSaleItem::where('flash_sale_id', $flashSaleDate->id)->where('status', 1)->orderBy('id', 'ASC')->pluck('product_id')->toArray();
        // return $flashSaleItems;
        return view('frontend.pages.flash-sale', compact('flashSaleDate', 'flashSaleItems'));
    }
}
