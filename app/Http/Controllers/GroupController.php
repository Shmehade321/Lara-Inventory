<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::latest()->get();
        return view('groups.index', ['groups' => $groups]);
    }

    public function create()
    {
        $permissions = [
            'User' => ['createUser', 'viewUser', 'updateUser', 'deleteUser'],
            'Group' => ['createGroup', 'viewGroup', 'updateGroup', 'deleteGroup'],
            'Brand' => ['createBrand', 'viewBrand', 'updateBrand', 'deleteBrand'],
            'Category' => ['createCategory', 'viewCategory', 'updateCategory', 'deleteCategory']
        ];
        return view('groups.create', ['permissions' => $permissions]);
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
