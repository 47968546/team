<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $date = array(
            'a' => 'aaa',
            'b' => 'bbb'
        );
        return json($date);
    }
}
