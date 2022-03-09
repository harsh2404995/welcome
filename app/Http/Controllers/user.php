<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\product;
use \Crypt;
use  Illuminate\Support\Facades\DB;
use PDO;

class user extends Controller
{

 
    
function registert()
{
    return redirect("login");
}
 function admi()
{
    return redirect("admin");
}
       
function back()
{
    return redirect("welcome");
}
function login()
{
    return redirect("/");
}

function print($name){
    $result = DB::table('products')->where('category',$name) ->get();
    return view("print",["emi"=>$result]);
}
    public function register(request $req){
       


        $req->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email',
            'password' => 'required|regex:/^[a-zA-Z0-9]+$/u|min:4|max:8',
            'address' => 'required'
        ]);

        $result=DB::table('registers')->where("email","$req-> email")->get();
        $count=count($result);
        echo $count;

        $res = json_decode($result,true);
        print_r($res);

        if(sizeof($res)==0){
            $register=new register;
                $register->name=$req->name;
                $register->email=$req->email;
                $encrypted_password = crypt::encrypt($req->password);
               $register->password=$encrypted_password;
                $chk=implode(",",$req->r1);
                $register->gender=$chk;
                $register->address=$req->address;
                $register->save();
              

            $req->session()->flash('register_status','User has been registered successfully');
            $req->session()->put('name',$req->name);
            return redirect("app");
        }
    
        else
        {
        $req->session()->flash('register_status','This Email already exists.');
            return redirect('/');
        }	
    }


    public function logins(request $req){

        $result = DB::table('registers')
        ->where('email',$req->email)
        ->get();

        $res = json_decode($result,true);
        

        if(sizeof($res)==0){
        $req->session()->flash('error','Email Id does not exist. Please register yourself first');
        echo "Email Id Does not Exist.";
        return redirect('login');
        }
        else{
      
        
    date_default_timezone_set('Asia/Kolkata');
        $time = date( 'h:i:s');
        $date = date( 'd-m-yy');
         DB::table('logins')
                ->insert(
            [
            "email"=>"$req->email",
            "time"=>"$time",
            "date"=>"$date"
            ]
        );
       
        $encrypted_password = $result[0]->password;
        $decrypted_password = crypt::decrypt($encrypted_password);
        if($decrypted_password==$req->password){
        echo "You are logged in Successfully";
        $req->session()->put('user',$result[0]->name);
       
        return redirect('welcome');

       
		
        }
        else{
        $req->session()->flash('error','Password Incorrect!!!');
        echo "Email Id Does not Exist.";
        return redirect('login');
        }
        }
    }

    public function product(request $req){

        $req->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
           $file = $req->file('image');
           $destinationPath = 'image';
           $file->move($destinationPath,$file->getClientOriginalName());
        $product=new product;
        $product->user=$req->user;
        $product->name=$req->name;
        $product->price=$req->price;
        $product->category=$req->category;
        $product->image=$file->getClientOriginalName();
        $product->save();
        $req->session()->flash('success_status','Record Save successfully');
        return redirect("app");

    }

    public function show($name)
    {
        $result = DB::table('products')->where("user",$name) ->get();
		
		return view("show",['emi'=>$result]);

    }

    function deleting(request $req)
    {
            
            echo "this record delete.......$req->id";
            
            $student=product::find($req->id);
			
			
            $student->delete();
            
    }

    function editdata($id)
	{
		$data=product::find($id);
		return view("edits",["data"=>$data]);
	}

    function updatedata(request $req)
	{

        if($req->image == NULL )
         {
                $student=product::find($req->id);
                $student->user=$req->user;
                $student->name=$req->name;
                $student->price=$req->price;
                $student->category=$req->category;
                $student->update();
                 
        return redirect("/show/$req->user");
		
        
         }
         else
         {
            $req->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        
               ]);
               $file = $req->file('image');
               $destinationPath = 'image';
               $file->move($destinationPath,$file->getClientOriginalName());
            $student=product::find($req->id);
            $student->user=$req->user;
            $student->name=$req->name;
            $student->price=$req->price;
            $student->category=$req->category;
            $student->image=$file->getClientOriginalName();
            $student->update();
             
        return redirect("/show/$req->user");
		
         }
        

		
       
	
	}

    function admin(request $req){

        $result = DB::table('registers')
        ->where('email',$req->email)
        ->get();

        $res = json_decode($result,true);
        

        if(sizeof($res)==0){
        $req->session()->flash('error','Email Id does not exist. Please register yourself first');
        echo "Email Id Does not Exist.";
        return redirect('admin	');
        }
        else{
      
        
    date_default_timezone_set('Asia/Kolkata');
        $time = date( 'h:i:s');
        $date = date( 'd-m-yy');
         DB::table('admins')
                ->insert(
            [
            "email"=>"$req->email",
            "time"=>"$time",
            "date"=>"$date"
            ]
        );
       
        $encrypted_password = $result[0]->password;
        $decrypted_password = crypt::decrypt($encrypted_password);
        if($decrypted_password==$req->password){
        echo "You are logged in Successfully";
        $req->session()->put('name',$result[0]->name);
       
        return redirect('app');

       
		
        }
        else{
        $req->session()->flash('error','Password Incorrect!!!');
        echo "Email Id Does not Exist.";
        return redirect('admin');
        }
        }



    }


}
