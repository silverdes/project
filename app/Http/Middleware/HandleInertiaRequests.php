<?php

namespace App\Http\Middleware;

use App\Models\Estate;
use Inertia\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        // if(Auth::check()){
        //     $user = Auth::user()->only(['name', 'id', 'is_admin']);
        // }else{
        //     $user = "";
        // }
        $user = auth()->user();
        return array_merge(parent::share($request), [
            //
            'can' => [
                'editprofile' => $user->can('editprofile')
            ],
        ]);
    }
}
