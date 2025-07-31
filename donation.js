// donation.js
// Attach click event listener to the button with id 'btn100'
document.getElementById('donationAmountBtn100').addEventListener('click', () => {
  setAmount(100);  // When clicked, call setAmount with 100
});

// Attach click event listener to the button with id 'btn250'
document.getElementById('donationAmountBtn250').addEventListener('click', () => {
  setAmount(250);  // When clicked, call setAmount with 250
});

// Attach click event listener to the button with id 'btn500'
document.getElementById('donationAmountBtn500').addEventListener('click', () => {
  setAmount(500);  // When clicked, call setAmount with 500
});

// Attach click event listener to the button with id 'btn1000'
document.getElementById('donationAmountBtn1000').addEventListener('click', () => {
  setAmount(1000);  // When clicked, call setAmount with 1000
});

/**
 * Sets the donation amount input field to the specified amount
 * @param {number} amount - The amount to set in the input
 */
function setAmount(amount) {
  // Find the donation amount input field by its ID
  const input = document.getElementById('donationAmount');
  
  // Set the input value to the amount with two decimal places (e.g. 100 → "100.00")
  input.value = amount.toFixed(2);
  
  // Put focus on the input field so the user can immediately see or edit the amount
  input.focus();
}