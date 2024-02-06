function calculate() {
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
  document.getElementById("result").innerHTML = "Total Investment: " + totalInvestment.toFixed(2) + "<br>Total Return: " + totalReturn.toFixed(2) + "<br>Total Amount: " + totalAmount.toFixed(2);
}
