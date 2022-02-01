<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;

class payrolCalculatorController extends Controller
{
    public function payroll(Payroll $payroll){
        // $payroll = Payroll::all();
         $payroll =Payroll::orderBy('id')->get();
         return $payroll->bonuses;
        $basicSalary = $payroll->basicPay;

        $tier1 = $basicSalary * 0.135;
        $tier2 = $basicSalary * 0.05;
        
        $totalBonus = $payroll->bonuses;
        $taxableAllowance = $payroll->allowance;
        $nonTaxableAllowance = 200.00;

        $ssnit = $basicSalary * 0.055;
        $employerCost = $basicSalary * 0.13;
        $taxableIncome = $basicSalary - $ssnit;
        $PAYE = 0;

        $taxOnBonus = 0;
        $employee15Percent = $basicSalary * 0.15;
        $excessBonus = 0;
        $totalTax = 0;
        $netSalary = 0;
        $extrabonus = 0;

        // adding taxable allowance to taxable income
        $taxableIncome += $taxableAllowance;
        
        // calculating for tax on bonus

        if($totalBonus <= $employee15Percent){
            $taxOnBonus = $totalBonus * 0.05;
            $extrabonus = $totalBonus;
           
        }

        elseif($totalBonus > $employee15Percent){
            $taxOnBonus = $employee15Percent * 0.05;
            $extrabonus = $employee15Percent ;
            $excessBonus = $totalBonus - $employee15Percent;
            $taxableIncome += $excessBonus;
        }

        // calculation for the PAYE
        if($taxableIncome < 366){
            $PAYE = 0.00;
        }
        
        elseif($taxableIncome > 366){
           if($taxableIncome < 476){
            $firstTaxable = $taxableIncome - 365;
            $taxableOf5Percent = $firstTaxable * 0.05;
            $PAYE = $taxableOf5Percent;
           }
           elseif($taxableIncome > 475 && $taxableIncome < 606){
            $firstTaxable = $taxableIncome - 365;
            $secondTaxable = $firstTaxable - 110;
            $taxableOf5Percent = 110 * 0.05;
            $taxableOf10Percent = $secondTaxable * 0.1;
            $PAYE = $taxableOf5Percent + $taxableOf10Percent;

           }
           elseif($taxableIncome > 605 && $taxableIncome < 3606){
            $firstTaxable = $taxableIncome - 365;
            $secondTaxable = $firstTaxable - 110 - 130;
            $taxableOf5Percent = 110 * 0.05;
            $taxableOf10Percent = 130 * 0.1;
            $taxableOf17Percent = $secondTaxable * 0.175;
            $PAYE = $taxableOf5Percent + $taxableOf10Percent + $taxableOf17Percent;
           }
           elseif($taxableIncome > 3605 && $taxableIncome < 20001){
            $firstTaxable = $taxableIncome - 365;
            $secondTaxable = $firstTaxable - 110 - 130 - 3000;
            $taxableOf5Percent = 110 * 0.05;
            $taxableOf10Percent = 130 * 0.1;
            $taxableOf175Percent = 3000 * 0.175;
            $taxableOf25Percent = $secondTaxable * 0.25;
            $PAYE = $taxableOf5Percent + $taxableOf10Percent + $taxableOf175Percent + $taxableOf25Percent;
           }
           elseif($taxableIncome > 20000){
            $firstTaxable = $taxableIncome - 365;
            $secondTaxable = $firstTaxable - 110 - 130 - 3000 - 16395;
            $taxableOf5Percent = 110 * 0.05;
            $taxableOf10Percent = 130 * 0.1;
            $taxableOf175Percent = 3000 * 0.175;
            $taxableOf25Percent = 16395 * 0.25;
            $taxableOf30Percent = $secondTaxable * 0.3;
            $PAYE = $taxableOf5Percent + $taxableOf10Percent + $taxableOf175Percent + $taxableOf25Percent + $taxableOf30Percent;
           }
        }

        // setting total tax

        $totalTax =  $taxOnBonus + $PAYE;

        // calculations for the netSalary
        $netSalary = ( $taxableIncome + $nonTaxableAllowance + $extrabonus ) - $totalTax;


        return view('payroll',compact(
            'basicSalary',
            'ssnit',
            'employerCost',
            'taxableIncome',
            'taxableAllowance',
            'totalBonus',
            'nonTaxableAllowance',
            'PAYE',
            'taxOnBonus',
            'excessBonus',
            'totalTax',
            'tier1',
            'tier2',
            'netSalary',
            'extrabonus'
    ));


    }

    public function store(Request $request)
    {
        // dd($request->all());
        Payroll::create($request->all());
        return redirect()->back();
    }

}
