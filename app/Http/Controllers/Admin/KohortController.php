<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;



class KohortController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     *
     * List pasien
     *
     */
    public function create()
    {
        if (! Gate::allows('user_access')) {
            return abort(401);
        }


        return view('admin.layanan.create_kohort', compact('layanan'));
    }



    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        if (! Gate::allows('user_create')) {
//            return abort(401);
//        }
//        $roles = \App\Role::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
//        $teams = \App\Team::get()->pluck('name', 'id');
//
//        return view('admin.users.create', compact('roles', 'teams'));
//    }


//    public function register()
//    {
//
//        $roles = \App\Role::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
//        $teams = \App\Team::get()->pluck('name', 'id');
//
//        return view('auth.register', compact('roles', 'teams'));
//    }


    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(StoreUsersRequest $request)
//    {
//        if (! Gate::allows('user_create')) {
//            return abort(401);
//        }
//        $user = User::create($request->except('team_id'));
//        $user->teams()->sync($request->input('team_id'));
//
//        return redirect()->route('admin.users.index');
//    }




    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        if (! Gate::allows('user_edit')) {
//            return abort(401);
//        }
//        $roles = \App\Role::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
//        $teams = \App\Team::get()->pluck('name', 'id');
//        $user = User::findOrFail($id);
//
//        return view('admin.users.edit', compact('user', 'roles', 'teams'));
//    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(UpdateUsersRequest $request, $id)
//    {
//        if (! Gate::allows('user_edit')) {
//            return abort(401);
//        }
//        $user = User::findOrFail($id);
//        $user->update($request->except('team_id'));
//        $user->teams()->sync($request->input('team_id'));
//
//        return redirect()->route('admin.users.index');
//    }

    /**
     * Display User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        if (! Gate::allows('user_view')) {
//            return abort(401);
//        }
//        $products = \App\Product::where('created_by_id', $id)->get();
//        $user = User::findOrFail($id);
//
//        return view('admin.users.show', compact('user', 'products'));
//    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        if (! Gate::allows('user_delete')) {
//            return abort(401);
//        }
//        $user = User::findOrFail($id);
//        $user->delete();
//
//        return redirect()->route('admin.users.index');
//    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
//    public function massDestroy(Request $request)
//    {
//        if (! Gate::allows('user_delete')) {
//            return abort(401);
//        }
//        if ($request->input('ids')) {
//            $entries = User::whereIn('id', $request->input('ids'))->get();
//
//            foreach ($entries as $entry) {
//                $entry->delete();
//            }
//        }
//    }
}
