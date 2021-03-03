<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{

    public function __construct() {
        $slugs = Slug::where('widget','!==','addcontract')->get();
        view()->share(['slugs' => $slugs]);
    }

    public function locale($locale){
		if(in_array($locale, ['az', 'en', 'ru'])):
            Session::put('locale', $locale);
            App::setlocale($locale);
        endif;

        return $lang = Session::get('locale');
	}

    public function lang(Request $request){
        $explodeUrl = explode('/', $request->url);
        $count = count($explodeUrl) - 3;
        if(isset($_SERVER['HTTPS']))
            $protocol = "https://";
        else
            $protocol = "http://";
        // return str_replace('#', '', $explodeUrl[3]);
        if($count == 1):
            $slug_url = str_replace('#', '', rawurldecode($explodeUrl[3]));
            if($slug_url !== ''):
                if(in_array($slug_url, ['az', 'en', 'ru'])):
                    if(in_array($request->lang, ['en', 'ru'])):
                        Session::put('locale', $request->lang);
                        App::setlocale($request->lang);
                        return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$request->lang;
                    elseif(in_array($request->lang, ['az'])):
                        Session::put('locale', $request->lang);
                        App::setlocale($request->lang);
                        return $new_url = $protocol.$_SERVER['HTTP_HOST'];
                    endif;
                else:
                    $data = Slug::whereTranslation('slug', $slug_url)->withTranslation('en', 'ru')->get();
                    $trans = $data->translate($request->lang, 'fallbackLocale');
                    $response = $trans[0]->slug;
                
                    return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response;
                endif;
            else:
                Session::put('locale', $request->lang);
                App::setlocale($request->lang);
                if($request->lang !== 'az'):
                    return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$request->lang;
                else:
                    return $new_url = $protocol.$_SERVER['HTTP_HOST'];
                endif;
            endif;
        elseif($count == 2):
            $data = Slug::whereTranslation('slug', str_replace('#', '', rawurldecode($explodeUrl[3])))->withTranslation('en', 'ru')->get();
            $slug4 = str_replace('#', '', rawurldecode($explodeUrl[4]));
            if($data[0]->widget == 'collections'):
                $slug4Data = Slug::whereTranslation('slug', $slug4)->get();
                $trans = $slug4Data->translate($request->lang, 'fallbackLocale');
                $slug4 = $trans[0]->slug;
            endif;
            $trans = $data->translate($request->lang, 'fallbackLocale');
            $response = $trans[0]->slug;

            return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response.'/'.$slug4;
        elseif($count == 3):
            $slug = rawurldecode($explodeUrl[3]);
            $data = Slug::whereTranslation('slug', $slug)->withTranslation('en', 'ru')->get();
            $slug4 = rawurldecode($explodeUrl[4]);
            $slug5 = str_replace('#', '', rawurldecode($explodeUrl[5]));

            $slug4Data = Slug::whereTranslation('slug', $slug4)->get();
            $trans = $slug4Data->translate($request->lang, 'fallbackLocale');
            $slug4 = $trans[0]->slug;

            $slug5Data = Slug::whereTranslation('slug', $slug5)->get();
            $trans = $slug5Data->translate($request->lang, 'fallbackLocale');
            $slug5 = $trans[0]->slug;

            $trans = $data->translate($request->lang, 'fallbackLocale');
            $response = $trans[0]->slug;

            return $new_url = $protocol.$_SERVER['HTTP_HOST'].'/'.$response.'/'.$slug4.'/'.$slug5;
        endif;
    }

    public function slug($slug1 = null, $slug2 = null, $slug3 = null){

        if($slug1 !== null):

            $data = Slug::whereTranslation('slug', $slug1)->withTranslation('en', 'ru')->get();

            if(count($data)==0):
            	abort(404);
            else:
                $widget = $data[0]->widget;
                $lang = $data[0]->where('slug', $slug1)->get();
                if(count($lang)>0):
                    $lang = 'az';
                else:
                    $lang = $data[0]->translations->where('value', $slug1);
                    foreach($lang as $l)
                        $lang = $l->locale;
                endif;

                if($slug2 !== null && $slug3 == null):
                    return $this->$widget($lang, $slug2);
                elseif($slug3 !== null):
                    return $this->$widget($lang, $slug2, $slug3);
                else:
                    return $this->$widget($lang);
                endif;
            endif;
        else:
            Session::put('locale', 'az');
            App::setlocale('az');
            $lang = 'az';
            return $this->index($lang);
        endif;
    }

    public function menu(){
        return Slug::withTranslation('en', 'ru')->where('menu', 1)->orderBy('order')->get();
    }


    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");
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
