<?php

namespace App\Http\Controllers\API;
use App\Review;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Review as ResourceCollection;
use App\Http\Resources\ReviewResource as ReviewResources;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::paginate(15);
		//Return collection of reviews as a resourse
		return new ResourceCollection($reviews);
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
        // return new ReviewResource(Review::find($id));
        // ReviewResources::withoutWrapping();
        //if added in App\Providers\AppServiceProvider::boot(), it will apply globally
        $review = Review::where('id', $id)->take(1)->get();
        // var_dump($review);
		return new ReviewResources($review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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

    public function ReviewsLaest(){
        // $reviews = DB::table('reviews')->get();
        // return new ReviewResources(Review::all());
        // return response()->json([
        //     "reviews" => $reviews
        // ], 200);
        //Get reviews
        $reviews = Review::orderBy('created_at', 'desc')->take(8)->get();
        $reviews->load('user');
        // $reviews = Review::with('user_id', 'teacher_id')->orderBy('created_at', 'desc')->take(8)->get();
		//Return collection of reviews as a resourse
		return new ResourceCollection($reviews);
    }
}
