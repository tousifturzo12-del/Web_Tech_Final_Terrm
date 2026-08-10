// Get the form and result elements
const orderForm = document.getElementById("orderForm");
const result = document.getElementById("result");

// Run when Place Order is clicked
orderForm.addEventListener("submit", function (event) {

    // Prevent page reload
    event.preventDefault();

    // Clear previous errors
    clearErrors();

    // Get customer information
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const studentId = document.getElementById("studentId").value.trim();
    const department = document.getElementById("department").value;
    const quantity = parseInt(document.getElementById("quantity").value);

    // Get gender
    const genderElement = document.querySelector(
        'input[name="gender"]:checked'
    );

    const gender = genderElement ? genderElement.value : "";

    // Get selected food items
    const selectedFoods = document.querySelectorAll(
        'input[name="food"]:checked'
    );

    let valid = true;

    // Validate Name
    if (name === "") {
        document.getElementById("nameError").textContent =
            "Name cannot be empty.";
        valid = false;
    }

    // Validate Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        document.getElementById("emailError").textContent =
            "Email cannot be empty.";
        valid = false;
    }
    else if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent =
            "Please enter a valid email address.";
        valid = false;
    }

    // Validate Phone
    if (phone === "") {
        document.getElementById("phoneError").textContent =
            "Phone number cannot be empty.";
        valid = false;
    }

    // Validate Student ID
    if (studentId === "") {
        document.getElementById("studentIdError").textContent =
            "Student ID cannot be empty.";
        valid = false;
    }

    // Validate Gender
    if (gender === "") {
        document.getElementById("genderError").textContent =
            "Please select your gender.";
        valid = false;
    }

    // Validate Department
    if (department === "") {
        document.getElementById("departmentError").textContent =
            "Please select a department.";
        valid = false;
    }

    // Validate Food Selection
    if (selectedFoods.length === 0) {
        document.getElementById("foodError").textContent =
            "Please select at least one food item.";
        valid = false;
    }

    // Validate Quantity
    if (isNaN(quantity) || quantity <= 0) {
        document.getElementById("quantityError").textContent =
            "Quantity must be greater than 0.";
        valid = false;
    }

    // Stop if validation fails
    if (!valid) {
        result.style.display = "none";
        return;
    }

    // Calculate total price
    let total = 0;
    let foodListHTML = "";

    selectedFoods.forEach(function (food) {

        const foodName = food.value;
        const price = parseFloat(food.dataset.price);

        total += price;

        foodListHTML += `
            <li>${foodName} - $${price}</li>
        `;
    });

    // Multiply by quantity
    total = total * quantity;

    // Display result dynamically
    result.innerHTML = `
        <h2>Order placed successfully!</h2>

        <p><strong>Customer Name:</strong> ${name}</p>

        <p><strong>Student ID:</strong> ${studentId}</p>

        <p><strong>Department:</strong> ${department}</p>

        <p><strong>Selected Items:</strong></p>

        <ul>
            ${foodListHTML}
        </ul>

        <p><strong>Quantity:</strong> ${quantity}</p>

        <p class="total">
            Total Bill: $${total.toFixed(2)}
        </p>

        <p>
            Thank you, <strong>${name}</strong>!
            Your order has been placed successfully.
        </p>
    `;

    // Show result
    result.style.display = "block";

    // Scroll to result
    result.scrollIntoView({
        behavior: "smooth"
    });
});


// Function to clear all validation errors
function clearErrors() {

    const errors = document.querySelectorAll(".error");

    errors.forEach(function (error) {
        error.textContent = "";
    });
}