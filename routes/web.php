<?php

use App\Models\Massage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/about', 'pages.about');
Route::view('/contact-us','pages.contact');

Route::post('/contact-us',function ( Request $request) {


   $message= new Message();
   $message->name = $request->name;
   $message->email = $request->email;
   $message->phone=$request->phone;
   $message->contant=$request->contant;
   $message->save();
   return redirect('/');// هي وين بيرجعع المستخدم بعد ما يعبي النموذج
});


Route::get('/admin/messages',function(){
     $messages = Message::all();

    return view('messages.index',compact('messages'));
    //هي التعليمة مشان استرجع البيانات من المودل compact
});
