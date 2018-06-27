<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Contact;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
  public function contact(Request $request){
		
    if( $request->input("action") == "送信" ) {
			
      rules = [
	'name' => 'required',
	'email' => 'required | email',
	'content' => 'required',
	];

      //バリデーションのメッセージ文をカスタマイズ		
      $messages = [
	'name.required' => 'お名前は必ず入力してください。',
	'email.required' => 'メールアドレスは必ず入力してください。',
	'email.email' => 'メールアドレスを正しい形式で入力してください',
	'content.required' => 'お問い合わせ内容は必ず入力してください。',
	];
			
      $validator = Validator::make($request->all(), $rules, $messages);
      $errors = $validator->errors();
			
      $request->flash();
			
      if($validator->fails()) {
	return redirect('contact')->withErrors($validator)->withInput();
      }
			
      $name = $request->input('name');
      $email = $request->input('email');
      $content = $request->input('content');
      $date = date("Y/m/d H:i:s");
      $delete_flag = 0;
	    
      //バリデーションに成功したら問い合わせ内容をDBに保存
			
      DB::table('contacts')->insert([
        'name' => $name,
        'email' => $email,
        'content' => $content,
        'created_at' => $date,
        'delete_flag' => $delete_flag,
        ]);
	    
      //問い合わせをした人に確認のメール送信
			
      \Mail::send(new \App\Mail\Contact([
        'to' => $email,
        'to_name' => $name,
        'from' => 'hoge@example.com',
        'from_name' => 'HogeHoge',
        'subject' => 'お問い合わせありがとうございます',
        'name' => $name,
	'email' => $email,
        'content' => $content,
        ], 'contact'));
	    
      //運営側に問い合わせを通知するメール送信
			
      \Mail::send(new \App\Mail\Contact([
        'to' => 'estedejapon999@yahoo.co.jp',
        'to_name' => 'SmartFunding',
        'from' => $email,
        'from_name' => $name,
        'subject' => 'お問い合わせがありました',
        'name' => $name,
        'email' => $email,
	'content' => $content,
        ], 'contactfrom'));
			
      return redirect("contact/thanks");
    }
    return view("contact");
  }
}
