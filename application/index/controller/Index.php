<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        header("Location: ".url("article/index"));
        exit;
    }
}
