<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all the users exist lymaoIdUtjtwGn3L4kM2
        return Users::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         if($request->hasfile('file')) 
        { 
          $file = $request->file('file');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          $file->move('uploads/profile_pics/', $filename);
        }
        // Create the user
            Users::create
                ([
                'name'              =>strtolower($request->username),
                'email'             =>'test@gmail.com',
                'profile_pic'       =>$filename,
                'about_me'          =>strtolower($request->about_me),
                'dob'               =>$request->dob,
                'gender'            =>strtolower($request->gender),
                'blood_group'       =>$request->blood_group,
                'nationality'       =>strtolower($request->nationality),
                'contact'           =>$request->phone_number,
                'occupation'        =>strtolower($request->occupation),
                'address_line_one'  =>strtolower($request->address_line_one),
                'address_line_two'  =>strtolower($request->address_line_two),
                'country'           =>strtolower($request->country),
                'state'             =>strtolower($request->state),
                'city'              =>strtolower($request->city),
                'zip'               =>$request->zip,
                'college'           =>strtolower($request->college),
                'course'            =>strtolower($request->course),
                'interest'          =>strtolower($request->interest)
                ]);
        return ['success'];
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return user as per the specified id
        return Users::where('id',$id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
