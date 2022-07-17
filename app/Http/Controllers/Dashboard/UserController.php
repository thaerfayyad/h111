<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return response()->view('dashboard.user.index', [
            'users' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|email|string|unique:users,email',
        ]);
        if (!$validator->fails()) {

            $request_data = $request->all();
            $request_data['password'] = bcrypt("12345");

            $isSave = User::create($request_data);

            return response()->json([
                'message' => $isSave ? 'Created successfully' : 'Create Failed'
            ], $isSave ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' =>   $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return response()->view('dashboard.user.edit', ['user' => $user]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|string|email|unique:admins,email,' . $user->id,
        ]);
        if (!$validator->fails()) {
            $isSaved = $user->update($request->all());
            return response()->json(['message' => $isSaved ? 'Created Successfully' : 'Failed To Create'], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $deleted = $user->delete();

        return response()->json([
            'title' => $deleted ? 'Deleted successfully' : "Delete failed",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
