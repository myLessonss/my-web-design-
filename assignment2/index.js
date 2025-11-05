function total(){
    var courseWork=parseFloat(document.getElementById('course').value);
    var midTerm=parseFloat(document.getElementById('mid').value);
    var finalMark=parseFloat(document.getElementById('final').value);

    var ftotal=courseWork+midTerm+finalMark;
    document.getElementById('ftotal').value=ftotal;
    return ftotal;
}
function average(){
    var averagef=total()/3;
    document.getElementById('favrg').value=averagef;
    return averagef;
}
function grade(){
    if(total()>=70){
        document.getElementById('grade').value='A';
    }else if(total()<70 && total()>=60){
        document.getElementById('grade').value='B';
    }else if(total()<60 && total()>=50){
        document.getElementById('grade').value='C';
    }else{
        document.getElementById('grade').value='FAILED';
    }
}