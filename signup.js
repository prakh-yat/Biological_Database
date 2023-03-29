function validateForm(){
    var fname = document.myForm.name;
    var uid = document.myForm.username;
    var email = document.myForm.mail;
    var phone = document.myForm.number;
    var pw1 = document.myForm.password;
    var pw2 = document.myForm.cpassword;
    var sex = document.myForm.gender;
    var regexuser1 = /^[A-Z]?[a-z]+$/
    var regexuser2 = /[a-z]+[0-9]+$/
    var regexuser3 = /^[A-Z]?[a-z]+[0-9]+$/
    var regexuser4 = /^[a-z]+$/
    var regexmail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/
    var regexph = /^[0-9]{10}+$/
    var regexname = /^[A-Z]{1}[a-z]+ [A-Z]{1}[a-z]+$/
    var regexname1 = /^[A-Z]{1}[a-z]+ [A-Z]{1}[a-z]+ [A-Z]{1}[a-z]+$/
    if(validateFullname(fname,regexname,regexname1)){
    if(validateUsername(uid,regexuser1,regexuser2,regexuser3,regexuser4)){
    if(validateEmail(email,regexmail)){
    if(validatePhone(phone,regexph)){
    if(validatePassword(pw1)){
    if(validateCpassword(pw1,pw2)){
    if(validateGender(sex)){
    }
    }
    }
    }
    }
    }
    }
    return false;
  }
  function validateFullname(fname,regexname,regexname1){
    if(fname.value.match(regexname) || fname.value.match(regexname1)){
      return true;
    }
    else if(fname.value.length == 0){
      alert("Full name cannot be empty!")
      fname.focus();
      return false;
    }
    else{
      alert("Invalid full name!!! Full name can contain only numbers and first alphabet of name should be upper-case!!")
      fname.focus();
      return false;
    }
  }
  function validateUsername(uid,regexuser1,regexuser2,regexuser3,regexuser4){
    if(uid.value.match(regexuser1) || uid.value.match(regexuser2) || uid.value.match(regexuser3) || uid.value.match(regexuser4)){
      return true;
    }
    else if(uid.value.length == 0){
      alert("Username cannot be empty!")
      uid.focus();
      return false;
    }
    else{
      alert("Invalid Username!")
      uid.focus();
      return false;
    }
  }
  function validateEmail(email,regexmail){
    if (email.value.match(regexmail))
    {
      return (true)
    }
    else if(email.value.length==0){
      alert("Email address cannot be empty!")
      email.focus();
      return (false)
    }
    else{
      alert("Enter a valid email address!")
      email.focus();
      return false;
    }
  }
  function validatePhone(phone,regexph){
    if(phone.value.match(regexph)){
      if(phone.value.length==10){
        return true;
      }
      else{
        alert("Enter a valid phone number!")
        phone.focus();
        return false;
      }
    }
    else if(phone.value.length==0){
      alert("Phone number cannot be empty!")
      phone.focus();
      return false;
    }
    else{
      alert("Enter a valid phone number!")
      phone.focus();
      return false;
    }
  }
  function validatePassword(pw1){
    if(pw1.value.length==0){
      alert("Password field cannot be empty!!")
      pw1.focus();
      return false;
    }
    if(pw1.value.length<8 || pw1.value.length>15){
      alert("Password should be of length more than 12")
      pw1.focus();
      return false;
    }
    else{
      return true;
    }
  }
  function validateCpassword(pw1,pw2){
    if(pw1.value!=pw2.value){
      alert("Password did not match!!")
      pw2.focus();
      return false;
    }
    else{
      return true;
  
    }
  }
  function validateGender(sex){
    for (var i=0; i<sex.length; i++) {
      if (sex[i].checked){
        alert("Form Submitted")
        window.location.reload()
        return true;
        break;
      }
      else{
        alert("Please select gender!!");
        return false;
        break;
      }
  
    }
  
  
  } 
