<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function __construct()
    {
        $this->middleware('auth'); // specify which methods need login and which not need.
    }
    public function index()
    {





        $orders = Order::all();

//        Carbon::create($orders->expect_delivery_date)->format('Y-m-d');

        if (auth()->user()->role->name == 'customer')
        {
            $orders = $orders->where('added_by', auth()->user()->id);
        }

        return view('orders.index',['Orders' => $orders]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payment = Payment::all();
        $status = Status::all();

//            dd($payment);
       return view('orders.create' , ['payment'=>$payment , 'status'=>$status]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'url' => ['required','string','max:255'],
            'specs' => 'string|max:255',
            'notes' => 'string|max:2048',
            'city' => 'string|max:255',
            'address' => 'string|max:255',
            'payment_id' => 'required|in:0,1',

        ]);
//        dd($attributes);

        $order = new Order();
        $order->url = $request->url;
        $order->specs = $request->specs;
        $order->notes = $request->notes;
        $order->city = $request->city;
        $order->address = $request->address;
        $order->status_id = 1;
        $order->added_by  = auth()->user()->id;
        $order->payment_id= $request->payment_id;

        $order->save();

        return redirect(route('order.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $order = Order::findOrFail($id);
        $status = Status::all();

//        dd($order->status);
        $totalCost = $order->cost + $order->shipping_cost;

        return view('orders.show',['order' => $order, 'totalCost'=>$totalCost, 'status' => $status]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $status = Status::all();
//
       $confirmed =Status::where('name' , 'confirmed')->get() ;
//       dd($confirmed);
//       $cancel = $status[8];
//       dd($confirmed->id , $confirmed->name );

        return view('orders.edit',['order' => $order,'status'=> $status] /*, 'confirmed' => $confirmed, 'cancel' => $cancel]*/);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $attributes = $request->validate([
            'url' => ['required','string','max:255'],
            'specs' => 'string|max:255',
            'notes' => 'string|max:255',
            'city' => 'string|max:255',
            'address' => 'string|max:255',
            'status_id' => 'required|integer|exists:statuses,id',
//            'added_by' => 'required|integer|exists:customers,id',

        ]);

        if ($request->status_id  == 2){
            $attributes = $request->validate([
                'cost' => 'required|string|max:255',
                'shipping_cost' => 'required|string|max:255',
                'expect_delivery_date' => 'required|date|date_format:Y-m-d'
            ]);
        }
//                dd($request->cost);


        $order = Order::findOrFail($id);
        $order->url = $request->url;
        $order->specs = $request->specs;
        $order->notes = $request->notes;
        $order->city = $request->city;
        $order->address = $request->address;
        $order->cost = $request->cost;
        $order->shipping_cost=$request->shipping_cost;
        $order->expect_delivery_date = $request->expect_delivery_date;
        $order->status_id = $request->status_id;
//        $order->added_by = $request->added_by;
        $order->last_updates_by = auth()->user()->id;



        $order->save();


//        session()->flash('flash_icon', 'success');
//        session()->flash('flash_message', 'Ad updated successfully');

        return redirect(route('order.show', $order->id))/*->with(['order' => $order])*/;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public  function  invoiceShow($id)
    {
        $invoice = Order::findOrFail($id);
        if ($invoice->status->name == 'confirmed'){
            $invoiceDate = date('Y-m-d');
        }
        $totalCost = $invoice->cost + $invoice->shipping_cost;

//        dd($invoiceDate);


        return view('orders.invoiceShow',['invoice'=>$invoice ,'invoiceDate' => $invoiceDate, 'totalCost' => $totalCost]);
    }

    public function confirmCustomer($id){
        if (auth()->user()->role->name == 'customer'){
            $query =Status::where('name' , 'confirmed')->get(['id']);
            $confirmed = $query[0]->id ;
            $order = Order::findOrFail($id);
            $order->status_id = $confirmed;
            $order->save();
            return redirect(route('order.show', $order->id));

        }
    }
    public function rejectCustomer($id){
        if (auth()->user()->role->name == 'customer'){
            $query =Status::where('name' , 'cancel')->get(['id']);
            $cancel = $query[0]->id ;
            $order = Order::findOrFail($id);
            $order->status_id = $cancel;
            $order->save();
            return redirect(route('order.show', $order->id));

        }
    }
}
