<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roleuser;
use App\User;
use App\userpermision;
use App\permision;
use App\rolepermision;
use Spatie\Permission\Models\Role;

class hakaksesController extends Controller
{
	public function index()
	{
		$roleusers = roleuser::orderBy('model_id','asc')->orderBy('role_id','asc')->get();
        return view('admin.roleuser.index',compact('roleusers'));
	}

    public function indexf($kontent)
    {
    	if ($kontent=="user-role") {
    		$roleusers = roleuser::orderBy('model_id','asc')->orderBy('role_id','asc')->get();
        	return view('admin.roleuser.index',compact('roleusers'));

    	}elseif ($kontent=="user-permission") {
    		$userpermisions = userpermision::all();
        	return view('admin.userpermision.index',compact('userpermisions'));

    	}elseif ($kontent=="role-permission") {
    		$rolepermisions = rolepermision::all();
            return view('admin.rolepermision.index',compact('rolepermisions'));
    	}
    }

    public function storeuserrole(Request $request)
    {
    	auth()->user()->find($request->model_id)->assignRole($request->role_id);
        return redirect()->route('akses.indexf', ["user-role"]);
    }

    public function storepermisionuser(Request $request)
    {
    	auth()->user()->find($request->model_id)->givePermissionTo($request->permission_id);
    	return redirect()->route('akses.indexf', ["user-permission"]);
    }

    public function storepermisionrole(Request $request)
    {
        $role=Role::find($request->role_id);
        $role->givePermissionTo($request->permission_id);
        return redirect()->route('akses.indexf', ["user-permission"]);
    }



    public function createf($kontent)
    {
    	if ($kontent=="user-role") {
    		$roles = role::pluck('name','name');
	    	$users = User::pluck('username','id');
	        return view('admin.roleuser.create',compact('roles','users'));

    	}elseif ($kontent=="user-permission") {
    		$permisions = permision::pluck('name','id');
	        $users = User::pluck('username','id');
	        return view('admin.userpermision.create',compact('permisions','users'));
    		
    	}elseif ($kontent=="role-permission") {
            $roles = role::pluck('name','id');
    		$permisions = permision::pluck('name','id');
            return view('admin.rolepermision.create',compact('permisions','roles'));
    	}
    }

    public function deletef($kontent,$role,$id)
    {
    	if ($kontent=="user-role") {
    		auth()->user()->find($id)->removeRole($role);
        	return redirect()->route('akses.indexf', ["user-role"]);

    	}elseif ($kontent=="user-permission") {
            auth()->user()->find($id)->revokePermissionTo($role);
            return redirect()->route('akses.indexf', ["user-permission"]);
    		
    	}elseif ($kontent=="role-permission") {
    		role::find($id)->revokePermissionTo($role);
            return redirect()->route('akses.indexf', ["role-permission"]);
    	}
    }

}
