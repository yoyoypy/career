<?php

namespace App\Http\Controllers;

use App\Answers;
use Illuminate\Http\Request;
use App\Job;
use App\Application;
use App\Http\Requests\JobApplicationRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThanksForApplication;
use App\Questions;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Application $application)
    {
        $items = Application::with('Job')->latest()->paginate();
        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $item = Job::where('slug', $slug)->with('Questions.value')->firstorfail();
        //dd($item);
        return view('frontend.apply')->with([
            'item' => $item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobApplicationRequest $request)
    {
        $data = $request->all();
        $usermail = $request->input('email');
        $filename = $request->file('cv')->getClientOriginalName();
        $cv = $request->file('cv')->storeAs(
            'assets/cv', $filename, 'public'
        );

        $applicant =
        Application::create([
            'jobvacancy_id'             => $request->input('jobvacancy_id'),
            'firstname'                 => $request->input('firstname'),
            'lastname'                  => $request->input('lastname'),
            'dob'                       => $request->input('dob'),
            'pob'                       => $request->input('pob'),
            'sex'                       => $request->input('sex'),
            'education'                 => $request->input('education'),
            'salary'                    => $request->input('salary'),
            'id_card_address'           => $request->input('id_card_address'),
            'present_address'           => $request->input('present_address'),
            'phone_number'              => $request->input('phone_number'),
            'email'                     => $request->input('email'),
            'id_card_number'            => $request->input('id_card_number'),
            'marital_status'            => $request->input('marital_status'),
            'cv'                        => $cv,
            'visitor'                   => $request->ip()
        ]);

        //custom field store method DO NOT DELETE
        if($request->input('answers')){
        $count = count($request->input('question_id'));
        for($i = 0 ;$i < $count ; $i++){
            $questions = $data['question_id'][$i];
            $answers = $data['answers'][$i];

            Answers::create([
                    'application_id'    => $applicant['id'],
                    'question_id'       => $questions,
                    'answer'            => $answers
                ]);
            }
        }
        //custom field store method DO NOT DELETE

        Mail::to($usermail)->send(new ThanksForApplication($data));
        return view('frontend.jobapplied');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Application::with('answers')->findOrFail($id);
        $answers = Answers::where('application_id', $id)->get();
        //dd($answers);
        return view('backend.pages.jobsapplication.show')->with([
            'item' => $item,
            'answers' => $answers
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewcv($id)
    {
        $item = Application::findOrFail($id);
        $headers = [
            'Content-Type' => 'application/pdf'
        ];
        return view('backend.pages.jobsapplication.showcv')->with(
            ['item'=>$item]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Application::findOrFail($id);

        return view('backend.pages.jobsapplication.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        //dd($request);
        $item = Application::findOrFail($id);
        $item->update($data);

        flash('Status Changed!')->success();
        return redirect()->route('applicant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function new()
    {
        $items = Application::where('status', 'new')->with('Job')->latest()->paginate();

        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items
        ]);
    }

    public function phone()
    {
        $items = Application::where('status', 'phone interview')->with('Job')->latest()->paginate();

        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items
        ]);
    }

    public function interview()
    {
        $items = Application::where('status', 'interview')->with('Job')->latest()->paginate();

        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items
        ]);
    }

    public function hired()
    {
        $items = Application::where('status', 'hired')->with('Job')->latest()->paginate();

        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items
        ]);
    }

    public function rejected()
    {
        $items = Application::where('status', 'rejected')->with('Job')->latest()->paginate();

        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items
        ]);
    }
}
