<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = DB::table('jobs')
            ->join('companies', 'jobs.company_id', '=', 'companies.id')
            ->join('categories', 'jobs.category_id', '=', 'categories.id')
            ->join('users', 'jobs.user_id', '=', 'users.id')
            ->select('jobs.id',
                    'jobs.user_id',
                    'jobs.title', 
                    'jobs.description as job_description',
                    'jobs.created_at',
                    'jobs.salary', 
                    'companies.name', 
                    'companies.email', 
                    'companies.adress', 
                    'companies.description as company_description', 
                    'categories.name', 
                    'users.prename as user_prename', 
                    'users.name as user_name')
            ->get();

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = DB::table('companies')
            ->where('user_id', Auth()->user()->id)
            ->get();

        $categories = DB::table('categories')
            ->where('user_id', Auth()->user()->id)
            ->get();

        return view('jobs.add', [
            'companies' => $companies,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $job = new Job;

        $job->title = $request->title;
        $job->description = $request->description;
        $job->company_id = $request->company;
        $job->category_id = $request->category;
        $job->salary = $request->salary;
        $job->user_id = Auth::user()->id;
        
        $job->save();
        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        $job = DB::table('jobs')
            ->where('jobs.id', $job->id)
            ->join('companies', 'jobs.company_id', '=', 'companies.id')
            ->join('categories', 'jobs.category_id', '=', 'categories.id')
            ->join('users', 'jobs.user_id', '=', 'users.id')
            ->select('jobs.id',
                    'jobs.user_id',
                    'jobs.title', 
                    'jobs.description as job_description',
                    'jobs.created_at',
                    'jobs.salary', 
                    'companies.name', 
                    'companies.email', 
                    'companies.adress', 
                    'companies.description as company_description', 
                    'categories.name', 
                    'users.prename as user_prename', 
                    'users.name as user_name')
            ->first();

        return view('jobs.detail', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $job = DB::table('jobs')
            ->where('jobs.id', $job->id)
            ->join('companies', 'jobs.company_id', '=', 'companies.id')
            ->join('categories', 'jobs.category_id', '=', 'categories.id')
            ->join('users', 'jobs.user_id', '=', 'users.id')
            ->select('jobs.id',
                    'jobs.user_id',
                    'jobs.company_id',
                    'jobs.category_id',
                    'jobs.title', 
                    'jobs.description as job_description',
                    'jobs.created_at',
                    'jobs.salary', 
                    'companies.name as company_name', 
                    'companies.email', 
                    'companies.adress', 
                    'companies.description as company_description', 
                    'categories.name', 
                    'users.prename as user_prename', 
                    'users.name as user_name')
            ->first();
        $companies = DB::table('companies')
            ->where('user_id', Auth()->user()->id)
            ->get();

        $categories = DB::table('categories')
            ->where('user_id', Auth()->user()->id)
            ->get();

        return view('jobs.edit', [
            'job' => $job,
            'companies' => $companies,
            'categories' => $categories    
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->title = $request->title;
        $job->description = $request->description;
        $job->company_id = $request->company;
        $job->category_id = $request->category;
        $job->salary = $request->salary;
        
        $job->save();
        return redirect()->route('jobs.detail', $job);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
