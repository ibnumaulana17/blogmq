<?php

namespace App\Http\Controllers\users\controller;    

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use App\Models\usersModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;




class userController extends Controller
{
    public function index()
    {

        return view('users/view/login');
        
    }

    public function listUsers(){
        $users = usersModel::paginate(10);
        return view('users.view.list_users', compact('users'));
    }

    public function deleteUsers($id){
        $users = usersModel::find($id);
        $users->delete();

        return redirect('/users/list')->with('status', 'users Deleted!');
    }

    public function create(){

        $users = usersModel::all();

        return view('users.form.add_users', compact('users'));

    }

    public function store(Request $request)
    {   

        $this->validate($request, [
           
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'username' => 'required',
            'name' => 'required'
            ]);

        $add = new usersModel;
        $add->email = $request->email;
        $add->password = Hash::make($request->password);
        $add->username = $request->username;
        $add->name = $request->name;

        //upload image

        // return 'SUKSES';
        // return response()->json($add);

        $add->save();


        

        
        return redirect('/users/list')->with('status', 'users Added!');
    }

    public function edit($id)
    {
        $users = usersModel::find($id);

        return view('users.form.edit_users', compact('users'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'email' => 'required|string|email|max:100 ',
            'password' => 'required|string|min:6',
            'username' => 'required',
            'name' => 'required'

            ]);

        //upload image
        $edit = usersModel::find($request->id);
        //$avatar= staffsModel::find($request->id);

        $edit->email = $request->email;
        $edit->password = Hash::make($request->password);
        $edit->username = $request->username;
        $edit->name = $request->name;
        $edit->update();
        

       

        return redirect('/users/list')->with('status', 'Users Edited!');
    }




    public function authenticate(Request $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            // $username = $username->find(Auth::user()->username);
            return response()->json($request->email);
            return redirect()->intended('index');
            
            
        }
        else
        {
        return response()->json(['error' => 'Your credential is wrong'], 401);
        }

    }
}
