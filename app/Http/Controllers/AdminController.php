<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\About;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Educational;
use App\Models\Home;
use App\Models\Number;
use App\Models\Partners;
use App\Models\Question;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {
        $homes = Home::latest()->take(4)->get();
        $documents = Document::latest()->take(4)->get();
        $abouts = About::latest()->take(4)->get();
        $numbers = Number::latest()->take(4)->get();
        $educationals = Educational::latest()->take(4)->get();
        $teachers = Teacher::latest()->take(4)->get();
        $students = Student::latest()->take(4)->get();
        $questions = Question::latest()->take(4)->get();
        $contacts = Contact::latest()->take(4)->get();
        $partners = Partners::latest()->take(4)->get();

        return view('admin', compact(
            'homes',
            'abouts',
            'documents',
            'numbers',
            'educationals',
            'teachers',
            'students',
            'questions',
            'contacts',
            'partners',
        ));
    }
}
