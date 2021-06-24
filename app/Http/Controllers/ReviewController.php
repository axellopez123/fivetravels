<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ReviewController extends Controller
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
    public function store(Request $request, $user_id, $reservation_id)
    {
        //
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'comment' => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['status_code' => 400, 'message' => 'Bad Request']);
        }

        $review = new Review();
        $review->title = $request->title;
        $review->comment = $request->comment;
        $review->user_id = $user_id;
        $review->reservation_id = $reservation_id;
        $review->save();
        return response()->json([
            'status_code' => 200,
            'message' => 'Review created succesfully!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        return response($review);
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
