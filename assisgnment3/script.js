function totalMarks() {
    let cw = parseInt(document.getElementById("cw").value) || 0;
    let mid = parseInt(document.getElementById("mid").value) || 0;
    let finalExam = parseInt(document.getElementById("final").value) || 0;

    let total = cw + mid + finalExam;

    document.getElementById("total_output").value = total;
}

function averageMarks() {
    let cw = parseInt(document.getElementById("cw").value) || 0;
    let mid = parseInt(document.getElementById("mid").value) || 0;
    let finalExam = parseInt(document.getElementById("final").value) || 0;

    let avg = (cw + mid + finalExam) / 3;

    document.getElementById("avg_output").value = avg.toFixed(2);
}

function clearForm() {
    document.getElementById("marksForm").reset();
    document.getElementById("total_output").value = "";
    document.getElementById("avg_output").value = "";
    document.getElementById("delete_output").value = "CLEARED";
}

function retrieveData() {
    window.location.href = "retrieve.php";
}

