<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;


class StudentsController extends Controller
{
    //

    function insert()
    {
        $student = new Students();

        if (Input::get('fullname') == null)
        {
            return 'Fullname cannot be empty';
        }
        else
        {
            $student->fullname = Input::get('fullname');
        }

        if (Input::get('rollnumber') == null)
        {
            return 'Roll number cannot be empty';
        }
        else
        {
            $student->rollnumber = Input::get('rollnumber');
        }

        if (Input::get('email') == null)
        {
            return 'Email cannot be empty';
        }
        else
        {
            $student->email = Input::get('email');
        }

        if (Input::get('phone') == null)
        {
            return 'Phone number cannot be empty';
        }
        else
        {
            $student->phone = Input::get('phone');
        }

        $student->save();
        return 'Insert Complete';
    }

    function listStudent(){
        $students = Students::all();
        return View::make('list')
            ->with('listStudent', $students);
    }

    function delete(Request $request,$id){
        $student = Students::find($id);
        $student->delete();
        return 'Delete Complete';
    }

    function updateStudent(Request $request,$id)
    {
        $student = Students::find($id);
        return View::make('updateStudent')
            ->with(['id'=>$id,'student'=>$student]);
    }

    function update(Request $request,$id){
        $student = Students::find($id);
        $student ->fullname = Input::get('fullname');
        $student ->rollnumber = Input::get('rollnumber');
        $student ->email = Input::get('email');
        $student ->phone = Input::get('phone');
        $student -> save();
        return 'Update Complete';
    }


}
