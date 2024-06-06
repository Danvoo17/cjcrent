<?php

namespace App\Http\Controllers;

use App\Models\FailedJob;
use App\Http\Requests\FailedJobRequest;

/**
 * Class FailedJobController
 * @package App\Http\Controllers
 */
class FailedJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $failedJobs = FailedJob::paginate();

        return view('failed-job.index', compact('failedJobs'))
            ->with('i', (request()->input('page', 1) - 1) * $failedJobs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $failedJob = new FailedJob();
        return view('failed-job.create', compact('failedJob'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FailedJobRequest $request)
    {
        FailedJob::create($request->validated());

        return redirect()->route('failed-jobs.index')
            ->with('success', 'FailedJob created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $failedJob = FailedJob::find($id);

        return view('failed-job.show', compact('failedJob'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $failedJob = FailedJob::find($id);

        return view('failed-job.edit', compact('failedJob'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FailedJobRequest $request, FailedJob $failedJob)
    {
        $failedJob->update($request->validated());

        return redirect()->route('failed-jobs.index')
            ->with('success', 'FailedJob updated successfully');
    }

    public function destroy($id)
    {
        FailedJob::find($id)->delete();

        return redirect()->route('failed-jobs.index')
            ->with('success', 'FailedJob deleted successfully');
    }
}
