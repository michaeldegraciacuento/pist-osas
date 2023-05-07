<?php
use Illuminate\Support\Facades\Route;
use App\Models\{News, Event, Announcement};


Auth::routes();

// Route::redirect('/');
Route::get('/', function () {
    $news =News::take(1)->get();
    $announcement =Announcement::take(1)->get();
    $event = Event::take(1)->get();
    return view('welcome',compact('news','announcement','event'));
});
Route::get('/student-handbook-development','DashboardController@shd')->name('frontend.shd');
Route::get('/economic-enterprise-development','DashboardController@eed')->name('frontend.eed');
Route::get('/career-and-job-placement-services','DashboardController@cajps')->name('frontend.cajps');
Route::get('/guidance-and-counseling-services','DashboardController@gacs')->name('frontend.gacs');
Route::get('/information-and-orientation-services','DashboardController@iaors')->name('frontend.iaors');
Route::get('/about-us','DashboardController@aboutUs')->name('frontend.aboutUs');
Route::get('/contact-us','DashboardController@contactUs')->name('frontend.contactUs');
Route::get('/services','DashboardController@services')->name('frontend.services');
Route::get('/news-post','DashboardController@newsPost')->name('frontend.newsPost');
Route::get('/event-post','DashboardController@eventPost')->name('frontend.eventPost');
Route::get('/announcement-post','DashboardController@announcementPost')->name('frontend.announcementPost');
Route::get('/studentWelfareServices','DashboardController@studentWelfareServices')->name('frontend.studentWelfareServices');
Route::get('/studentDevelopmentServices','DashboardController@studentDevelopmentServices')->name('frontend.studentDevelopmentServices');
Route::get('/institutionalStudentProgramsAndServices','DashboardController@institutionalStudentProgramsAndServices')->name('frontend.institutionalStudentProgramsAndServices');
Route::group(['middleware' => ['auth']],function() { 

    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
    Route::get('/colors', function () {     return view('dashboard.colors'); });
        Route::get('/typography', function () { return view('dashboard.typography'); });
        Route::get('/charts', function () {     return view('dashboard.charts'); });
        Route::get('/widgets', function () {    return view('dashboard.widgets'); });
        Route::get('/404', function () {        return view('dashboard.404'); });
        Route::get('/500', function () {        return view('dashboard.500'); });
        Route::prefix('base')->group(function () {  
        Route::get('/breadcrumb', function(){   return view('dashboard.base.breadcrumb'); });
        Route::get('/cards', function(){        return view('dashboard.base.cards'); });
        Route::get('/carousel', function(){     return view('dashboard.base.carousel'); });
        Route::get('/collapse', function(){     return view('dashboard.base.collapse'); });

        Route::get('/forms', function(){        return view('dashboard.base.forms'); });
        Route::get('/jumbotron', function(){    return view('dashboard.base.jumbotron'); });
        Route::get('/list-group', function(){   return view('dashboard.base.list-group'); });
        Route::get('/navs', function(){         return view('dashboard.base.navs'); });

        Route::get('/pagination', function(){   return view('dashboard.base.pagination'); });
        Route::get('/popovers', function(){     return view('dashboard.base.popovers'); });
        Route::get('/progress', function(){     return view('dashboard.base.progress'); });
        Route::get('/scrollspy', function(){    return view('dashboard.base.scrollspy'); });

        Route::get('/switches', function(){     return view('dashboard.base.switches'); });
        Route::get('/tables', function () {     return view('dashboard.base.tables'); });
        Route::get('/tabs', function () {       return view('dashboard.base.tabs'); });
        Route::get('/tooltips', function () {   return view('dashboard.base.tooltips'); });
    });
    Route::prefix('buttons')->group(function () {  
        Route::get('/buttons', function(){          return view('dashboard.buttons.buttons'); });
        Route::get('/button-group', function(){     return view('dashboard.buttons.button-group'); });
        Route::get('/dropdowns', function(){        return view('dashboard.buttons.dropdowns'); });
        Route::get('/brand-buttons', function(){    return view('dashboard.buttons.brand-buttons'); });
    });
    Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
        Route::get('/coreui-icons', function(){         return view('dashboard.icons.coreui-icons'); });
        Route::get('/flags', function(){                return view('dashboard.icons.flags'); });
        Route::get('/brands', function(){               return view('dashboard.icons.brands'); });
    });
    Route::prefix('notifications')->group(function () {  
        Route::get('/alerts', function(){   return view('dashboard.notifications.alerts'); });
        Route::get('/badge', function(){    return view('dashboard.notifications.badge'); });
        Route::get('/modals', function(){   return view('dashboard.notifications.modals'); });
    });
    Route::group(['middleware' => ['role:admin']],function() { 

        Route::group(['middleware' => ['role:admin']],function() { 
            Route::resource('users','UsersController');   
            Route::resource('news','NewsController'); 
            Route::resource('students','StudentController'); 
            Route::resource('appointments','AppointmentController');
            Route::resource('events','EventController'); 
            Route::resource('announcements','AnnouncementController'); 
            Route::post('/storeStudent','UsersController@storeStudent'); 

            Route::get('/updateStudent/{id}','UsersController@updateStudent');    
            Route::post('/editStudent/{id}','UsersController@editStudent'); 
            
            Route::get('/destroyStudent/{id}','UsersController@destroyStudent');    
            Route::post('/destroyGetStudent/{id}','UsersController@destroyGetStudent'); 
            Route::get('/datepicker',[AppointmentController::class, 'datepicker'])->name('datepicker');
            Route::post('/set-appointment',[AppointmentController::class, 'setAppointment'])->name('set-appointment');    
        });
    });  
    Route::group(['middleware' => ['role:student|admin']],function() { 

        Route::group(['middleware' => ['role:student|admin']],function() {  
            Route::resource('appointments','AppointmentController');
            Route::get('/viewAppointment/{id}','UsersController@viewAppointment'); 
            Route::get('/datepicker',[App\Http\Controllers\AppointmentController::class, 'datepicker'])->name('datepicker');
            Route::post('/set-appointment',[App\Http\Controllers\AppointmentController::class, 'setAppointment'])->name('set-appointment');    
            // Route::post('/storeStudent','UsersController@storeStudent'); 
            // Route::get('/updateStudent','UsersController@storeStudent');
            
        });
    });

    Route::group(['middleware' => ['role:assistant|admin']],function() { 

        Route::group(['middleware' => ['role:assistant|admin']],function() {  
            Route::resource('users','UsersController');   
            Route::resource('news','NewsController'); 
            Route::resource('holidays','HolidayController'); 
            Route::resource('students','StudentController'); 
            Route::resource('events','EventController'); 
            Route::resource('announcements','AnnouncementController'); 
            Route::post('/storeStudent','UsersController@storeStudent');
            Route::get('/updateStudent/{id}','UsersController@updateStudent');    
            Route::post('/editStudent/{id}','UsersController@editStudent'); 

            Route::get('/requestNews/{id}','NewsController@requestNews'); 
            Route::post('/requestStatusNews/{id}','NewsController@requestStatusNews'); 

            Route::get('/requestEvents/{id}','EventController@requestEvents'); 
            Route::post('/requestStatusEvents/{id}','EventController@requestStatusEvents'); 

            Route::get('/requestAnn/{id}','AnnouncementController@requestAnn'); 
            Route::post('/requestStatusAnn/{id}','AnnouncementController@requestStatusAnn'); 
            
            Route::get('/destroyStudent/{id}','UsersController@destroyStudent');    
            Route::post('/destroyGetStudent/{id}','UsersController@destroyGetStudent');  
        });
    });
    
    Route::group(['middleware' => ['role:guidance|admin|student|assistant']],function() { 

        Route::group(['middleware' => ['role:guidance|admin|student|assistant']],function() {  
            Route::resource('appointments','AppointmentController');
            Route::resource('holidays','HolidayController'); 
            // Route::get('/datepicker',[App\Http\Controllers\AppointmentController::class, 'datepicker'])->name('datepicker');
            // Route::post('/set-appointment',[App\Http\Controllers\AppointmentController::class, 'setAppointment'])->name('set-appointment');    
            // Route::post('/storeStudent','UsersController@storeStudent'); 
            // Route::get('/updateStudent','UsersController@storeStudent');
            
        });
    });  
});