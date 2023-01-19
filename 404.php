<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Error</title>
    <style>

        .wrapper{
            position: relative; 
            height: 100vh;
        }
        
        .error_content{
            position: absolute; 
            top: 35%; 
            left:50%; 
            transform: translate(-50%,-50%); 
            z-index: 1000;
        }

        .error_font{
            font-size: 80px;
            font-weight: 700;
        }

        .font_600{
            font-weight: 600;
        }

        .error_img{
            width: 100vw;
            position: absolute; 
            bottom:0px;
        }

        .main_bg{
            background-color: #edfaf6;
        }

        .btn:focus,
        .btn:active{
            outline: none;
            box-shadow: none;
        }


        @media screen and (max-width: 768px) and (min-width: 375px){
            .error_content{
            top: 50%;  
            }

            .error_font{
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
    

    <div class="container-fluid main_bg">
        <div class="row">
            <div class="col-12 p-0">
                <div class="wrapper">
                    <div class="text-center error_content">
                        <h1 class="m-0 p-0 error_font text-nowrap">404 ERROR</h1>
                        <h4 class="mt-2 mb-4 text-nowrap">Something went WRONG!</h4>
                        <a href="https://www.tripodeal.com" class="btn btn-primary py-3 px-5 font_600">BACK TO HOMEPAGE</a>
                    </div>
                    <img src="./Error-v2.png" class="img-fluid error_img" alt="error 404">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>