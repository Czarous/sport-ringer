<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/a20af99601.js" crossorigin="anonymous"></script>
    <title>SportRinger | Login</title>
</head>
<body class="bg-gray">
    <div class="container-sm d-flex flex-column flex-lg-row justify-content-evenly  mt-5 pt-5">
        <div class="text-center text-lg-start mt-5 pt-5">
            <h1 class="text-warning fw-bold fs-0">Sport Ringer</h1>
            <p class="w-75 mx-auto mx-lg-0 fs-4">
                Helps you utilize your time for your best game
            </p>
        </div>    
    <div class="center" style="max-width: 25rem; width: 100%">
        <div class="bg-white shadow rounded p-3 input-group-lg">
            <!-- <form action="../sports_scheduling/index.php" method="post"> -->
                <form action="login.php" method="post">
            <input type="email" class="form-control my-3" placeholder="Email address" name="email">
            <input type="password" class="form-control my-3" placeholder="Password" name="password">
            <?php
                if(isset($_GET['error'])){

            ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
            <?php
            }
            ?>
            <a href="sports_scheduling/index.php">
                <button class="btn btn-warning w-100 my-3">Log In</button>
            </a>
            <a href="#" class="text-warning text-decoration-none text-center">
                <p>Forget Password?</p>
            </a>
            </form>
            <hr>
            <div class="text-center my-4">
                <button class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#createmodel">Create New Account</button>
            </div>
            <!--Live Modal-->
            <!-- Modal -->
            <div class="modal fade" id="createmodel" tabindex="-1" aria-labelledby="createmodelLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!--head-->
                        <div class="modal-header">
                            <div>
                                <h2 class="modal-title" id="createModalLabel">
                                    Sign Up
                                </h2>
                                <p class="text-muted fs-7">It's important for for your play</p>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!--body-->
                    <div class="modal-body">
                        <form action="signup.php" method="post">
                     <!--Name-->
                     <div class="row">
                         <div class="col">
                             <input type="text" class="form-control" placeholder="First Name" name="firstname">
                         </div>
                         <div class="col">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                        </div>
                     </div>
                     <!-- UniqueID -->
                     <input type="text" class="form-control my-3" placeholder="IOE ID:SEC075BCT003" name="uniqueID">
                     <!-- Email&Password -->
                     <input type="email" class="form-control my-3" placeholder="Email" name="email">
                     <input type="password" class="form-control my-3" placeholder="Password" name="password">
                     <!-- dob 
                     <div class="row my-3">
                         <span class="text-muted">
                             Date of Birth <i 
                                                type="button" 
                                                class="fas fa-question-circle" 
                                                data-bs-container="body" 
                                                data-bs-toggle="popover" 
                                                data-bs-placement="right" 
                                                data-bs-content="Helps us keep distinct data">
                                            </i>
                        </span>
                        <div class="col">
                            <select class="form-select">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select">
                                <option value="1">Jan</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select">
                                <option value="1">2001</option>
                            </select>
                        </div>
                     </div>-->
                     <!-- gender -->
                     <div class="row my-3">
                        <span class="text-muted">
                            Gender <i 
                                       type="button" 
                                       class="fas fa-question-circle" 
                                       data-bs-container="body" 
                                       data-bs-toggle="popover" 
                                       data-bs-placement="right" 
                                       data-bs-content="Critical Infromation For Team Management">
                                   </i>
                       </span>
                       <div class="col">
                        <div class="border rounded p-2">
                            <label class="form-check-label" for="flexRadioDefault2" name="gender" >
                                Male
                              </label>
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Male" checked>
                          </div>
                       </div>
                       <div class="col">
                        <div class="border rounded p-2">
                            <label class="form-check-label" for="flexRadioDefault2" name="gender">
                                Female
                              </label>
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" checked>
                          </div>
                       </div>
                     </div>
                     <!-- btn -->
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Sign Up</button>
                    </div>  
                </form>
                    </div>
                </div>
            </div>
            <!--End-->
        </div>
        </div>

    </div>
    </div>
    <footer class="bg-light p-5 text-muted ">
        <div class="container-fluid">
           <div class="d-flex flex-wrap">
               <p class="mx-2 fs-7 mb-0">English</p>
               
           </div>
        <hr>
           <div class="d-flex flex-wrap">
            <p class="mx-2 fs-7 mb-0">Sign Up</p>
            <p class="mx-2 fs-7 mb-0">Login</p>
        </div> 
        <div class="mt-4 m-2">
            <p class="fs-7">Sport Ringer &copy; 2022</p>
        </div>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>