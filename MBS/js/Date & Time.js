var selectedDate = "";

function date1() {
  selectedDate = "SAT 3rd";
  document.getElementById("optns").innerHTML = selectedDate;
  document.getElementById("optns").style.color = "#f0007c";
}

function date2() {
  selectedDate = "SUN 4th";
  document.getElementById("optns").innerHTML = selectedDate;
  document.getElementById("optns").style.color = "#f0007c";
}

function date3() {
  selectedDate = "MON 5th";
  document.getElementById("optns").innerHTML = selectedDate;
  document.getElementById("optns").style.color = "#f0007c";
}

function nxt() {
  if (selectedDate !== "") {
    // A date is selected, navigate to the next page
    window.location.href = "Seat & time.html";
  } else {
    // No date is selected, display an error or perform some other action
    alert("Please choose a date first");
  }
}