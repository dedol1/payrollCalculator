<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = ['allowance',
            'bonuses',
            'basicPay',
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

    ];
}
