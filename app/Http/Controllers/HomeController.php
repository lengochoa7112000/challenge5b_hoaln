<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use File;

class HomeController extends Controller
{
    public function member() {
        $data = DB::table("member")
        -> select("*")
        -> get();

        return view('member', ['member' => $data]);
    }

    public function teacherEdit($id) {
        $data = DB::table("member")
        -> where('id', $id)
        -> select("*")
        -> get();

        return view('teacher_edit', ['member' => $data]);
    }

    public function postEdit(Request $rq) {
        $id = $rq->id;
        $username = $rq->username;
        $password = $rq->password;
        $fullname = $rq->fullname;
        $email = $rq->email;
        $phone = $rq->phone;
        
        DB::table('member')
        ->where('id', $id)
        ->update(['username' => $username, 'password' => $password, 'fullname' => $fullname, 'email' => $email, 'phone' => $phone]);

        return redirect()->to('member.php')->send();
    }

    public function login(Request $rq) {
        $username = $rq->username;
        $password = $rq->password;

        $check = DB::table('member')
        ->where('username', $username)
        ->select('password')
        ->get();
        foreach($check as $checks) {
            if ($checks->password === $password) {
                return redirect()->to('/')->send();
            }
            else {
                return redirect()->to('login.php')->send();
            }
        }
    }

    public function profile($id) {
        $data = DB::table("member")
        ->where('id', $id)
        -> select("*")
        -> get();

        return view('profile', ['member' => $data]);
    }

    public function editProfile($id) {
        $data = DB::table("member")
        ->where('id', $id)
        -> select("*")
        -> get();

        return view('edit_profile', ['member' => $data]);
    }

    public function postEditProfile(Request $rq) {
        $id = $rq->id;
        $username = $rq->username;
        $password = $rq->password;
        $fullname = $rq->fullname;
        $email = $rq->email;
        $phone = $rq->phone;
        
        DB::table('member')
        ->where('id', $id)
        ->update(['password' => $password, 'email' => $email, 'phone' => $phone]);

        return redirect()->to('member.php')->send();
    }

    public function postSendMessage(Request $rq) {
        $id = $rq->id;
        $message = $rq->message;
        
        DB::table('member')
        ->where('id', $id)
        ->update(['message_to' => $message]);

        return redirect()->to('member.php')->send();
    }

    public function sendMessage($id) {
        $data = DB::table("member")
        ->where('id', $id)
        -> select("*")
        -> get();

        return view('message', ['member' => $data]);
    }

    public function postEditMessage(Request $rq) {
        $id = $rq->id;
        $message = $rq->message;
        
        DB::table('member')
        ->where('id', $id)
        ->update(['message_to' => $message]);

        return redirect()->to('member.php')->send();
    }

    public function editMessage($id) {
        $data = DB::table("member")
        ->where('id', $id)
        -> select("*")
        -> get();

        return view('edit_message', ['member' => $data]);
    }

    public function receivedMessage($id) {
        $data = DB::table("member")
        ->where('id', $id)
        -> select("*")
        -> get();

        return view('message_received', ['member' => $data]);
    }

    public function indexUpload(Request $req) {
        echo "<a href=\"index.php\">Index</a><br>";
        echo "path of file upload: ";
        $pathfile = $req->file('file')->store('exercises');
        $new_pathfile = str_replace('exercises/', '', $pathfile);
        DB::table('exercise')->insert(
            ['exercise_location' => $new_pathfile]
        );
        return $new_pathfile;
    }

    public function exercise() {
        $data = DB::table("exercise")
        -> select("*")
        -> get();

        return view('exercise', ['exercise' => $data]);
    }

    public function downloadExercise($file_name) {
        $path = storage_path().'\app\exercises\\'.$file_name;
        return Response::download($path, $file_name);
    }

    public function indexSubmit(Request $req) {
        echo "<a href=\"index.php\">Index</a><br>";
        echo "path of file upload: ";
        $pathfile = $req->file('file')->store('submit_exercises');
        $new_pathfile = str_replace('submit_exercises/', '', $pathfile);
        DB::table('submit_exercise')->insert(
            ['submit_exercise_location' => $new_pathfile]
        );
        return $new_pathfile;
    }

    public function viewExercise() {
        $data = DB::table("submit_exercise")
        -> select("*")
        -> get();

        return view('view_submit_exercise', ['submit_exercise' => $data]);
    }

    public function downloadSubmitExercise($file_name) {
        $path = storage_path().'\app\submit_exercises\\'.$file_name;
        return Response::download($path, $file_name);
    }

    public function indexUploadChallenge(Request $req) {
        $challenge_description = $req->challenge_description;
        $index = "<a href=\"index.php\">Index</a><br>";
        $pathfile = $req->file('file')->store('challenges');
        $challenge_name = $req->file('file')->getClientOriginalName();
        $challenge_name = md5(substr($challenge_name, 0, -4));
        $new_pathfile = str_replace('challenges/', '', $pathfile);
        DB::table('challenge')->insert(
            ['challenge_location' => $new_pathfile, 'challenge_name' => $challenge_name, 'challenge_description' => $challenge_description]
        );
        echo "Upload success!<br>";
        return $index;
    }

    public function challenge() {
        $data = DB::table("challenge")
        -> select("*")
        -> get();

        return view('student_challenge', ['challenge' => $data]);
    }

    public function submitChallenge(Request $rq) {
        $data = DB::table("challenge")
        -> select("*")
        -> get();
        $ans = $rq->answer;
        if (DB::table('challenge')->where('challenge_name', md5($ans))->exists()) {
            $location = DB::table("challenge")
            -> where('challenge_name', md5($ans))
            -> select("challenge_location")
            -> get();
            $loc = $location[0]->challenge_location;
            return File::get(storage_path('app\challenges\\'.$loc));
        } else {
            return redirect()->to('student_challenge.php')->send();
        }
    }
}