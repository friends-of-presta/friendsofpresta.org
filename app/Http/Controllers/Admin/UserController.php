<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Repositories\UserRepository;
use App\Http\Requests\Filters\UserRequest as UserRequestFilters;

class UserController extends Controller
{
    /**
     * The repository instance.
     *
     * @var array
     */
    protected $repository = array();

    /**
     * InscriptionController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->middleware('auth');
        //$this->authorizeResource(User::class, 'user');

        $this->repository = compact('user');
    }

    /**
     * @param UserRequestFilters $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(UserRequestFilters $request)
    {
        return view('admin.users', [
            'userlist' => User::orderBy('name')->filter($request->validated())->paginateFilter(),
            'request' => $request,
        ]);
    }
}
