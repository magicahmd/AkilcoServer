<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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

        $user = User::where('email',$request->email)->get();

        if($user=='[]'){
            $data = $request->all();
            $data['password']=  md5($request->password);
            return User::create($data);
        }
        else
            $user = [];
       return ($user);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function logs(request $request){
        $email = $request->input('email');
        $password = md5($request->input('password'));

        $user = User::where('email',$email)->where('password',$password)->get();

            return $user;

    }

    public function getUserRole($id){
        $user = User::find($id);

        $result = [];

        foreach ($user->roles as $role){

            array_push($result,$role);

        }

        return $result;
    }

    public function getRestaurantManagers($restaurant_id){
        $users = User::whereHas('roles', function ($query) use ($restaurant_id){
            $query->where('role_id', 2)->where('restaurant_id', $restaurant_id );
        })->get();

        return  $users;

    }

    public function getRestaurantWaiters($restaurant_id){
        $users = User::whereHas('roles', function ($query) use ($restaurant_id){
            $query->where('role_id', 3)->where('restaurant_id', $restaurant_id );
        })->get();

        return  $users;

    }

    public function getRestaurantChefs($restaurant_id){
        $users = User::whereHas('roles', function ($query) use ($restaurant_id){
            $query->where('role_id', 4)->where('restaurant_id', $restaurant_id );
        })->get();

        return  $users;

    }
}
