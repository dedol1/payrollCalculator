<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->float('allowance');
            $table->float('bonuses');
            $table->float('basicPay');
            $table->float('ssnit');
            $table->float('employerCost');
            $table->float('taxableIncome');
            $table->float('taxableAllowance');
            $table->float('totalBonus');
            $table->float('nonTaxableAllowance');
            $table->float('PAYE');
            $table->float('taxOnBonus');
            $table->float('excessBonus');
            $table->float('totalTax');
            $table->float('tier1');
            $table->float('tier2');
            $table->float('netSalary');
            $table->float('extrabonus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payrolls');
    }
}
