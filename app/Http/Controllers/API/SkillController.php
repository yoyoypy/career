<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skill;
use App\Http\Requests\API\SkillRequest;

class SkillController extends Controller
{
    public function addskill(SkillRequest $request){
    $data = $request->all();
        $skill = Skill::create([
            'skill' => $data['skill']
            ]);

       return ResponseFormatter::success();
    }
}
