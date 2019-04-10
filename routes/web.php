<?php

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



Route::get('/','PagesController@homepage')->name('homepage');
Route::get('/homepage','PagesController@homepage')->name('homepage');
Route::get('/others','OthersController@others')->name('others');
Route::get('/researchNews','ResearchController@researchNews')->name('researchNews');
Route::get('/others','OthersController@others')->name('others');
Route::get('/cse_society','CSESocietyController@society')->name('society');
Route::get('/stu_login','LoginController@stu_login')->name('stu_login');
Route::get('/user_login','LoginController@login_page')->name('login_page');
Route::get('/teachers','TeachersController@teachers')->name('teachers');
Route::get('/staff','StaffController@staff')->name('staff');
Route::get('/syllabus','SyllabusController@syllabus')->name('syllabus');
Route::get('/notice','NoticeController@notice')->name('notice');
Route::get('/contact','ContactController@contact')->name('contact');
Route::get('/programming','ProgrammingController@programming')->name('programming');
Route::get('/gallary','GallaryController@gallary')->name('gallary');


// Student Login
//Route::post('/stu_login','LoginController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Student's Result
//Route::get('/home2','Student\ShowResultController@input')->name('input');
Route::get('/home/semester_result','Student\ShowResultController@showResult')->name('showResult');
Route::get('/result','ShowResultController@input')->name('input');


/// AdminLoginRegister

Route::prefix('admin')->group(function () {

 Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
  Route::get('/register', 'AdminController@create')->name('admin.register');
  Route::post('/register', 'AdminController@store')->name('admin.register.store');
  Route::get('/login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
  Route::post('/login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
  Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});




///MyRoutes for Admin Panel


Route::get('/adminHome','Auth\AdminController@adminHome')->name('adminHome');



Route::post('/societyaction','Admin\insertFormController@storeDevice');
Route::post('/teacheraction','Admin\insertFormController@teacher');
Route::post('/staffaction','Admin\insertFormController@staff');
Route::post('/othersaction','Admin\insertFormController@others');
Route::post('/noticeaction','Admin\insertFormController@notice');
Route::post('/researchaction','Admin\insertFormController@research');
Route::post('/galleryaction','Admin\insertFormController@gallery');

// admin cse society part

Route::get('/adminHome/insert_society','Admin\insertFormController@insertSociety')->name('insertSociety');
Route::get('/adminHome/insert_teacher','Admin\insertFormController@insertTeacher')->name('insertTeacher');
Route::get('/adminHome/insert_staff','Admin\insertFormController@insertStaff')->name('insertStaff');
Route::get('/adminHome/insert_notice','Admin\insertFormController@insertNotice')->name('insertNotice');
Route::get('/adminHome/insert_others','Admin\insertFormController@insertOthers')->name('insertOthers');
Route::get('/adminHome/insert_research','Admin\insertFormController@insertResearch')->name('insertResearch');
Route::get('/adminHome/insert_gallery','Admin\insertFormController@insertGallery')->name('insertGallery');

// admin insert view part (get)

Route::get('/adminHome/res_1_1','Admin\InsertController@view_insert_1_1')->name('view_insert_1_1');
Route::get('/adminHome/res_1_2','Admin\InsertController@view_insert_1_2')->name('view_insert_1_2');
Route::get('/adminHome/res_2_1','Admin\InsertController@view_insert_2_1')->name('view_insert_2_1');
Route::get('/adminHome/res_2_2','Admin\InsertController@view_insert_2_2')->name('view_insert_2_2');
Route::get('/adminHome/res_3_1','Admin\InsertController@view_insert_3_1')->name('view_insert_3_1');
Route::get('/adminHome/res_3_2','Admin\InsertController@view_insert_3_2')->name('view_insert_3_2');
Route::get('/adminHome/res_4_1','Admin\InsertController@view_insert_4_1')->name('view_insert_4_1');
Route::get('/adminHome/res_4_2','Admin\InsertController@view_insert_4_2')->name('view_insert_4_2');




/// admin insert  part (post)
Route::post('adminHome/res_1_1','Admin\InsertController@insert_1_1')->name('insert_1_1');
Route::post('/adminHome/res_1_2','Admin\InsertController@insert_1_2')->name('insert_1_2');
Route::post('/adminHome/res_2_1','Admin\InsertController@insert_2_1')->name('insert_2_1');
Route::post('/adminHome/res_2_2','Admin\InsertController@insert_2_2')->name('insert_2_2');
Route::post('/adminHome/res_3_1','Admin\InsertController@insert_3_1')->name('insert_3_1');
Route::post('/adminHome/res_3_2','Admin\InsertController@insert_3_2')->name('insert_3_2');
Route::post('/adminHome/res_4_1','Admin\InsertController@insert_4_1')->name('insert_4_1');
Route::post('/adminHome/res_4_2','Admin\InsertController@insert_4_2')->name('insert_4_2');


/// admin update part(get)


Route::get('adminHome/update/check_view','Admin\UpdateController@checkUpdateView')->name('checkUpdateView');
Route::get('adminHome/update/check','Admin\UpdateController@checkUpdate')->name('checkUpdate');


Route::get('/adminHome/update/res_1_1','Admin\UpdateController@view_update_1_1')->name('view_update_1_1');
Route::get('/adminHome/update/res_1_2','Admin\UpdateController@view_update_1_2')->name('view_update_1_2');
Route::get('/adminHome/update/res_2_1','Admin\UpdateController@view_update_2_1')->name('view_update_2_1');
Route::get('/adminHome/update/res_2_2','Admin\UpdateController@view_update_2_2')->name('view_update_2_2');
Route::get('/adminHome/update/res_3_1','Admin\UpdateController@view_update_3_1')->name('view_update_3_1');
Route::get('/adminHome/update/res_3_2','Admin\UpdateController@view_update_3_2')->name('view_update_3_2');
Route::get('/adminHome/update/res_4_1','Admin\UpdateController@view_update_4_1')->name('view_update_4_1');
Route::get('/adminHome/update/res_4_2','Admin\UpdateController@view_update_4_2')->name('view_update_4_2');


/// admin update part(Post)


Route::post('/adminHome/update/res_1_1','Admin\UpdateController@Update_1_1')->name('update_1_1');
Route::post('/adminHome/update/res_1_2','Admin\UpdateController@Update_1_2')->name('update_1_2');
Route::post('/adminHome/update/res_2_1','Admin\UpdateController@Update_2_1')->name('update_2_1');
Route::post('/adminHome/update/res_2_2','Admin\UpdateController@Update_2_2')->name('update_2_2');
Route::post('/adminHome/update/res_3_1','Admin\UpdateController@Update_3_1')->name('update_3_1');
Route::post('/adminHome/update/res_3_2','Admin\UpdateController@Update_3_2')->name('update_3_2');
Route::post('/adminHome/update/res_4_1','Admin\UpdateController@Update_4_1')->name('update_4_1');
Route::post('/adminHome/update/res_4_2','Admin\UpdateController@Update_4_2')->name('update_4_2');



///admin delete part(get)

Route::get('/adminHome/delete_res','Admin\DeleteController@view_delete_res')->name('view_delete_res');

/// admin delete part(post)
Route::post('/adminHome/delete_res','Admin\DeleteController@delete_res')->name('delete_res');


///  admin others form part
Route::get('/adminHome/research_news','Admin\FormController@view_research_news')->name('view_research_news');
Route::post('/adminHome/research_news','Admin\FormController@research_news')->name('post_research_news');

// admin notice part
