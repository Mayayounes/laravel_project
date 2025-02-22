<?php

namespace App\Http\Controllers;

use App\Models\ReactionType;
use App\Http\Requests\StoreReactionTypeRequest;
use App\Http\Requests\UpdateReactionTypeRequest;
use App\Http\Resources\ReactionTypeResource;

class ReactionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_reactions= ReactionType::all();
        return ReactionTypeResource::collection($all_reactions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReactionTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ReactionType $reactionType)
    {
        $reaction_types_all = ReactionType::where('id', '=' , $reactionType->id)->first();
        return ReactionTypeResource::make($reaction_types_all);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReactionType $reactionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReactionTypeRequest $request, ReactionType $reactionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReactionType $reactionType)
    {
        //
    }
}
