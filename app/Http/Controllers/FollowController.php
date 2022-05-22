<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page=Page::all();
        $users=User::all();
        return view('project_folder.follow')->with([
            'users'=>$users,
            'page'=>$page

        ]);
    }
    public function feed()
    {

        return view('project_folder.feed');
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

    public function follow_page(Request $request,$pageId)
    {
        $follower_id=Auth::id();

        $user=Page::find($pageId);
        $user_id=User::find($user->user_id);

        Follow::create([
            'user_id'=>$user_id->id,
            'follower_id'=>$follower_id,
            'page_id'=>$pageId,
        ]);

        return response()->json([
            'person' => 'Followed'
        ]);
    }
    public function store(Request $request,$personId)
    {
        $follower_id=Auth::id();

        $user_id=$personId;

        Follow::create([
            'user_id'=>$user_id,
            'follower_id'=>$follower_id,
        ]);

        return response()->json([
            'person' => 'Followed'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function show(Follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(Follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Follow $follow)
    {
        //
    }
}
