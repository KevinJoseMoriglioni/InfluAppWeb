<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function PreHome(){ return view('pages/info/preHome'); }
    public function Companys(){ return view('pages/info/companys'); }
    public function Users(){ return view('pages/info/users'); }
    public function Subscriptions(){ return view('pages/info/subscriptions'); }
    public function Team(){ return view('pages/info/team'); }
    public function FrequentQuestions(){ return view('pages/info/frequentQuestions'); }
    public function Contact(){ return view('pages/info/contact'); }
    public function Blog(){ return view('pages/info/blog'); }
    public function InfluToken(){ return view('pages/info/influToken'); }
    public function Ambassador(){ return view('pages/info/ambassador'); }
}
