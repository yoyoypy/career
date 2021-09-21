<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValueRequest;
use App\Questions;
use App\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function index(Questions $question)
    {
        $values = Value::where('question_id', $question->id)->get();

        return view('backend.pages.jobs.value.index', compact('question'))->with([
            'values' => $values
        ]);
    }

    public function create(Questions $question)
    {
        return view('backend.pages.jobs.value.create', compact('question'));
    }

    public function store(ValueRequest $request, Questions $question)
    {
        $request->all();

        Value::create([
            'question_id' => $question->id,
            'value'       => $request->input('value')
        ]);

        return redirect()->route('question.value.index', $question->id);
    }

    public function destroy(Value $value)
    {
        $value->delete();

        return redirect()->route('question.value.index', $value->question_id);
    }
}
