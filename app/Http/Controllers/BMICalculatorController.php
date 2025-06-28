<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMICalculatorController extends Controller
{
  public function index()
    {
        return view('frontend.result'); // Show form
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
            'age' => 'required|numeric|min:1',
            'gender' => 'required|in:male,female',
        ]);

        $weight = $request->input('weight');
        $heightCm = $request->input('height');
        $heightM = $heightCm / 100;
        $age = $request->input('age');
        $gender = $request->input('gender');

        $bmi = $weight / ($heightM * $heightM);

        if ($bmi < 18.5) {
            $category = 'Underweight';
        } elseif ($bmi < 24.9) {
            $category = 'Normal weight';
        } elseif ($bmi < 29.9) {
            $category = 'Overweight';
        } else {
            $category = 'Obese';
        }

        return view('frontend.result', compact('bmi', 'category', 'age', 'gender'));
    }
}
