<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DeletedOrderLog;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::with('customer')
            ->with('product')
            ->where('archived', false)
            ->get();
        return view('order.index')
            ->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customers=Customer::get();
        $products=Product::get();
        return view('order.create')
            ->with('customers', $customers)
            ->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;
        $product=Product::find($request->productId);
        if($product){
            $request['orderTotal']=$request->quantityOrdered*$product->unitPrice;
            $request['orderDate']=Carbon::now()->toDateTimeString();
            Order::create($request->all());
            return redirect()->route('order.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $order = Order::find($id);

        if ($order) {
            if(!DeletedOrderLog::where('orderId', $order->id)->count()){
                // Map attributes from Order model to DeletedOrderLog model
                $attributes = $order->toArray();
                $order->archived=true;
                $order->save();

                // Rename 'id' to 'orderId' if necessary
                $attributes['orderId'] = $attributes['id'];
                unset($attributes['id']); // Remove 'id' attribute from array

                // Create a new DeletedOrderLog record with the mapped attributes
                DeletedOrderLog::create($attributes);
            }
            return redirect()->route('log.index');
        }
    }
}
