<?php

use App\Http\Controllers\CertificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Artisan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


// ------------------------------------------------- front page -----------------------------------------------------

Route::get('test_page', function () {
    return view('admin.certification.certificate');
});


Route::get('/', function () {
    return view('front.index');
});

//Route::get('tt', function () {
//    \App\Application::query()->update([
//        'application_state' => null
//    ]);
//});

Route::get('about', "FrontPageController@about")->name('front.about');
Route::get('contact', "FrontPageController@contact")->name('front.contact');
Route::get('message', "FrontPageController@message")->name('front.message');
Route::get('message2', "FrontPageController@message2")->name('front.message2');
Route::get('faq', "FrontPageController@faq")->name('front.faq');

// ------------------------------------------------------------------------------------------------ end -  front page


Auth::routes(['verify' => true]);

Route::get('/panel', 'HomeController@index')->name('home');

// ----------------------------------------------------- User Admin panel -------------------------------------------------

Route::middleware(['user', 'auth', 'verified'])->group(function () {
    Route::get('user-admin', [UserAdminController::class, 'dashboard'])->name('user.dashboard');
    Route::get('user-about', [UserAdminController::class, 'about'])->name('user.about');
    Route::get('user-profile', [UserAdminController::class, 'profile'])->name('user.profile');

//    -------------------- Certification -----------------------------

    Route::get("certification", "CertificationController@index")->name("user.certificate");

//    -------------------- Certification -----------------------------

//    ------------------------ personal form ---------------------------

    Route::resource('personal-form', PersonalFormController::class);


    //    ------------------------ personal form ----------------------------

    //    ------------------------ educational form ---------------------------

    Route::resource('educational-form', EducationalController::class);

    //    --------------------------------------------- end -  educational form


    //    ------------------------ travel form ---------------------------

    Route::resource('travel-form', TravelController::class);

    //    --------------------------------------------- end -  travel form

    // --------------------------- banking form ---------------------------

    Route::resource('banking-form', BankingController::class);

    // ------------------------------------------------- end - banking form

});
// -------------------------------------------------------------------------------------------------- end - User Admin panel


// -------------------------------------------------- Admin control --------------------------------------------------------

Route::middleware(['admin', 'auth'])->group(function () {

//    -------------------- Admin Control ----------------------------

    Route::get('admin/create', "AdminChangeController@index")->name('index_admin');
    Route::get('admin/store', "AdminChangeController@store")->name('store_admin');
    Route::get('admin/{id}/delete', "AdminChangeController@delete")->name('delete_admin');

//    -------------------- Admin Control ----------------------------


});


// -------------------------------------------------- Admin control --------------------------------------------------------


// -------------------------------------------------- Admin panel ----------------------------------------------------------

Route::middleware(['admin', 'auth', 'verified'])->group(function () {
    Route::get('admin-panel', 'AdminController@dashboard')->name('admin-panel');


//    -------------------- Email candidate ---------------------------

    Route::get('email/{id}/candidate', 'EmailCandidateController@createMail')->name('create-email');
    Route::post('email/candidate', 'EmailCandidateController@sendMail')->name('email-candidate');

//    -------------------- Email candidate ---------------------------


//    -------------------- report candidate --------------------------

    Route::get('report/{id}', "ReportController@show")->name('applicant-report');

//    -------------------- report candidate --------------------------


//    -------------------- report delete --------------------------

    Route::get('report/{id}/delete', "ReportController@deleteReport")->name('delete-report');

//    -------------------- report delete --------------------------


//    -------------------- Application Bank --------------------------

    Route::get('application-bank', 'AdminController@applicationBank')->name('application-bank');
    Route::get('archived-application-bank', 'AdminController@archivedApplicationBank')->name('archived-application-bank');

//    ----------------------------------------- end - Application Bank

//    ------------------ Archive server ------------------------------

    Route::get('archive', 'AdminController@siteArchive')->name('archive');
    Route::get('data/archive', 'AdminController@dataArchive')->name('data.archive');
    Route::get('data/unArchive', 'AdminController@dataUnArchive')->name('data.unArchive');

//   -------------------------------------------- end - Archive server

//    --------------------- Form Approval ----------------------------

    Route::get('personal/{id}/verification', 'ApprovalController@personalForm')->name('personal-verification');
    Route::get('educational/{id}/verification', 'ApprovalController@educationalForm')->name('educational-verification');
    Route::get('travel/{id}/verification', 'ApprovalController@travelForm')->name('travel-verification');
    Route::get('banking/{id}/verification', 'ApprovalController@bankingForm')->name('banking-verification');

//    ------------------------------------------- end -  Form Approval

//    -------------------- Form remarks --------------

//    Route::get('form/{id}/accept', 'ApprovalController@accept')->name('accept-approval');
//    Route::get('form/{id}/reject', 'ApprovalController@reject')->name('reject-approval');

    Route::get('remarks/{id}', "RemarksController@index")->name("remarks-index");
    Route::post('remarks', "RemarksController@store")->name("remarks-store");

//    ---------------------------- end -  Form remarks

//    -------------------- deadline settings --------------

    Route::resource('expire', ExpireController::class);

//    -------------------- deadline settings --------------

//    --------------------- Excel export ------------------

    Route::get('/export-excel', "ExcelController@exportIntoExcel")->name('export-excel');
    Route::get('/export-csv', [\App\Http\Controllers\ExcelController::class, 'exportIntoCsv'])->name('export-csv');
    Route::get('/export-json', [\App\Http\Controllers\ExcelController::class, 'exportJson'])->name('export-json');


//    ---------------------- Excel export ------------------


});

// -------------------------------------------------------------------------------------------------------- end -  Admin panel

// --------------------------------------- change password for both admin and user -------------------------------------------

Route::middleware('auth')->group(function () {
    Route::get('password-change', 'ChangePasswordController@passwordChangePage')->name('password-change');
    Route::post('changePass', 'ChangePasswordController@changePassword')->name('changePass');
});

// ---------------------------------------------------------------------------- end -  change password for both admin and user


// --------------------------------------------------- log out ---------------------------------------------------------------

Route::get('/logout', function () {
    auth()->logout();
    return redirect("/");
})->name('logout-page');

// ------------------------------------------------------------------------------------------------------------ end - log out


// ---------------------- test -------------------------------
//
// Route::get('seed', function () {
//     Artisan::call('db:seed');
// });
//
//Route::get('linkup', function () {
//    Artisan::call('storage:link');
//});

// ---------------------- test -------------------------------


// ----------------------- Array push -------------------------

//Route::get('array', function (){
//    $inputs = [];
//    $applicant = \App\Application::all();
//
//    foreach ($applicant as $data){
//
//        $tt = [];
//
//        $new_data = $data->user_id;
//
//        $user = \App\User::find($new_data);
//
//         $tt['firstname'] = $user->personal->fname;
//         $tt['lastname'] = $user->personal->lname;
//
//        $tt['applicant_unique_id'] = $user->application->applicant_unique_id;
//        $tt['status'] = $user->application->status;
//
//
//        $tt['passport'] = $user->banking->passport_number;
//         $tt['nid'] = $user->banking->nid;
//         $tt['name_of_bank'] = $user->banking->name_of_bank;
//         $tt['name_of_branch'] = $user->banking->name_of_branch;
//         $tt['account_belongs_to'] = $user->banking->belongs_to;
//         $tt['bank_account_number'] = $user->banking->bank_account_number;
//         $tt['name_of_account'] = $user->banking->name_of_account;
//
//         $tt['phone_number'] = $user->personal->phone_number;
//         $tt['study_country'] = $user->educational->study_country;
//
//         $tt['name_of_university'] = $user->educational->name_of_university;
//         $tt['portal_address_of_university'] = $user->educational->portal_address_of_university;
//         $tt['academic_degree'] = $user->educational->academic_degree;
//         $tt['date_of_commencement'] = $user->educational->date_of_commencement;
//
//         $tt['e_ticket_number'] = $user->travel->ticket_number_text;
//         $tt['ticket_purchased'] = $user->travel->ticket_purchased;
//         $tt['date_of_departure'] = $user->travel->date_of_departure;
//         $tt['date_of_arrival'] = $user->travel->date_of_arrival;
//         $tt['port_of_embarkation'] = $user->travel->port_of_embarkation;
//         $tt['name_of_city_arrival'] = $user->travel->name_of_city_2;
//
//
//        array_push($inputs,$tt);
//
//    }
//
//    return $inputs;
//
//});

// ----------------------- Array push -------------------------

//----------------------- multiple files download -------------


//----------------------- multiple files download -------------
