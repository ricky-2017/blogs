<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\DemoQueue;
class DemoController extends Controller
{
   	public function push()
   	{
   		// 记录一条任务
   		dispatch(new DemoQueue('日志写入'));
   	}
   	
   	public function sql(Request $request){
   		if(strtolower($request->method()) === 'get'){
   			 view();
   		}else{
   			echo 'st';
   		}
   	}
}
