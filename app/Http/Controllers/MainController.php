<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");
    }
    public function login()
    {
        return view("login");
    }
    public function signup()
    {
        return view("signup");
    }
    public function news()
    {
        return view("news");
    }
    public function services()
    {
        return view("services");
    }
    public function myinfo()
    {
        return view("myinfo");
    }
    public function rieltors()
    {
        return view("rieltors");
    }
    public function rieltorpage()
    {
        return view("rieltor-page");
    }
    public function addcontract()
    {
        return view("addcontract");
    }
    public function contractresult()
    {
        return view("contractresult");
    }
    public function contact()
    {
        return view("contact");
    }
    public function photogallery()
    {
        return view("photogallery");
    }
    public function mycontracts()
    {
        return view("mycontracts");
    }
    public function newsdetail()
    {
        return view("newsdetail");
    }
    public function addgoon()
    {
        return view("addgoon");
    }
    public function account()
    {
        return view("account");
    }
}
