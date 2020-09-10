<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Number;
use App\Http\Resources\Number as NumberResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NumberController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = Number::all();

        return $this->sendResponse(NumberResource::collection($numbers), 'Numbers retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generate(Request $request)
    {
        $input = $request->all();

        $number = Number::create([
            "unique_id" => Str::random(env('UNIQUE_ID_LENGTH')),
            "number" => rand(),
        ]);

        return $this->sendResponse(new NumberResource($number), 'Number generated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function retrieve($id)
    {
        $number = Number::where("unique_id",$id)->first();

        if (is_null($number)) {
            return $this->sendError('Number not found.');
        }

        return $this->sendResponse(new NumberResource($number), 'Number retrieved successfully.');
    }
}