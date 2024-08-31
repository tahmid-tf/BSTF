<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function dashboard()
    {
        $applications_counter = Application::count();
        $applications_acceptance_counter = Application::where('status', '=', 'accepted')->count();

        return view('admin.admin_content.dashboard.dashboard', compact('applications_counter', 'applications_acceptance_counter'));
    }

    public function applicationBank()
    {
        $type = "Current Applications";
        $applications = Application::where('application_state', null)->orderBy('id', 'DESC')->get();
        return view('admin.admin_content.application_bank.application', compact('applications','type'));
    }

    public function archivedApplicationBank()
    {
        $type = "Archived Applications";
        $applications = Application::where('application_state', 'archive')->orderBy('id', 'DESC')->get();
        return view('admin.admin_content.application_bank.application', compact('applications','type'));
    }

//    -------------------------------------- expiration date -----------------------------------

    public function expirationDate()
    {

    }

//    -------------------------------------- expiration date -----------------------------------

    public function siteArchive()
    {
        Artisan::call('down');
        return "Site Archived";
    }

//    -------------------------------------- data archive -----------------------------------

    public function dataArchive()
    {
        \App\Application::query()->update([
            'application_state' => 'archive'
        ]);

        return back();
    }

//    -------------------------------------- data archive -----------------------------------

//    -------------------------------------- data unArchive -----------------------------------

    public function dataUnArchive()
    {
        \App\Application::query()->update([
            'application_state' => null
        ]);

        return back();
    }

//    -------------------------------------- data unArchive -----------------------------------


}
