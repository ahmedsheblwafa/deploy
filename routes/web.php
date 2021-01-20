<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRecourseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\CourseVideosController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\Auth\Controller;
use App\Models\Course;
use App\Models\Video;
use App\Models\Magazine;
use App\Models\CourseVideo;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\ContactMessage;


/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $videos = Video::All()->Take(3);
    
    return view('guest.home',['videos'=>$videos]);
});


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource("video",VideoController::class);
Route::resource("coursevideo",CourseVideosController::class);
Route::resource("comment",CommentController::class);
Route::resource("reply",ReplyController::class);
Route::resource("message",ContactMessageController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/student/courses', function () {
    return view('student.courses');
})->name('courses');

// login
Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
 

    

});
// ADMIN ////////////////////////////////////////////////////////////////////////////

Route::group(['middleware'=>'auth'], function(){

    Route::group(['middleware'=>'userType:1'], function(){
        Route::get('/admin/dash',function(){
            return view('admin.dashboard');
        });
    });
    // TEACHER MIDDLWARE***************************************************************************

    Route::group(['middleware'=>'userType:4'], function(){
        Route::get('/teacher/home',function(){
            $videos = Video::All()->Take(3);
    
            return view('teacher.home',['videos'=>$videos]);
        });

        Route::get('/teacher/mycourse',function(){
            $user=Auth()->user();
            // dd($user);
            return view('teacher.mycourses',['user'=>$user]);
           
        })->name('mycourses');

        Route::get('/teacher/showcomment/{video}',function(CourseVideo $video){
           return view ('teacher.comment',['video'=>$video]);
        })->name('showcomment');

        
        Route::get('/teacher/aboutus',function(){
            return view('teacher.aboutus');
        });
        
        Route::get('/teacher/contactus',function(){
            return view('teacher.contactus');
        });
        
        Route::get('/teacher/video',function(){
        $videos = Video::All();
        return view('teacher.video',['videos'=>$videos]);
        
        });


        Route::get('/teacher/magazine',function(){
           
            $magazines = Magazine::All();
          return view('teacher.magazine',['magazines'=>$magazines]);
            
            });
        
        
        Route::get('/teacher/comment',function(){
            return view('teacher.comment');
        });
        
        Route::get('/teacher/task',function(){
            return view('teacher.task');
        });
        
        Route::get('/teacher/result',function(){
            return view('teacher.result');
        });
    
    });
    // STUDENT MMIDDLEWARE /////////////////////////////////////////////////
    Route::group(['middleware'=>'userType:2'], function(){
        Route::get('/student/home',function(){
            $videos = Video::All()->Take(3);
    
            return view('student.home',['videos'=>$videos]);
        });
        Route::get('/student/aboutus',function(){
            return view('student.about');
        });
        
        Route::get('/student/contactus',function(){
            return view('student.contactus');
        });
        
        Route::get('/student/video',function(){
            $videos = Video::All();
            return view('student.video',['videos'=>$videos]);
        });
        Route::get('/student/magazine',function(){
           
            $magazines = Magazine::All();
          return view('student.magazine',['magazines'=>$magazines]);
            
            });
        
        Route::get('/student/courses',function(){
            $courses = Course::where('grade',Auth::user()->grade)->get();
            
            return view('student.courses',['courses'=>$courses]);
        });

        Route::get('/student/profile',function(){
            return view('student.profile');
        });
        Route::get('/student-dash',function(){
            return view('user/student-dash');
        });
    
    });
    ///////////////////////////////////////////////////////////////////////////////////
    // middleware of parent-============================
    Route::group(['middleware'=>'userType:3'], function(){
        Route::get('parent/home',function(){
            $videos = Video::All()->Take(3);
    
    return view('parent.home',['videos'=>$videos]);
        });
            Route::get('/parent/aboutus',function(){
            return view('parent.about');
        });

        Route::get('/parent/contactus',function(){
            return view('parent.contactus');
        });

        Route::get('/parent/video',function(){
            $videos = Video::All();
            return view('parent.video',['videos'=>$videos]);
        });
        Route::get('/parent/magazine',function(){
           
           
            $magazines = Magazine::All();
          return view('parent.magazine',['magazines'=>$magazines]);
        });

        Route::get('/parent/parentview',function(){
            return view('parent.parentview');
        });
            
    });

});



/**************************************************************** */
//guest view
Route::get('home',function(){
    $videos = Video::All()->Take(3);
    
    return view('guest.home',['videos'=>$videos]);
});

Route::get('/aboutus',function(){
    return view('guest.about');
});

Route::get('/contactus',function(){
    return view('guest.contactus');
});

Route::get('/video',function(){
    $videos = Video::All();
    return view('guest.video',['videos'=>$videos]);
});
Route::get('/guest/magazine',function(){
           
    $magazines = Magazine::All();
    return view('guest.magazine',['magazines'=>$magazines]);
});
/************************************************************** */
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/admin/student', [AdminViewHandeling::class, 'student']);


Route::get('/admin/teacher',function(){
    return view('admin.teacher-dash');
});

Route::get('/admin/parent',function(){
    return view('admin.parent-dash');
});

Route::get('/admin/user',function(){
    return view('admin.user-dash');
});



Route::get('/admin/course',function(){
    return view('admin.course-dash');
});

Route::get('/admin/event',function(){
    return view('admin.event-dash');
});

Route::get('/admin/exam',function(){
    return view('admin.exam-dash');
});

Route::get('/admin/grade',function(){
    return view('admin.grade-dash');
});



//--------------------------------------------------------------------------
// Route::get("/invoke",[App\Http\Controllers\UserRecourseController::class,"__invoke"]);

// Route::get("/aws","App\Http\Controllers\UserRecourseControllerr@getAWSTask")->name("awsroute");
Route::resource('user', UserRecourseController::class);
Route::resource('course', CourseController::class);
Route::resource('magazine', MagazineController::class);
// Route::put('user', UserRecourseController::class,'update')->name('update');
// Route::get('/admin/usershow', [UserController::class, 'show'])->name('usershow');
// Route::get('/admin/usershow', [UserController::class, 'show'])->name('usershow');




//ADD (crud)


//--------------------------------------------------------------------------

//view (crud)



//--------------------------------------------------------------------------


// //student list
Route::get('admin/student','App\Http\Controllers\UserController@indexStudent');

// //Parent list
Route::get('admin/parent','App\Http\Controllers\UserController@indexParent');

// //Teacher list
Route::get('admin/teacher','App\Http\Controllers\UserController@indexTeacher');

// //user list
Route::get('admin/user','App\Http\Controllers\UserController@indexUser');




