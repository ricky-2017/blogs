<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
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

   	public function redisTest()
    {
        Redis::set('1','helloWorld');
    }
}
