<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;


use Illuminate\Foundation\Auth;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'dateOut' => 'required',
            'dateArrive' => 'required',
            'address' => 'required',
            'destination_id' => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['status_code' => 400, 'message' => 'Bad Request']);
        }

        $package = new Package();
        $package->name = $request->name;
        $package->description = $request->description;
        $package->price = $request->price;

        $package->dateOut = $request->dateOut;

        $package->dateArrive = $request->dateArrive;

        $package->address = $request->address;

        $package->destination_id = $request->destination_id;

        $package->save();
        // event(new Registered($package));
        return response()->json([
            'status_code' => 200,
            'message' => 'Package created succesfully!'
        ]);
    }
    public function buy(Request $request, $pack_id, $user_id)
    {
        $pack = Package::find($pack_id);
        $user = User::find($user_id);
        $order = new Order();
        $order->title = $pack->name;
        $order->paid = 0;
        $dt = Carbon::now();
        $order->daedline = $dt->addWeeks(2)->format('Y-m-d');
        $order->datePaid = $dt->addWeeks(1)->format('Y-m-d');
        $order->user_id =  $user->id;
        $order->package_id = $pack->id;

        $order->save();

       // $tokenResult = $user->createtoken('authToken')->plainTextToken;
            // $value = Session::all();
            // $value = Session::get('user_id');
// $id = session()->get('user_id');
$value = $request->cookie('user_id');
    return response()->json([
        'status_code' => 200,
        'message' => 'Compra exitosa',
        'user_id' => $pack->name
        //'token' => $tokenResult
    ]);

    //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pack = Package::find($id);
        return response($pack);
    }
    public function showAll()
    {
        $packs = Package::all();
        // return response($packs);
        return View::make('packs', ['name' => 'James']);

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
    }
}
