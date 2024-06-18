// Define global variables
let selectedSeats = [];
let totalAmount = 0;

// Function to handle seat selection
function selectSeat(seat) {
  if (seat.classList.contains("sold")) {
    return; // Seat is already sold
  }

  seat.classList.toggle("selected");

  // Update selectedSeats array
  const seatIndex = selectedSeats.indexOf(seat);
  if (seatIndex > -1) {
    selectedSeats.splice(seatIndex, 1); // Remove seat from selectedSeats
  } else {
    selectedSeats.push(seat); // Add seat to selectedSeats
  }

  // Update seat count and total amount
  const count = selectedSeats.length;
  const SeatPrice = 800;
  const totalPrice = count * (SeatPrice);

  document.getElementById("count").textContent = count;
  document.getElementById("total").textContent = totalPrice;
  document.getElementById("nofSeats").value = count;
  document.getElementById("amount").value = totalPrice;
}

// Attach event listeners to seats
const seats = document.getElementsByClassName("seat");
for (const seat of seats) {
  seat.addEventListener("click", function () {
    selectSeat(this);
  });
}

function goToNextPage() {
  if (selectedSeats.length === 0) {
    alert('Please select a seat.');
  } else {
    window.location.href = "Payment.html";
  }
}
