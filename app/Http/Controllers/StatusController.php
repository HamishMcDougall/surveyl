<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{

  public function __construct()
     {
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $Userid = Auth::id();


      //  return Status::all();
       //return Status::with('user')->latest()->get();
    return Status::where(['user_id' => Auth::user()->id])
       ->orderBy('sort_order', 'asc')
       ->get();


      //return Status::where(['user_id'=>$Userid])->latest()->get();
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
        //middleware

        //validation
        $this->validate($request, ['body'=>'required']);


        // find the user id
        $Userid = Auth::id();


        // cound and add a sort order
        $sortOrderNumber = User::count();
        $sortOrderNumber = $sortOrderNumber + 1;


        // create the Store
        $status = User::find($Userid)
            ->statuses()
            ->create([
                'body'        => request('body'),
                'sort_order' => $sortOrderNumber
            ]);



        //return it, and inclue the user.
        return $status->load('user');


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {

      $data = $request->passData;

      foreach ($data as $key => $value) {

    $sortOrder = Status::find($data[$key]['id'])
       ->update([
         'sort_order' => $key,
       ]);
      print_r($data[$key]['id']);
      print_r($data[$key]['body']);
      print_r($data[$key]['sort_order']);
     };







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {


        $deletedRows = Status::where('id', $deleteId)->delete();
    }
}
