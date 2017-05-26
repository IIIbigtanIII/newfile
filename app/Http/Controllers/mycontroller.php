<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

class mycontroller extends Controller
{
    public function sayhiboss()
    {
    	echo "<h2>welcome my lord</h2>"."<h1>BIGTAN</h1>"."<h2>the king of IT land</h2>";
    }
    public function sayhitheboss($name) 
    {
    	echo "<h2>welcome my lord</h2>"."<h1>$name</h1>"."<h2>the king of IT land</h2>";
    	//return redirect()->route('myroute');
	}
	public function showPath(Request $request)
	{
		$uri = $request->path();
		echo '<br>URI: '.$uri;
      
		$url = $request->url();
		echo '<br>';
      
		echo 'URL: '.$url;
		$method = $request->method();
		echo '<br>';
      
		echo 'Method: '.$method;
   }
   public function postform(Request $request)
   {
   		echo "your name:";
   		echo $request->name;
   		echo "<br>";
   		echo "password:";
   		echo $request->password;
   }

   public function setcookie()
   {
   		$response = new Response();
   		$response->withCookie('0001','A1',0.1);
   		return $response;
   }

   public function getcookie(Request $request)
   {
   		return $request->cookie('0001');
   }

   public function postfile(Request $request)
   {
   		if($request->hasFile('myfile'))
   		{
   			$file = $request->file('myfile');
   			$file->move('img','myfile.jpg');
   		}
   		else
   		{
   			echo "empty file";
   		}
   }

   public function getjson()
   {

   		$array = array('Tan' => 'tan','tan' );
   		return response()->json($array);
   }

   public function myview()
   {
   		return view('myView');
   }
}
