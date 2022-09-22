<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class TeacherAnnouncementController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'isTeacher']);
    }

    public function index(){
        $announcements = Announcement::Paginate(20);

        return view('teachers_announcements.index', compact('announcements'));
    }

    public function search(){
        $search = request('search');

        if($search){
            $announcements = Announcement::where('name','LIKE',"%{$search}%")->paginate(20);
        }else{
            $announcements = Announcement::paginate(20);
        }

        return view('teachers_announcements.index', compact('announcements'));
    }
}
