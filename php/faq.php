<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title>
    <link rel = "stylesheet" href = "../styles/faq.css">
    <style>
         
         body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          padding: 20px;
         }
      h1 {
          text-align: center;
          margin-bottom: 20px;
      }
      .faq-container {
          max-width: 800px;
          margin: auto;
          background: white;
          border-radius: 8px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          padding: 20px;
      }
      .faq-item {
          margin-bottom: 15px;
          border-bottom: 1px solid #ddd;
          padding: 10px 0;
      }
      .faq-question {
          font-weight: bold;
          cursor: pointer;
      }
      .faq-answer {
          display: none;
          padding-top: 10px;
          line-height: 1.6;
      }
      .center {
          text-align: center;
          margin-top: 50px;
      }
      .search-button {
          width: 100px;
          height: 40px;
          background-color:blue;
          color: white;
          padding: 10px 10px;
          border: none;
          cursor: pointer;
          font-size: 16px;
      }
      button:hover {
          background-color: darkgray;
      }
      .contact-button {
    
    width: 100px;
    height: 50px;
    background-color: #007BFF; 
    color: white;        
    border: none;           
    font-size: 16px;        
    cursor: pointer;         
    border-radius: 5px;       
}

.contact-button:hover {
    background-color: #0056b3; 
}
 </style>
    
</head>
<body>
    <ul> 
        <li><a href="#feedback">Feedback</a></li>
        <li><a href="#FAQ">FAQ</a></li>
        <li><a href="#contact Us">Contact Us</a></li>  
    </ul>
    <hr>
    <div class="search-container">
        <input type="text" class="search-input" placeholder="Search..." aria-label="Search">
        <button class="search-button">Search</button>
    </div>
    
</head>
<body>

<h1>Frequently Asked Questions.</h1>
<h3>General Information</h3>
<div class="faq-container">
    <div class="faq-item">
        <div class="faq-question">What is the purpose of this app store?</div>
        <div class="faq-answer">You can easily find the apps you want.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">How do I create an account?</div>
        <div class="faq-answer">Fill Out the Registration Form:

            Provide necessary information such as:
            Username or Email Address
            Password
            Confirm Password
            Optional: Additional information (e.g., name, phone number, etc.)
            Agree to Terms and Conditions:
            
            Check a box to agree to the website's terms of service and privacy policy.
            Submit the Form:
            
            Click on the "Create Account" or "Sign Up" button to submit your information.
            Email Verification (if applicable):
            
            Some websites send a verification email. Click on the link in the email to verify your account.
            Log In:
            
            After verification (if needed), you can log in using your new account credentials.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">How do I reset my password?</div>
        <div class="faq-answer">Visit the Login Page:

            Navigate to the login page of the website.
            Click on "Forgot Password?":
            
            Look for a link or button that says “Forgot Password?” and click on it.
            Enter Your Email Address:
            
            Provide the email address associated with your account.
            Receive a Reset Link:
            
            Check your email for a password reset link sent by the website.
            Click the Reset Link:
            
            Click on the link in the email, which will take you to a password reset page.
            Enter a New Password:
            
            Input your new password and confirm it.
            Submit the New Password:
            
            Submit the form to finalize the password change.
            Log In with New Password:
            
            Use your new password to log into your account..</div>
    </div>
</div>
<h3 >Purchasing & Payments</h3>
<div class="faq-container">
    <div class="faq-item">
        <div class="faq-question">What payment methods are accepted?</div>
        <div class="faq-answer">Credit cards , Debit cards & International Shopping cards are accepted.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Can I make a purchase without creating an account?</div>
        <div class="faq-answer">Yes, you can check out as a guest. However, creating an account provides additional benefits, such as order tracking and faster checkout in the future.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">What should I do if my payment is declined?</div>
        <div class="faq-answer">If your payment is declined, please check your card details and ensure that you have sufficient funds. If the issue persists, consider contacting your bank or payment provider for further assistance.</div>
    </div>
</div>
<h3 >Troubleshooting</h3>
<div class="faq-container">
    <div class="faq-item">
        <div class="faq-question">Why can't I log into my account?</div>
        <div class="faq-answer">If you're unable to log in, please check that you're entering the correct email address and password. If you’ve forgotten your password, use the “Forgot Password?” link to reset it.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Why am I not receiving confirmation emails?</div>
        <div class="faq-answer">Confirmation emails can sometimes be filtered into your spam or junk folder. Please check there. If you still can’t find the email, ensure that you provided the correct email address during your purchase.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">How can I update my account information?</div>
        <div class="faq-answer">To update your account information, log into your account and navigate to the "Account Settings" or "Profile" section. From there, you can edit your personal details.
        </div>
    </div>
</div>



<div class="center">
    <p>Can't find what you're looking for?</p>
    <a href="../contactus.php"><button class="contact-button">Contact Us</button></a>
    
</div>
<div class="center">
    <a href="faqtable.php"><button class="contact-button">Show FAQs</button></a>
    
</div>

<div class="container">
    <h2>Add a New FAQ</h2>
    <form id="faqForm" action="faqHanlder.php" method="POST">
        <div class="form-group">
            <label for="question-type">Question Type:</label>
            <select id="question-type" name="question_type">           
                <option value="General Information">General Information</option>
                <option value="Purchasing & Payments">Purchasing & Payments</option>
                <option value="Troubleshooting">Troubleshooting</option>
            </select>
            <br><br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="question">Question:</label>
            <textarea id="answer" name="question" required></textarea>
        </div>
        <button type="submit" name="submit">Add FAQ</button>
    </form>

    <h3>Manage FAQs</h3>
    <div id="faqList"></div>
</div>
<script>
    
document.querySelector('.search-button').addEventListener('click', function() {
    const query = document.querySelector('.search-input').value;
    alert('You searched for: ' + query);
});

let faqs = []; // Array to hold FAQs

function renderFAQs() {
    const faqList = document.getElementById('faqList');
    faqList.innerHTML = ''; // Clear current list

    faqs.forEach((faq, index) => {
        const faqItem = document.createElement('div');
        faqItem.className = 'faq-item';
        faqItem.innerHTML = `
            <div class="faq-question">${faq.question}</div>
            <div class="faq-answer">${faq.answer}</div>
            <div class="faq-options">
                <button onclick="editFAQ(${index})">Edit</button>
                <button onclick="deleteFAQ(${index})">Delete</button>
                <button onclick="confirmFAQ(${index})">${faq.confirmed ? 'Unconfirm' : 'Confirm'}</button>
            </div>
        `;
        faqList.appendChild(faqItem);
    });
}


function saveFAQ()
 {
    const question = document.getElementById('question').value;
    const answer = document.getElementById('answer').value;
    const questionType = document.getElementById('question-type').value;

    if (question && answer) {
        // Add new FAQ to the array with confirmed set to false
        faqs.push({ question: `${questionType}: ${question}`, answer, confirmed: false });

        // Clear the input fields
        document.getElementById('faqForm').reset();

        renderFAQs(); // Refresh the FAQ list
    }
}

function editFAQ(index) {
    const question = prompt("Edit Question:", faqs[index].question);
    const answer = prompt("Edit Answer:", faqs[index].answer);

    if (question && answer) {
        faqs[index] = { ...faqs[index], question, answer }; // Update the FAQ
        renderFAQs(); // Refresh the FAQ list
    }
}

function deleteFAQ(index) {
    if (confirm("Are you sure you want to delete this FAQ?")) {
        faqs.splice(index, 1);
        renderFAQs(); // Refresh the FAQ list
    }
}

function confirmFAQ(index) {
    faqs[index].confirmed = !faqs[index].confirmed; // Toggle confirmation
    renderFAQs(); // Refresh the FAQ list
}

// Event listener for the search button
document.querySelector('.search-button').addEventListener('click', function() {
    const query = document.querySelector('.search-input').value;
    alert('You searched for: ' + query);
});

// JavaScript for toggling FAQ answers
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});


</script>

    
</body>
</html>