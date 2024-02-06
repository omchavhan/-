<?php include ('header.php'); ?>
    <section class="SIPMainSec mainSection">
        <!-- BANNER -->
        <div class="section banner-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="title-page">INVESTMENT CALCULATOR</div>
                        <div class="breadcrumb-container">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Index</a></li>
                                <li class="active">Investment Calculator</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="section section-border">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="row tabsection">
                            <div class="col-sm-12 col-md-12">
                                <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#tab_a" data-toggle="pill">SIP Calculator</a></li>
                                <li><a href="#tab_b" data-toggle="pill">Retirement Corpus</a></li>
                                <li><a href="#tab_c" data-toggle="pill">Car Purchase</a></li>
                                <li><a href="#tab_d" data-toggle="pill">House Purchase</a></li>
                                <li><a href="#tab_e" data-toggle="pill">Marriage Loan</a></li>
                                <li><a href="#tab_f" data-toggle="pill">SIP Top Up</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_a">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>SIP Calculator</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <img src="img/sipImg.webp" loading="lazy" alt="">
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="card">
                                                        <div class="panel-body">
                                                            <label class="radio-inline">
                                                                <input type="radio" checked name="checked" value="SIP"> 
                                                                <span>SIP</span>
                                                                
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="checked" value="LumpSum">
                                                                <span>LumpSum</span>
                                                                
                                                            </label>
                                                        </div>
                                                        <div class="input-container">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Total Investment</label>
                                                                        <input id="investment" class="form-control" type="text" 
                                                                        onchange="commas(this)" placeholder="500 ₹">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Expected return rate (p.a)</label>
                                                                        <input id="return-rate" class="form-control" type="text" onchange="percentage(this)" placeholder="10%">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Time period</label>
                                                                        <input id="years" type="number" class="form-control" placeholder="10 Years">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <button onclick="calculateResult()" class="btn btn-primary">Calculate</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row sipBottom">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Invested Amount</label>
                                                                            </div>
                                                                            <div class="col-sm-6 text-right">
                                                                                <span id="currency-change-1">₹</span>
                                                                                <span id="total"></span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Est. Returns</label>
                                                                            </div>
                                                                            <div class="col-sm-6 text-right">
                                                                                <span id="currency-change-3">₹</span>
                                                                                <span id="maturity-value"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Total Value</label>
                                                                            </div>
                                                                            <div class="col-sm-6 text-right">
                                                                                <span id="currency-change-2">₹</span>
                                                                                <span id="wealth-gained"></span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab_b">
                                        <div class="container p-0">
                                            <form action="" id="divUI">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3>Retirement Corpus</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <img src="img/sipImg2.webp" loading="lazy" alt="">
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="card">
                                                            <div class="input-container">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="">Initial Savings</label>
                                                                            <input id="inputSavingsInitial" value="0" class="form-control" type="number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="">Investment Period Before Retirement</label>
                                                                            <input id="inputReturnOnInvestmentPerPeriodBeforeRetirement" class="form-control" type="number" value=".1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="">New Savings Per Period</label>
                                                                            <input id="inputSavingsNewPerPeriod" type="number" class="form-control" value=".5">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="">Investment Period After Retirement</label>
                                                                            <input id="inputReturnOnInvestmentPerPeriodAfterRetirement" type="number" class="form-control" value=".5">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="">Retirement Income Desired per Period</label>
                                                                            <input id="inputRetirementIncomePerPeriod" type="number" class="form-control" value=".5">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <button onclick="buttonCalculate_Clicked();" class="btn btn-primary">Calculate</button>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="row sipBottom">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <label for="">Savings at Retirement</label>
                                                                                </div>
                                                                                <div class="col-sm-6 text-right">
                                                                                    <input id="inputSavingsAtRetirement" disabled="true" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <label for="">Periods Required</label>
                                                                                </div>
                                                                                <div class="col-sm-6 text-right">
                                                                                    <input id="inputPeriodsRequired" disabled="true" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_c">
                                        <div class="container p-0 pt-0">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h3>Car Purchase</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <img src="img/sipImg3.webp" loading="lazy" alt="">
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="card" id="loanCalc">
                                                        <div class="input-container">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Car Price</label>
                                                                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '₹1');" class="form-control" id="vehiclePrice" placeholder="Car Price">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Down Payment</label>
                                                                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '₹1');" class="form-control" id="downPayment" placeholder="Down Payment" value="0">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Trade In Value</label>
                                                                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '₹1');" class="form-control" id="tradeValue" placeholder="Trade In Value" value="0">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Interest Rate</label>
                                                                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '₹1');" class="form-control" id="intRate" placeholder="Interest Rate" value="3.25">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="">Loan Term</label>
                                                                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '₹1');" class="form-control" id="loanTerm" placeholder="Loan Term (ex: 36 Months)">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <button onclick="calculatePayments()" id="calculate" value="Calulate" class="btn btn-primary">Calculate</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row sipBottom">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div id="paymentResults"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_d">
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3>House Purchase</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <img src="img/sipImg4.webp" loading="lazy" alt="">
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card">
                                                    <div class="input-container">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Loan Amount</label>
                                                                    <input type="text" id="prncipleAmount" name="prncipleAmount" required class="form-control" placeholder="Enter Loan Amount"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Interest Rate</label>
                                                                    <input type="text" id="InterestRate" name="InterestRate" required class="form-control" placeholder="Enter Rate of Interest"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Loan Period (in month)</label>
                                                                    <input type="text" id="emiMonth" name="emiMonth" required class="form-control" placeholder="Enter Period in Month"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <button class="btn btn-primary" onclick="EmiCalculaor();">Calculate</button>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row sipBottom">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div id="result" style="font-weight:bold; font-size:18px"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab_e">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3>Marriage Loan</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <img src="img/sipImg5.webp" loading="lazy" alt="">
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card">
                                                    <form name="loandata">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Loan Amount</label>
                                                                    <input type="text" name="principal"
                                                                    onchange="calculate();" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Interest Rate %</label>
                                                                    <input type="text" name="interest"
                                                                    onchange="calculate();" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Tenure (in months)</label>
                                                                    <input type="text" name="years" onchange="calculate();" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row sipBottom">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <label for="" style="margin-top:6px">Loan EMI</label>
                                                                        </div>
                                                                        <div class="col-sm-6 text-right">
                                                                            <input readonly class="form-control" type="text" name="payment" style="font-weight:bold; font-size:18px">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                        
                                                        
                                                    
                                                </div>
                                                    
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_f">
                                    <div class="row">
                                            <div class="col-sm-12">
                                                <h3>SIP Step Up Calculator</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <img src="img/sipImg6.webp" loading="lazy" alt="">
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card">
                                                    <form name="loandata">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Monthly SIP Amount</label>
                                                                    <input type="number" id="monthly-sip" name="monthly-sip" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">SIP Duration (in months)</label>
                                                                    <input type="number" id="sip-duration" name="sip-duration" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Expected Rate of Return (% per annum)</label>
                                                                    <input type="number" id="expected-rate-of-return" name="expected-rate-of-return" min="0" max="100" step="0.01" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="">Step Up Monthly SIP? (% per annum)</label>
                                                                    <input type="number" id="step-up-percentage" name="step-up-percentage" min="0" max="100" step="0.01" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="button" value="Calculate" onclick="calculate2()" class="btn btn-primary">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row sipBottom">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div id="result1" style="display:none;">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label for="">
                                                                                    Total Investment
                                                                                </label>
                                                                                
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <div id="totalInv" class="text-right" style="font-weight:bold"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label for="">
                                                                                    Total Return
                                                                                </label>
                                                                                
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <div id="totalRet" class="text-right" style="font-weight:bold"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <label for="">
                                                                                    Total Amount
                                                                                </label>
                                                                                
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12">
                                                                                <div id="totalAmt" class="text-right" style="font-weight:bold"></div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                            
                                                                        
                                                                        
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                        
                                                        
                                                    
                                                </div>
                                                    
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div><!-- tab content -->
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        
        

        

    </section>

    

    <!-- SIP Step Up javascript -->


    
    
    <script>
        calculateResult=()=>{
            let amountValue = document.getElementById("investment").value;
            let amountWithComma = (amountValue.split(" ")[0]);
            let amount = parseInt(amountWithComma.split(',').join(''));
            let years = document.getElementById("years").value;
            let returnRateValue = document.getElementById("return-rate").value;
            let returnRateWithComma = (returnRateValue.split(" ")[0]);
            let returnRate = parseInt(returnRateWithComma.split(',').join(''));
            let checkedValue = document.getElementsByName('checked')[0].checked;
            let wealthGained = 0; total = 0;maturityValue = 0;
            
            if(checkedValue){
                wealthGained = Math.round((Math.pow((1 + (Math.pow((1 + returnRate / 100), (1 / 12)) - 1)), (years * 12)) - 1) / (Math.pow((1+ returnRate / 100), (1 / 12)) - 1) * amount);
                total = (amount*12)*years; 
            }else{
                total = amount;
                wealthGained = Math.round(Math.pow((1 + returnRate / 100), years) * amount);
            }

            maturityValue = wealthGained-total;
            total = total.toString();
            total = total.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            wealthGained = wealthGained.toString();
            wealthGained = wealthGained.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            maturityValue = maturityValue.toString();
            maturityValue = maturityValue.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("investment").value = ''
            document.getElementById("years").value = '';
            document.getElementById("return-rate").value = '';
            console.log(total,typeof total  )
            document.getElementById("total").innerHTML = total==="NaN"?"0":total;
            document.getElementById("wealth-gained").innerHTML = wealthGained==="NaN"?"0":wealthGained;
            document.getElementById("maturity-value").innerHTML = maturityValue==="NaN"?"0":maturityValue
        }

        currencyChange=()=>{
                let selectedValue = currency.value;
                document.getElementById("currency-change-1").innerHTML = selectedValue;
                document.getElementById("currency-change-2").innerHTML = selectedValue;
                document.getElementById("currency-change-3").innerHTML = selectedValue;

        }

        commas=(x)=> {
            let amount = document.getElementById("investment").value;
            let temp = amount.split(" ")
            if(temp.includes("₹")){
                amount = amount.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }else{
                amount = amount.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                document.getElementById("investment").value = amount.concat(' ').concat('₹')
            }
        }
        percentage=(x)=>{
            let value = document.getElementById("return-rate").value;
            let temp = value.split(" ");
            if(temp.length<2)
                document.getElementById("return-rate").value = value.concat(' ').concat('%')
        }
    </script>

    <!-- Retirement javascript -->

    <script>
       function buttonCalculate_Clicked()
       {
        var inputSavingsInitial
            = document.getElementById("inputSavingsInitial");
        var inputReturnOnInvestmentPerPeriodBeforeRetirement
            = document.getElementById("inputReturnOnInvestmentPerPeriodBeforeRetirement");
        var inputSavingsNewPerPeriod
            = document.getElementById("inputSavingsNewPerPeriod");
        var inputReturnOnInvestmentPerPeriodAfterRetirement
            = document.getElementById("inputReturnOnInvestmentPerPeriodAfterRetirement");
        var inputRetirementIncomePerPeriod
            = document.getElementById("inputRetirementIncomePerPeriod");
        var inputPeriodsRequired 
            = document.getElementById("inputPeriodsRequired");
    
        var savingsInitial = 
            parseFloat(inputSavingsInitial.value);
        var returnOnInvestmentPerPeriodBeforeRetirement = 
            parseFloat(inputReturnOnInvestmentPerPeriodBeforeRetirement.value);
        var savingsNewPerPeriod = 
            parseFloat(inputSavingsNewPerPeriod.value);
        var returnOnInvestmentPerPeriodAfterRetirement = 
            parseFloat(inputReturnOnInvestmentPerPeriodAfterRetirement.value);
        var retirementIncomePerPeriod = 
            parseFloat(inputRetirementIncomePerPeriod.value);
        
        var savingsAtRetirement = 
            retirementIncomePerPeriod 
            / returnOnInvestmentPerPeriodAfterRetirement;
        inputSavingsAtRetirement.value = savingsAtRetirement;
    
        var periodsRequired = Math.log
        (
            ( 
                savingsAtRetirement 
                * returnOnInvestmentPerPeriodBeforeRetirement
                + savingsNewPerPeriod 
            )
            / 
            (
                savingsNewPerPeriod
                + savingsInitial
                * returnOnInvestmentPerPeriodBeforeRetirement
            )       
        )
        / Math.log(1 + returnOnInvestmentPerPeriodBeforeRetirement);
    
        inputPeriodsRequired.value = periodsRequired;
    }
    </script>

    <!-- carloan javascript -->

    <script>
        function calculatePayments(){
            var vehiclePrice = document.getElementById('vehiclePrice').value,
                loanTerm = document.getElementById('loanTerm').value,
                intRate = document.getElementById('intRate').value,
                downPayment = document.getElementById('downPayment').value,
                tradeValue = document.getElementById('tradeValue').value,
                amount = parseInt(vehiclePrice),
                months = parseInt(loanTerm),
                down  = parseInt(downPayment),
                trade =  parseInt(tradeValue),
                totalDown  = down + trade
                annInterest = parseFloat(intRate),
                monInt = annInterest / 1200;

                if(!amount){
                    alert('Please add a loan amount');
                    return;
                }

                if(!months){
                    months = 60;
                    loanTerm = document.getElementById('loanTerm').value = '60';
                }

                if(!downPayment){
                    down = 0;
                    downPayment = document.getElementById('downPayment').value = '0';
                }

                if(!trade){
                    trade = 0;
                    tradeValue = document.getElementById('tradeValue').value = '0';
                }

                if(!annInterest){
                    annInterest = 3.25;
                    intRate = document.getElementById('intRate').value = '3.25';
                }
                
                var calc = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (totalDown || 0))).toFixed(2);

                var paymentResults = document.getElementById('paymentResults');
                paymentResults.style.display = 'block';
                paymentResults.innerHTML = '';
                var results = document.createElement('div');
                results.innerHTML ='<div class="col-md-6 col-sm-12"><label>Estimated Monthly Payment is</label></div> '+' <div class="col-md-6 col-sm-12 text-right" style="font-weight:bold">₹' + calc + ' </div>';

                paymentResults.append(results);
            }
    </script>

    <!-- homeloan javascript -->

    <script>
        function EmiCalculaor(){
            
            
        var month = $("#emiMonth").val();
        var rate = $("#InterestRate").val();
        var pamt = $("#prncipleAmount").val();
        
        var monthlyInterestRatio = (rate/100)/12;
        var monthlyInterest = (monthlyInterestRatio*pamt);
            var top = Math.pow((1+monthlyInterestRatio),month);
                var bottom = top -1;
                var sp = top / bottom;
                var emi = ((pamt * monthlyInterestRatio) * sp);
        var result = emi.toFixed(2);
        var totalAmount = emi*month;
        var yearlyInteret = totalAmount-pamt;
        var downPayment = pamt*(20/100);
            //alert(emi);
        $("#result").empty();
        $("#result").append("Your EMI = "+result);
            
        }
</script>

<!-- marrage javascript -->

<script>
    function calculate() {
        var principal = document.loandata.principal.value;
        var interest = document.loandata.interest.value / 100 / 12;
        var payments = document.loandata.years.value * 12;
        var x = Math.pow(1 + interest, payments);
        var monthly = (principal*x*interest)/(x-1);
        if (!isNaN(monthly) && 
            (monthly != Number.POSITIVE_INFINITY) &&
            (monthly != Number.NEGATIVE_INFINITY)) {

            document.loandata.payment.value = round(monthly);
            document.loandata.total.value = round(monthly * payments);
            document.loandata.totalinterest.value = 
                round((monthly * payments) - principal);
        }
        else {
            document.loandata.payment.value = '0';
            document.loandata.total.value = '0';
            document.loandata.totalinterest.value = '0';
        }
    }
    function round(x) {
    return Math.round(x*100)/100;
    }

</script>



<script>
    function calculate2() {

        // alert("ok");
    var monthlySIP = parseFloat(document.getElementById("monthly-sip").value);
    var sipDuration = parseInt(document.getElementById("sip-duration").value);
    var expectedRateOfReturn = parseFloat(document.getElementById("expected-rate-of-return").value);
    var stepUpPercentage = parseFloat(document.getElementById("step-up-percentage").value);
    var totalInvestment = monthlySIP * sipDuration;
    var totalReturn = 0;
    var currentSIP = monthlySIP;
    for (var i = 1; i <= sipDuration; i++) {
        totalReturn += currentSIP * 12 * (expectedRateOfReturn / 100);
        currentSIP += currentSIP * (stepUpPercentage / 1200);
    }
    var totalAmount = totalInvestment + totalReturn;
    document.getElementById("result1").style.display = "block";
    /*document.getElementById("result1").innerHTML = "Total Investment:" + totalInvestment.toFixed(2) + "<br>Total Return: " + totalReturn.toFixed(2) + "<br>Total Amount: " + totalAmount.toFixed(2);*/
    document.getElementById("totalInv").innerHTML =totalInvestment.toFixed(2);
    document.getElementById("totalRet").innerHTML =totalReturn.toFixed(2);
    document.getElementById("totalAmt").innerHTML =totalAmount.toFixed(2);
    
    
    }
</script>



    

    

<?php include ('footer.php'); ?>

