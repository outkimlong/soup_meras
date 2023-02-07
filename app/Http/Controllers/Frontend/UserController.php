<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('frontend.auth.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $roles = Role::all();
        return view('frontend.auth.users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required|same:confirm-password',
        ]);
        
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['status'] = $request->status == 'on' ? '1' : '0';
        $input['remember_token'] = $request->_token;
        $input['roles_id'] = $request->roles;
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('user.index')
            ->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('frontend.auth.users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('frontend.auth.users.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'same:confirm-password',
        ]);
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
        $input['status'] = $request->status == 'on' ? '1' : '0';
        $input['remember_token'] = $request->_token;
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('user.index')
            ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')
            ->with('success','User deleted successfully');
    }
}
