<?php

use weblib\log\Log;
use frame\base\Controller;

class TestController extends Controller
{

    public function actionHttptest()
    {
		Log::info("action http test", 10, __METHOD__);
        $model = new TestModel();
        $data = $model->httpTest();

        $this ->send(print_r($data, true));
    }

    public function actionTest() {
        $data = $this->request->data;

        $this->send(print_r($data, true));
    }
    
    public function actionDbtest() {
        Log::info("action db test", 22 , __METHOD__);
        $model = new TestModel();
        $data = $model->dbTest();
        $this->header("Content-Type", "text/html; charset=utf-8");
        $this ->send(print_r($data, true));
    }
    
    public function actionTestPool() {
        Log::info("action db test", 30);
        $model = new TestModel();
        $data = $model->mysqliTest();
        $this->header("Content-Type", "text/html; charset=utf-8");
        $this ->send(print_r($data, true));
    }

    public function actionTestState()
    {
        $this->display('test');
    }
}
