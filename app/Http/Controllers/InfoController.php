<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function PreHome(){ return view('pages/info/preHome'); }
    public function Home(){ return view('pages/info/Home'); }
    public function Business(){ return view('pages/info/business'); }
    public function Users(){ return view('pages/info/users'); }
    public function Memberships(){ return view('pages/info/memberships'); }
    public function Contact(){ return view('pages/info/contact'); }
    // public function Team(){ return view('pages/info/team'); }
    // public function FrequentQuestions(){ return view('pages/info/frequentQuestions'); }
    // public function Blog(){ return view('pages/info/blog'); }
    // public function InfluToken(){ return view('pages/info/influToken'); }
    // public function Ambassador(){ return view('pages/info/ambassador'); }
}
