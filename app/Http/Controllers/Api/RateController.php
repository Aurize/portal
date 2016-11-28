<?php

namespace App\Http\Controllers\Api;

use App\Rate;
use App\Transformers\RateTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;

class RateController extends ApiController
{
    /**
     * @var RateTransformer
     */
    protected $transformer;

    /**
     * RateController constructor.
     * @param $transformer
     */
    public function __construct(RateTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::all();

        return $this->respond([
            'data' => $this->transformer->transformCollection($rates)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rate::create($request->all());

        return $this->respondOK();
    }

    /**
     * Display the specified resource.
     *
     * @param Rate $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        return $this->respond([
            'data' => $this->transformer->transform($rate)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Rate $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rate $rate)
    {
        $rate->update($request->all());

        return $this->respondOK();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Rate $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        $rate->delete();

        return $this->respondOK();
    }
}
