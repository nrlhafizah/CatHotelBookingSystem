<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meowie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">    
	<link rel="stylesheet" href="login1/css/style.css">

    <style>

.button-40 {
  background-color: #111827;
  border: 1px solid transparent;
  border-radius: .75rem;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  flex: 0 0 auto;
  font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1.125rem;
  font-weight: 600;
  line-height: 1.5rem;
  padding: .75rem 1.2rem;
  text-align: center;
  text-decoration: none #6B7280 solid;
  text-decoration-thickness: auto;
  transition-duration: .2s;
  transition-property: background-color,border-color,color,fill,stroke;
  transition-timing-function: cubic-bezier(.4, 0, 0.2, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: auto;
}

.button-40:hover {
  background-color: #374151;
}

.button-40:focus {
  box-shadow: none;
  outline: 2px solid transparent;
  outline-offset: 2px;
}

@media (min-width: 768px) {
  .button-40 {
    padding: .75rem 1.5rem;
  }
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}


    </style>

</head>
<body>
  <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
  <button onclick="history.back()" class="button-40" role="button"><a href="{{url('/')}}"> Go Back</a></button><br><br><br>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
      @include('flash-message')
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="login1/images/30.jpg"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">REGISTRATION FORM</h3>
                <form class="signin-form" method="POST" action="/addProv">
  
  @csrf
             

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example9">Name</label>
                  <input type="text" name="name" id="form3Example9" class="form-control form-control-lg" required/>
                  <p style=color:red; >@error('phoneNumber') {{$message}} @enderror</p>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example9">Phone Number</label>
                  <input type="text" name="no" id="form3Example9" class="form-control form-control-lg" required/>
                  <p style=color:red; >@error('phoneNumber') {{$message}} @enderror</p>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">Email Address</label>             
                  <input type="text" name="email" id="form3Example90" class="form-control form-control-lg" required/>
                  <p style=color:red; >@error('email') {{$message}} @enderror</p>
                </div>
                

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example8">Hotel's Name</label>
                  <input type="text" name="hname" id="form3Example8" class="form-control form-control-lg" required/>
                  <p style=color:red; >@error('hotelName') {{$message}} @enderror</p>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example8">Address</label>
                  <input type="text" name="address" id="form3Example8" class="form-control form-control-lg" required/>
                  <p style=color:red; >@error('address') {{$message}} @enderror</p>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="form3Example1m">Postcode</label>
                      <input type="text" name="postcode" id="form3Example1m" class="form-control form-control-lg" required/>
                      <p style=color:red; >@error('postcode') {{$message}} @enderror</p>
                    </div>
                  </div>

                  &nbsp;&nbsp;&nbsp;&nbsp;

                <div class="row">
                  <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1m">State</label>
                    <select name="state" class="select">
                      <option value="Perak">Perak</option>
                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                      <option value="Selangor">Selangor</option>
                      <option value="Pahang">Pahang</option>
                      <option value="Kedah">Kedah</option>
                      <option value="Johor">Johor</option>
                      <option value="Terengganu">Terengganu</option>
                      <option value="Melaka">Melaka</option>
                      <option value="Kelantan">Kelantan</option>
                      <option value="Sabah">Sabah</option>
                      <option value="Perlis">Perlis</option>
                      <option value="Penang">Penang</option>
                      <option value="Sarawak">Sarawak</option>
                      <option value="Putrajaya">Putrajaya</option>
                    </select>
                    <p style=color:red; >@error('state') {{$message}} @enderror</p>
                  </div>

                </div><br>
</div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example99">SSM</label>
                  <input type="text" name="ssm" id="form3Example99" class="form-control form-control-lg"/>
                  @error('ssm') <p style=color:red; > {{$message}} </p> @enderror
                </div>

              

                <div class="form-group">
                <button class="form-control btn btn-primary rounded submit px-3">
                    Register
                </button>

</form>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<script src="login1/js/jquery.min.js"></script>
  <script src="login1/js/popper.js"></script>
  <script src="login1/js/bootstrap.min.js"></script>
  <script src="login1/js/main.js"></script>

</body>
</html>