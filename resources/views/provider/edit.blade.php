<html>
    <head>

<style>

body{
    background:#748B82  ;
}
    
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: absolute;
  height: 370px;
  width: 500px;
  bottom: 0px;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 15;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 10px;

  position: center;
  margin: 50px -300px 50px 50px;
  
  
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: auto;
  
  border: none;
  cursor: pointer;
  width: 100%;
  width: 100px;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
</head>

<body>

    <form action="/action" method="post" class="form-container">
    @csrf
<!-- 
    <b>Project Name</b><br>
    <input type="text" value=""  name="pname" readonly><br> -->

    <label for="psw"><b>Place</b></label>
    <input type="text" placeholder="Enter place" name="place" value=""required>

    <label for="psw"><b>Detail</b></label>
    <input type="text" placeholder="Enter detail" name="detail" value=""required>

    <br><br><button type="submit" name="project_id" value="">UPDATE</button>

    
  </form>
</div>
</div>

</body>
</html>