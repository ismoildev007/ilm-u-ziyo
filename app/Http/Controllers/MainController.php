<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Educational;
use App\Models\Home;
use App\Models\Number;
use App\Models\Partners;
use App\Models\Post;
use App\Models\Question;
use App\Models\Student;
use App\Models\StudentPhoto;
use App\Models\Teacher;
use App\Models\Video;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private function findNews($partner_id)
    {
        return Partners::where('partner_id', $partner_id);
    }
    public function main()
    {
        $homes = Home::latest()->take(1)->get();
        $videos = Video::latest()->take(1)->get();
        $documents = Document::latest()->take(1)->get();
        $abouts = About::latest()->take(1)->get();
        $numbers = Number::latest()->take(1)->get();
        $educationals = Educational::latest()->take(4)->get();
        $teachers = Teacher::orderBy('created_at', 'desc')->get();
        $students = StudentPhoto::latest()->take(15)->get();
        $pupils = Student::latest()->take(8)->get();
        $questions = Question::latest()->take(10)->get();
        $contacts = Contact::latest()->take(1)->get();
        $partners = $this->findNews(1)->latest()->take(20)->get();
        $part = $this->findNews(2)->latest()->take(20)->get();

        return view('index', compact(
            'homes',
            'videos',
            'abouts',
            'documents',
            'numbers',
            'educationals',
            'teachers',
            'students',
            'pupils',
            'questions',
            'contacts',
            'partners',
            'part',
        ));

    }
}
