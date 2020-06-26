<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }
    public function students(){

        $std = DB::table('students')->get();

        return view('dashboard.students',['students'=>$std]);

    }
    public function creatLectureIndex(Request $request){

        return view('dashboard.creatLecture');
    }
    public function lectureDetail(){
        $lectureDetails = Lecture::all();
        return view('dashboard.lectureDetail',['lectureDetails'=>$lectureDetails]);
    }
    public function viewLecture($id){
        $viewDetails = Lecture::find($id);
        return view('dashboard.viewLecture',['viewDetails'=>$viewDetails]);
    }
    public function editLecture($id){
        $editDetails = Lecture::find($id);
        return view('dashboard.editLecture',['editDetails'=>$editDetails]);
    }

    public function creatLecture(Request $request){
        $form = new Lecture;
        if ($file=$request->file('file')){

                 $name=$file->getClientOriginalName();
                 $file->move('attachment',$name);
                 $form->attachment1=$name;

        }
        if ($video=$request->file('video')){

            $videoName=$video->getClientOriginalName();
            $video->move('video',$videoName);
            $form->video=$videoName;

        }
            $form->title1 = $request->title1;
            $form->title2 = $request->title2;
            $form->videoName = $request->videoName;
            $form->description = $request->description;
            $form->attachment2 = $request->nameOfFile;
            $form->save();
            return redirect()->back();
    }

    public function addStudent(Request $request){

        $student = new Student;
        $student->name = $request->name;
        $student->std = $request->std;
        $student->user_id = $request->user_id;
        $student->password = $request->password;
        $student->save();
        return redirect()->back();
    }
    public function addLecture(Request $request){

        print_r($request->input());
        $student = new Student;
        $student->name = $request->name;
        $student->user_id = $request->user_id;
        $student->password = $request->password;
        echo $student->save();
    }
    public function blank(){

        return view('blank');
    }
    public function updateLecture(Request $request, $id){

        $form =Lecture::find($id);

        if ($file=$request->file('file')){

            $name=$file->getClientOriginalName();
            $file->move('attachment',$name);
            $form->attachment1=$name;

        }
        if ($video=$request->file('video')){

            $videoName=$video->getClientOriginalName();
            $video->move('video',$videoName);
            $form->video=$videoName;

        }
        $form->title1 = $request->title1;
        $form->title2 = $request->title2;
        $form->videoName = $request->videoName;
        $form->description = $request->description;
        $form->attachment2 = $request->nameOfFile;
        $form->save();
        return redirect()->back();
    }
    public function deleteLecture(Request $role){

        $column= Lecture::find($role);
        $column->delete();



        return back();
    }
}
