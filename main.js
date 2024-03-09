
function Admin() {
   
    window.open('admin.html', '_blank');
  }
  

  function user() {
   
    window.open('user.html', '_blank');
  }
  function login(){
    window.open('login.html','_blank')
  }
  function sign_up(){
    window.open('signup.html',"_blank")
  }
 
// Function to validate if user is an admin
function validateAdmin(event) {
    event.preventDefault(); // Prevent the form from submitting
    
    // Get the values of the username and password fields
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    // Check if the username and password are correct (replace 'admin' and 'adminpassword' with the actual admin credentials)
    if (username === 'admin' && password === 'adminpassword') {
      alert('Access granted! Welcome, Admin!');
      window.location.href='signup.html';
    } else {
      alert('Access denied! Incorrect username or password.');
      // Redirect the user to another page or perform any other action as needed
      window.location.href = 'index.html'; // Redirect to index.html for example
    }
  }
  
  // Add event listener to the form for submit event
  document.getElementById('adminForm').addEventListener('submit', validateAdmin);
  
 
  