<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 20);
        $jobtitle = $request->input('jobtitle');
        $slug = $request->input('slug');
        $joblocation_id = $request->input('joblocation_id');
        $jobcategory_id = $request->input('jobcategory_id');
        $company_id = $request->input('company_id');


        if($slug)
        {
            $job = Job::with('Location', 'JobCategory', 'Company')
                    ->where('slug', $slug)->first();

            if($job)
                return ResponseFormatter::success($job, 'Data Berhasil Diambil');
            else
                return ResponseFormatter::error(null, 'Data Tidak Ada', 404);
        }

        if($joblocation_id)
        {
            $job = Job::with('Location', 'JobCategory', 'Company')
                    ->where('joblocation_id', $joblocation_id)->get();

            if($job)
                return ResponseFormatter::success($job, 'Data Berhasil Diambil');
            else
                return ResponseFormatter::error(null, 'Data Tidak Ada', 404);
        }

        if($jobcategory_id)
        {
            $job = Job::with('Location', 'JobCategory', 'Company')
                    ->where('jobcategory_id', $jobcategory_id)->get();

            if($job)
                return ResponseFormatter::success($job, 'Data Berhasil Diambil');
            else
                return ResponseFormatter::error(null, 'Data Tidak Ada', 404);
        }

        if($company_id)
        {
            $job = Job::with('Location', 'JobCategory', 'Company')
                    ->where('company_id', $company_id)->get();

            if($job)
                return ResponseFormatter::success($job, 'Data Berhasil Diambil');
            else
                return ResponseFormatter::error(null, 'Data Tidak Ada', 404);
        }


        $job = Job::with('Location', 'JobCategory', 'Company');

        if($jobtitle)
            $job->where('jobtitle', 'like', '%'. $jobtitle . '%');

           // return ResponseFormatter::success($produk->paginate(), 'Data List Produk Berhasil Diambil');
        return $job->paginate($limit);
    }
}
