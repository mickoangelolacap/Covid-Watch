console.log('asd')
 const validation = function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
}
validation();

// const Toast = Swal.mixin({
//   toast : true,
//   position : 'top-end',
//   showConfirmButton : false,
//   timer : 3000
// })

// $error = $_SESSION['error'];

// if($errors > 0) {
//     Toast.fire({
//       type : 'error',
//       title : 'Something went wrong!'
//     })  
//   }
//   else {
//     Toast.fire({
//       type : 'success',
//       title : 'Registered successfully!'
//     })
//   }


// login validation
// const Toast = Swal.mixin({
//   toast : true,
//   position : 'top-end',
//   showConfirmButton : false,
//   timer : 3000
// })

// document.querySelector('#login').addEventListener('click', () => {
  
//   let username = document.querySelector('#username').value
//   let password = document.querySelector('#password').value
  
//   // username 
//   if(username != $username) {
//     document.querySelector('#userErr').innerHTML = '<small class="alert-success">Username Accepted</small>'
//   }
//   else {
//     document.querySelector('#userErr').innerHTML = '<small class="alert-danger">Username should be atleast 10 characters</small>'
//     error ++
//   }
  // // email
  // if(email.includes('@' && '.com')) {
  //   document.querySelector('#emailErr').innerHTML = '<small class="alert-success">Email Accepted</small>'
  // }
  // else {
  //   document.querySelector('#emailErr').innerHTML = '<small class="alert-danger">Email should have "@" and ".com"</small>'
  //   error ++
  // }
  // // password
  // if(password.length >= 8) {
  //   document.querySelector('#passErr').innerHTML = '<small class="alert-success">Password Accepted</small>'
  // }
  // else {
  //   document.querySelector('#passErr').innerHTML = '<small class="alert-danger">Password should be atleast 8 characters</small>'
  //   error ++
  // }
  // // pass2
  // if(pass2 === password) {
  //   document.querySelector('#pass2Err').innerHTML = '<small class="alert-success">Password Matched</small>'
  //   // document.querySelector('#pass2Err').style.backgroundColor = 'lightgreen'
  // }
  // else {
  //   document.querySelector('#pass2Err').innerHTML = '<small class="alert-danger">Password doesn\'t match</small>'
  //   // document.querySelector('#pass2Err').style.backgroundColor = '#F76C6C'
  //   error ++
  // }
  // error
  // if(error > 0) {
  //   Toast.fire({
  //     type : 'error',
  //     title : 'Please enter your name'
  //   })
  // }
  // else {
    // Toast.fire({
    //  type : 'success',
    //  title : 'Registered successfully'
    // }) 

  // }

// })