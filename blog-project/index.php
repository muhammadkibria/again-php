<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>blog project</title>
  </head>
  <body>
    

  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/667417c7ec.js" crossorigin="anonymous"></script>

    <title>Website Under Construction HTML Page</title>
</head>

<body >

    <style>
                body {
            padding: 0;
            margin: 0;
            font-family: Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            height: 100vh;
        }
        
        .background {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url("https://vidyasheela.com/web-contents/website-components/Coming-Soon-Pages/website-under-construction-page-template-html/construction.jpg") #08093cb3;
            background-size: cover;
            background-repeat: no-repeat;
            background-blend-mode: darken;
            filter: blur(10px);
            z-index: -1;
        }
        
        .container {
            width: 600px;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .top p{
            font-size: 16px;
            width: 160px;
            text-align: center;
            }
        .top {
            display: flex;
            align-items: center;
            font-weight: 900;
            margin: 10px;
        }
        
        hr {
            width: 100px;
            color: white;
            border-radius: 5px;
            margin: 0 15px
        }
        
        h1 {
            font-size: 60px;
            text-align: center;
            font-weight: 500;
            letter-spacing: 2px;
        }
        h3{
            margin-bottom: 10px;
        }

        .social-icons {
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        a {
            color: white;
        }
        
        i {
            font-size: 35px;
            margin: 10px;
        }
        
        .progress-wrapper {
            width: 100%;
            background: #2f2b2bc7;
            display: flex;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        .progress {
            width: 0%;
            height: 10px;
            background: white;
            border-radius: 5px;
            display: flex;
            justify-content: flex-end;
            /* transition: all 0.003 ease-in; */
        }
        
        .progress span {
            color: white;
            position: relative;
            top: 13px;
            left: 25px;
            font-weight: 800;
        }
        @media screen and (max-width:640px) {
           
            .container{
                width: 90%;
            }

            h1 {
            font-size: 50px;
            }

            i {
            font-size: 25px;
            margin: 10px;
        }
        }
        @media screen and (max-width:400px) {
            h1 {
            font-size: 30px;
            }
        }
    </style>

    <div class="background"></div>
    <div class="container">
        <div class="top">
            <hr>
            <h4>Blog Project</h4>
            <hr>
        </div>
        <h1>UNDER CONSTRUCTION</h1>
        <h3>PROGRESS</h3>
        <div class="progress-wrapper">
            <div class="progress"><span>0%</span></div>
        </div>
        <div class="social-icons">
            <a href="#your-fb-page"><i class="fab fa-facebook"></i></a>
            <a href="#your-twitter-profile"><i class="fab fa-twitter"></i></a>
            <a href="#your-linkedin-page"><i class="fab fa-linkedin-in"></i></a>
            <a href="#your-instagram-page"><i class="fab fa-instagram"></i></a>
            <a href="#your-youtube-page"><i class="fab fa-youtube"></i></a>
            <a href="#rss"><i class="fas fa-rss"></i></a>

        </div>
    </div>

    <script>
                const progress = document.querySelector('.progress')
        const percentage = document.querySelector('.progress span')

        let per = 0;
        function progressLoad(){
            if(per>=80){
                progress.style.width = `80%`;
                percentage.innerHTML = "80%"

            }else{
                progress.style.width = `${per}%`;
                percentage.innerHTML = `${per}%`;

            }
            per++

        }

        setInterval(progressLoad,90)
    </script>
   
</body>

</html>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>