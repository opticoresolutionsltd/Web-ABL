<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectRouteController extends Controller
{
    public function allProjects()
    {
        return view('main.projects.all-projects');
    }

    public function upcomingProject()
    {
        return view('main.projects.upcoming.individual-project');
    }

    public function ongoingProject()
    {
        return view('main.projects.ongoing.individual-project');
    }

    public function handoverProject()
    {
        return view('main.projects.handover.individual-project');
    }
}
