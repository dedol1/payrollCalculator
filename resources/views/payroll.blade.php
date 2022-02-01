@extends('layouts.Head')

@section('content')

<div class="container">
<div class="expand-div">
                  <div class="expand-div-inner1">
                    <h6>Monthly Pay</h6>
                    <div>
                      <!-- <div class="expand-div monthly-pay">
                        <span class="mp-span">160.00</span>
                        <input class="mp-span" type="text" name="" id="" placeholder="160.00">
                        <div class="mp-span1"><span class="badge badge-light badge-pill">hours</span></div>
                      </div>
                      <div class="expand-div monthly-pay m-l">
                        <span class="mp-span">1,460.00</span>
                        <input class="mp-span" type="text" placeholder="1,460.00">
                        <div class="mp-span1"><span class="badge badge-light badge-pill ">GHS</span></div>
                      </div>
                      <div class="mp-span">
                       <i class="fa fa-trash" aria-hidden="true"></i>
                      </div> -->
                      <form action="{{route('store')}}" method="post">
                        @csrf
                        
                        <table class="table inb-r table-sm">
                          <thead>
                            <th class="table_head text-muted">Allowances</th>
                            <th class="table_head text-muted">Bonuses</th>
                            <th class="table_head text-muted">Basic Pay</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input class="pay-input" type="text" name="allowance"  placeholder="160.00"></td>
                              <td><input class="pay-input" type="text" name="bonuses"  placeholder="60.00"></td>
                              <td><input class="pay-input" type="text" name="basicPay"  placeholder="60000.00" ></td>
                            </tr>
                          </tbody>
                        </table>
                        <div style="display:flex; justify-content:end; align-items:center;">

                          <input type="submit" value="submit">
                        </div>
                      </form>
                    </div>
                    <!-- @foreach($payrollObjs as $payrollObj) -->
                    <div class="">
                     <div class="add-salary expand-div"> 
                       <h6>Allowances</h6>
                       <a class="move-a-right1" href="" data-toggle="modal" data-target="#exampleModal1">Add salary type</a>
                      </div>
                     <table class="table inb-r" id="test-table1">
                        <tbody id="test-body1">
                          <!-- don't use this tr, it's just to start the index counter -->
                          <tr id="row10" class="d-n">
                            <td class="table_head text-muted">Transport</td>
                            <td class="table_head ra"><span>GHS</span><span><input class="pay-input1" type="text"></span></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table inb-r table-sm">
                        <tbody>
                          <tr>
                            <td class="table_head text-muted">SSNIT TIER 1</td>
                            <td class="table_head ra"><span>GHS </span>{{$payrollObj -> tier1}}<span></span></td>
                          </tr>
                          <tr>
                            <td class="text-muted">SSNIT TIER 2</td>
                            <td class="ra"><span>GHS </span> <span>{{$payrollObj -> tier2}}</span></td>
                          </tr>
                          <!-- <tr>
                            <td class="text-muted">SSNIT TIER 3</td>
                            <td class="ra"><span>GHS</span> <span>1,450.00</span></td>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                    <div class="">
                      <h6>Employee Contributions</h6>
                      <table class="table inb-r table-sm">
                        <tbody>
                          <tr>
                            <td class="table_head text-muted">SSNIT(5.5%)</td>
                            <td class="table_head ra"><span>GHS</span> <span>{{$payrollObj ->ssnit ?? 'not available'}}</span></span></td>
                          </tr>
                          <tr>
                            <td class="text-muted">PF Employee Contribution</td>
                            <td class="ra"><span>GHS</span>  <span></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="">
                      <div class="expand-div">
                        <h6>Bonuses</h6>
                        <a class="move-a-right" href="" data-toggle="modal" data-target="#exampleModal">Add bonus</a>
                      </div>
                      <table class="table inb-r" id="test-table">
                        <tbody id="test-body">
                          <!-- don't use this tr, it's just to start the index counter -->
                          <tr id="row0" class="d-n">
                            <td class="table_head text-muted">Sales Bonus</td>
                            <td class="table_head ra"><span>GHS</span><span>160.00</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <div class="expand-div-inner2">
                    <table class="table-transparent w-100 table-sm">
                      <tbody>
                        <tr>
                          <td class="table_head text-muted">Basic Pay</td>
                          <td class="table_head ra"><span>GHS </span> <span>{{$payrollObj -> basicPay}}</span></td>
                        </tr>
                        <tr>
                          <td class="table_head text-muted">Taxable Allowance</td>
                          <td class="table_head ra"><span>GHS </span> <span>{{$payrollObj ->taxableAllowance}}</span></td>
                        </tr>
                        <tr>
                          <td class="table_head text-muted">Non Taxable Allowance</td>
                          <td class="table_head ra"><span>GHS</span> <span>{{$payrollObj ->nonTaxableAllowance}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Bonuses</td>
                          <td class="ra"><span>GHS</span> <span>{{$payrollObj ->totalBonus}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Total Employee Reliefs</td>
                          <td class="ra"><span>GHS </span> <span>{{$payrollObj ->ssnit ?? 'not available'}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Tax on Bonus</td>
                          <td class="ra"><span>GHS</span> <span>{{$payrollObj ->taxOnBonus ?? 'not available'}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Excess Bonus</td>
                          <td class="ra"><span>GHS</span> <span>{{$payrollObj ->excessBonus ?? 'not available'}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Tax on Overtime</td>
                          <td class="ra"><span>GHS</span> <span>1,450.00</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Taxable Income</td>
                          <td class="ra"><span>GHS </span> <span>{{$payrollObj ->taxableIncome}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Income Tax (PAYE)</td>
                          <td class="ra"><span>GHS</span> <span>{{$payrollObj ->PAYE}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Total Tax</td>
                          <td class="ra"><span>GHS </span> <span>{{$payrollObj ->totalTax}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Net Pay</td>
                          <td class="ra"><span>GHS</span> <span>{{$payrollObj ->netSalary}}</span></td>
                        </tr>
                        <tr>
                          <td class="text-muted">SSNIT Employer Cost</td>
                          <td class="ra"><span>GHS </span> <span>{{$payrollObj ->employerCost ?? 'not available'}}</span></td>
                        </tr>
                      </tbody>

                    </table>
                    <div class="check-box-table">
                      <table class="table-transparent w-100 table-sm">
                      <tbody>
                        <tr>
                          <td  class="table_head">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input w-50" id="customCheck11">
                            <label class="custom-control-label f-13" for="customCheck11">Exclude SSNIT (5.5%)</label>
                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td  class="table_head">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                            <label class="custom-control-label f-13" for="customCheck12">Exclude Employer Cost (13.5%)</label>
                        </div>
                      </td>
                        </tr>
                        <tr>
                         <td  class="table_head">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck13" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                            <label class="custom-control-label f-13" for="customCheck13">Include Tier 3 Contribution Calculations</label>
                        </div>
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                          <div class="form-group row">
                            <label for="employee%" class="col-sm-8 col-form-label">Employee Percentage(%)</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="employee%" placeholder="0.00">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employer%" class="col-sm-8 col-form-label">Employer Percentage(%)</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="employer%" placeholder="0.00">
                            </div>
                          </div>
                        </div>
                         </td>
                        </tr>
                        <tr>
                         <td  class="table_head">
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck14" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <label class="custom-control-label f-13" for="customCheck14">Apply Overtime (Junior Staff)</label>
                        </div>
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                          <div class="form-group row">
                            <label for="employeeO" class="col-sm-7 col-form-label">Total Overtime</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="employeeO" placeholder="0.00">
                            </div>
                          </div>
                        </div>
                         </td>
                        </tr>
                      </tbody>
                    </table>

                    </div>
                  <!-- @endforeach -->
                  </div>
               </div>
</div>
@endsection
 <!-- @extends('layouts.end') -->