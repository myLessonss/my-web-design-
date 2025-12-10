function netSalary(){
    let myGross=parseInt(document.getElementById('gross').value) ||0;
    let myAllowance=parseInt(document.getElementById('allowance').value)||0;
    let myFund=parseInt(document.getElementById('fund').value)||0;
    let myTax=parseInt(document.getElementById('tax').value)||0;
    let myInsurance=parseInt(document.getElementById('insurance').value)||0;  
    console.log(myAllowance);
    let netSalary=(myGross+myAllowance+myFund)-myTax-myInsurance;
    document.getElementById('textarea').value="Net salary= "+netSalary;
    return netSalary
}
function monthlySalary(){
    let monthlySalary=netSalary();
    document.getElementById('textarea').value="Monthly salary= "+monthlySalary;
    return monthlySalary;
}
function annualySalary(){
    let annualySalary=monthlySalary()*12;
    document.getElementById('textarea').value="Annual Salary= "+annualySalary;
}
function retrieveData() {
    window.location.href = "php.php";
}