<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use Auth;
class AdminController extends Controller
{
   

  
    //Where to redirect users after login.
    protected $redirectTo = '/admin';
    public function __construct()
    {
        
        
        $this->middleware('auth:admin',['only' => 'index','edit']);
       //$this->middleware('auth:admin');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('admin.dashboard');
	   return view('pages.admin.adminHome');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if (Auth::guard('admin')->check()) {
              //return redirect()->route('admin.dashboard');
			  return redirect()->route('adminHome');
        }

         else return view('admin.auth.register');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        

         /*if(!Auth::guest('admin')){

            return redirect()->route('admin.dashboard');
         }*/
        $this->validate($request, [
          /*'name'          => 'required',
          'email'         => 'required|unique:admins,email',
          'password'      => 'required|min:8' */
		  'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // store in the database
        $admins = new Admin;
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password=bcrypt($request->password);
        $admins->save();
        return redirect()->route('admin.auth.login');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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