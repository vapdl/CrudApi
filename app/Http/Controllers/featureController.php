<?php

namespace App\Http\Controllers;

use App\Http\Requests\featureRequest;
use App\Feature;
use Symfony\Component\HttpFoundation\JsonResponse;

class featureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Feature::all()->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  featureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(featureRequest $request)
    {

        return response()->json(Feature::create($request->validated())->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(is_null($feature=Feature::find($id))?null:$feature->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  featureRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(featureRequest $request, $id)
    {
        return response()->json(['status' => is_null($feature=Feature::find($id))?false:$feature->update($request->validated())]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json(['status' => Feature::destroy($id)]);
    }
}
