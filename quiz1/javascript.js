function totalfu(){
    let mySalary = parseFloat(document.getElementById('monthSalary').value) || 0;
    let mytime   = parseInt(document.getElementById('time').value) || 0;

    let totalAmount = 0;
    let benefit = 0;
    let myYear = mytime * 12;

    if (mytime >= 10) {
        benefit = 0.2;
    } 
    else if (mytime >= 5 && mytime < 10) {
        benefit = 0.15;
    } 
    else {
        benefit = 0.1;
    }

    totalAmount = mySalary * benefit * myYear;
    document.getElementById('total').value = totalAmount.toFixed(2);

    let monthly = totalAmount / 12;
    document.getElementById('mounth').value = monthly.toFixed(2);

    console.log("Total Amount:", totalAmount);
    console.log("Monthly Benefit:", monthly);
    alert("JavaScript Connected");

}


