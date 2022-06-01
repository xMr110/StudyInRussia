<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{



    protected function resourceAbilityMap()
    {
        return [
            'index' => 'viewAny',
            'create' => 'store',
            'store' => 'store',
            'show' => 'view',
            'create' => 'create',
            'store' => 'create',
            'edit' => 'update',
            'update' => 'update',
            'destroy' => 'delete',
        ];
    }

    protected function resourceMethodsWithoutModels()
    {
        return ['index','create', 'store'];
    }

    public function __construct()
    {
        $this->middleware(['CheckRole:'.\App\Models\Role::$ADMIN]);
        $this->authorizeResource(User::class, 'user');
    }



    public function index()
    {
        return view('admin.users.index');
    }

    public function load(Request $request)
    {
        if ($request->ajax()) {
//            $data =  User::where(function($q)use($request){
//                if($request->id!=null)
//                    $q->where('id',$request->id);
//                if($request->q!=null)
//                    $q->where('name','LIKE','%'.$request->q.'%')->orWhere('phone','LIKE','%'.$request->q.'%')->orWhere('email','LIKE','%'.$request->q.'%');
//            })->orderBy('id','DESC');
            $data = User::select('*');

//            dd($data);
//
             return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('avatar', function ($row) {
                    $avatar = '<td class="text-center"><span><img src="' .asset('BackEnd/src/assets/img/profile-17.jpg'). '" class="profile-img" alt="avatar"></span>
                            </td>';
                    return $avatar;
                })
                ->editColumn('name', function ($row) {

                    return $row['name'];
                })
                ->editColumn('email', function ($row) {

                    return $row['email'];
                })
                ->editColumn('phone', function ($row) {

                    return $row['phone'];
                })
                ->editColumn('blocked', function ($row) {
                    if ($row['blocked']=== 0)
                        $statusT = 'Active';
                    elseif ($row['blocked']=== 1)
                        $statusT = 'Blocked';
                    $status = '<span class="shadow-none badge badge-primary">'.$statusT.'</span>';
                    return $status;
                })
                ->editColumn('action', function ($row) {

                    $btn = '<ul class="table-controls">
                                    <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                    <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                </ul>
                            ';

                    return $btn;
                })
                ->rawColumns(['id','avatar','blocked','action'])
                ->make(true);
        }
//


    }



    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }
}
