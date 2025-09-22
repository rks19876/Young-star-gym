<?PHP
$con=mysqli_connect('localhost','root','','gymdata');
if(isset($_POST['sb'])){
$email=$_POST['email'];
$password=$_POST['pass'];
$confirmpass=$_POST['conf'];
$query="INSERT INTO data (EMAIL, PASSWORD, CONFIRM_PASSWORD) VALUES('$email','$password','$confirmpass')";
$execute=mysqli_query($con, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-pIVpL1hSgE+1O8GY9Q2MG/qhjvEYP7GnS6Kc5Uu2VvP6E7PPrkkF6bHBsQGIX8vLhXG3z2P1yt0C9O+N9cC1eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--swipper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--swipper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>

    .accordion {
      width: 300px;
      border-radius: 5px;
    }
    .accordion-header {
    
      padding: 10px;
      cursor: pointer;
      font-weight: bold;
    }
    .accordion-content {
      display: none; /* छिपा रहेगा */
      padding: 10px;
      
    }


    </style>
</head>

<body style="background-color: black; color:aliceblue">
    <navbar>
        <div class="main">
            <div id="logo">
                <h4><span style="color: orangered;">YOUNG</span> STAR</h4>
            </div>
            <div class="bar">
                <a href="#">HOME</a>
                <a href="about.php" >ABOUT</a>
                <a href="contact.php" target="_blank">CONTACT</a>
                <a href="service.php">SERVICES</a>
            </div>
            <div class="icon"><i class="fa-solid fa-circle-user" style="font-size:20px;"></i></div>

        </div>
        <div class="check" style="border: solid 2px white;">
            <h3 id="login" >LOGIN</h3><br>
            <form method="POST">
                EMAIL<br>
                <input type="email" class="inp" placeholder="ENTER EMAIL..." name="email"  style="color:black"><BR><BR>

                PASSWORD<BR>
                <input type="PASSWORD" class="inpu" placeholder="ENTER PASSWORD... " name="pass"  style="color:black"><BR><BR>
                CONFIRM PASSWORD<br>
                <input type="TEXT" class="input" placeholder="ENTER CONFIRM PASSWORD.." name="conf" style="color:black"><BR><BR>
                <input type="submit" class="sub" name="sb" onclick="show()">
            </form>



        </div>
        <!--DRAGG-->

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner" style="box-shadow:0 0;">
                <div class="carousel-item active">
                    <img src="images/IMG1.jpeg" class="d-block w-100" style="height:520px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/IMG12.jpeg" class="d-block w-100" style="height:520px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/IMG3.jpeg" class="d-block w-100" style="height:520px;" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--DRAGG-->
        <!--ABOUT-->

        <div class="younstar" style="margin-TOP:150PX;margin-left:50px">
            <div class="aboutyoungstar">
                <div class="abouty">
                    <h1 style="font-size: 60PX;">ABOUT <span style="color:white"><span
                                style="color:orangered;">YOUNG</span>STAR</h1>
                    <p style="margin-top:60px;">Building Strength and Discipline-Youngstar Gym is more than just a
                        workout space; it represents dedication, growth,<br> and the pursuit of a healthier lifestyle.
                        In today’s fast-paced world, fitness has become a necessity, and gyms like<br> Youngstar provide
                        the right environment to achieve personal goals. Whether someone is aiming to build<br> muscle,
                        lose weight, or improve stamina, proper guidance and consistent <br>training make all the
                        difference.</p>
                </div>
                <div class="infor" style="display: flex;gap:100px">
                    <div class="beni1">
                        <h1 style="font-size:150px;color:chartreuse">0</h1>
                        <p>Burn fat with workout</p>
                    </div>
                    <div class="beni2">
                        <h1 style="font-size:150px;color:chartreuse">0</h1>
                        <P>Your journey from zero to hero</P>
                    </div>
                    <div class="beni3">
                        <h1 style="font-size:150px;color:chartreuse">0+</h1>
                        <p>Fitness that fuels your confidence</p>
                    </div>





                </div>



            </div>
            <div class="both" style="display:flex;">
                <div class="number">
                    <h5>Call Today :</h5>
                    <h5 style="color:violet;">91+9354974789</h5>
                </div>
                <div class="email" style="margin-left:200px;">
                    <h5>Email</h5>
                    <h5 style="color:violet;">rupeshsharma@gmail.com</h5>
                </div>
            </div>
            <div class="insta" style="display:flex; gap:30px;margin-top:30px">

                <h1><!-- Replace username with the Instagram handle -->
<a href="https://www.instagram.com/y_s_i_gymnasium" target="_blank">
  <i class="fa-brands fa-instagram"></i>
</a>
  
</h1>
                <h1><i class="fa-brands fa-facebook"></i></h1>
                <h1><i class="fa-brands fa-x-twitter"></i></h1>
            </div>
            <div class="buy">
                <button
                    style="width:60%;HEIGHT:50PX;BACKGROUND-COLOR:orangered;border:solid 1px green; border-radius:18px;margin-top:50px;font-size:20px;color:white">BUY
                    KNOW</button>
            </div>
        </div>





        <!--ABOUT-->



    </navbar>


    <!--<img  id="img11"src="images/IMG2.jpeg" alt="...">-->


    <iframe width="90%" height="390" style="margin-left:5%; margin-top:150px"
        src="https://www.youtube.com/embed/ruX4Le0kBng" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>


    <div class="explor">

        <h2 style="color: white; text-align:center; margin-top:100px">Explore More >></h2>
        <div class="cul">
            <div class="cul1"
                style=" flex-wrap:wrap; width:300px ;border:solid 1px white;margin-left:100px;height:160px;text-align:center;  box-shadow: 0 0 10px white;">
                <h3>Cultpass</h3>
                <h1 style="color:purple;">ELITE</h1>
                <p>ultimated access to group classis,all gym and at-home workout</p>
            </div>
            <div class="cul2"
                style=" flex-wrap:wrap; width:300px;border:solid 1px white;margin-left:100px;height:160px;text-align:center;  box-shadow: 0 0 10px white;">
                <h3>Cultpass</h3>
                <h1 style="color:yellow;">PRO</h1>
                <p>ultimate access to all Pro gyms and at home workouts</p>
            </div>
            <div class="cul3"
                style=" flex-wrap:wrap; width:300px;border:solid 1px white;margin-left:100px;height:160px;text-align:center;  box-shadow: 0 0 10px white;">
                <h3>Cultpass</h3>
                <h1 style="color:purple;">SELECT</h1>
                <p>ultimated access to single center at home workouts</p>
            </div>
        </div>
        <div class="image">

            <img src="images/yuf6.jpeg" class="imge1" alt="..." width="400px" style="opacity:0;">

            <img src="images/yuf2.jpeg" class="imge2" alt="..." width="300px" style="opacity:0;">

            <img src="images/yuf3.jpeg" class="imge3" alt="..." width="400px" style="opacity:0;"><br>

            <img src="images/yuf1.jpeg" class="imge4" alt="..." width="300px" style="margin-left:200px; opacity:0;">

            <img src="images/yuf5.jpeg" class="imge5" alt="..." width="350px" style="margin-left:100px;opacity:0;">

        </div>





    </div>

    <div class="cards" style="display: flex;gap:40px">
        <div class="card1"><img src="images/exr1.webp" alt="">
            <H1 style=" display:flex; flex-wrap: wrap; color:chocolate">unlimited access to</H1>
            <ul>
                <li>Ai center group classes</li>
                <li>All Elite & pro gyms</li>
                <li>At-home live workout</li>

            </ul>
        </div>
        <div class="card2"><img src="images/exr2.webp" alt="">
            <H1 style=" display:flex; flex-wrap: wrap; color:powderblue;">unlimited access to</H1>
            <ul>
                <li>Ai center group classes</li>
                <li>All Elite & pro gyms</li>
                <li>At-home live workout</li>

            </ul>


        </div>
        <div class="card3"><img src="images/exr3.webp" alt="">
            <H1 style=" display:flex; flex-wrap: wrap; color:purple;">unlimited access to</H1>
            <ul>
                <li>Ai center group classes</li>
                <li>All Elite & pro gyms</li>
                <li>At-home live workout</li>

            </ul>

        </div>
        <div class="card4"><img src="images/exr4.webp" alt="">
            <H1 style=" display:flex; flex-wrap: wrap; color:rebeccapurple">unlimited access to</H1>
            <ul>
                <li>Ai center group classes</li>
                <li>All Elite & pro gyms</li>
                <li>At-home live workout</li>

            </ul>

        </div>
    </div>

    <div class="bmicalculator" style="display: flex; margin-top:200px">
        <div class="heading">CALCULATE BMI</div>
        <div class="programm">
            <h1 style="font-size:60px;">BMI</h1>
            <div class="height">
                <label class="heightinfo" style="font-size:40px;">HEIGHT (CM)</label><br><br>
                <input type="number" id="height" placeholder="enter your height in cm" style="width:350px;color:black">
            </div>

            <div class="weight">
                <label class="heightinfo" style="font-size:40px;">WEIGHT (KG)</label><br><br>
                <input type="number" id="weight" placeholder="enter your weight in kg" style="width:350px;color:black">
            </div><br>

            <div class="calculatebtn">
                <button id="calbmi" onclick="check()" style="font-size:20px; color:white;background-color:green;width:200px;border-radius:17px">CALCULATE BMI</button>
            </div>

            <div class="result">
                <p style="font-size:30px;">Your BMI is <span id="bmivalue"></span> and you are <span
                        id="valstatus"></span></p>
            </div>
        </div>
    </div>
    </div>



<!--select-->


<div class="accordion" style="background-color: black; width:500px;margin-left:50px; margin-top:150px;">
  <div class="accordion-item" style="background-color:black;border:none;">
    <div class="accordion-header" style="color: white; background-color:black;">1. What is the best time to go to the gym?</div>
    <div class="accordion-content" style="color: white;  background-color:black;" >
Morning workouts on an empty stomach with light cardio are considered best. But if you can only manage in the evening, that’s fine too. The most important thing is consistency.
    </div>
    <hr style="color:white;">
  </div>
  <div class="accordion-item" style="background-color: black; border:none;">
    <div class="accordion-header" style="color: white; background-color:black;">2. Should I go to the gym every day?
</div>
    <div class="accordion-content" style="color: white; background-color:black;">
      Yes, but not heavy workouts daily.

4–5 days strength training

Other days light exercise or cardio
This gives your muscles enough rest and recovery.
    </div>
     <hr style="color:white;">
  </div>
  <div class="accordion-item" style="background-color: black; border:none;">
    <div class="accordion-header" style="color: white; background-color:black;">3. Will gym help me lose weight quickly?</div>
    <div class="accordion-content" style="color: white; background-color:black;">
      Not just the gym — you need a balance of diet + workout + proper sleep. If you maintain a calorie deficit daily, fat loss will happen faster.
    </div>
     <hr style="color:white;">
<div class="accordion-item" style="background-color: black; border:none;">
    <div class="accordion-header" style="color: white; background-color:black;">4. Can women lift heavy weights?</div>
    <div class="accordion-content" style="color: white; background-color:black;">
Absolutely! Weight training helps women with fat loss, muscle toning, and body shaping. It’s a myth that women will look bulky like bodybuilders.
    </div>
<hr style="color:white;">
  </div>
</div>
</div>

<!--select-->

    
    
    
    
<!--map-->
<div className="map" style="margin-top:300px; text-align:center;">
    <address>
<h1 style="text-align: center;">Young star gym<br>Location</h1>

    </address>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28017.097025699113!2d77.2029847021196!3d28.625651971737803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03a209f6b71b%3A0x29a0eb0177cabc2f!2sBlue%20Tokai%20Coffee%20Roasters%20%7C%20Connaught%20Place%2C%20N%20Block!5e0!3m2!1sen!2sin!4v1753771493414!5m2!1sen!2sin" width="90%" height="450" allowFullScreen loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--map-->

    <footer>

<div class="footer" style="margin-top:250px;display:flex;gap:300px;margin-left:80px; ">
    <pre>
<h1 style="font-size:100px;"><span style="color: orangered;">YOUNG</span><br>  STAR</h1></pre>

<div class="navi" style="display: flex;gap:100px;margin-top:30px;">

<div class="nav1"><h1 style="font-size:20px; ">NAVIGATION</h1><BR>
 <a href="" style="color:white;text-decoration:none;">HOME</a><BR><BR>
<a href="" style="color:white;text-decoration:none;">ABOUT</a>



</div>
<div class="nav2"><h1 style="font-size:20px;">INFO</h1><BR>
 <a href="" style="color:white;text-decoration:none;">HOME</a><BR><BR>
<a href=""style="color:white;text-decoration:none;">ABOUT</a></div>
<div class="nav3" style="color:white;text-decoration:none;"><h1 style="font-size:20px;">SOCIAL</h1><BR>
 <a href=""  style="color:white;text-decoration:none;">HOME</a><BR><BR>
<a href=""   style="color:white;text-decoration:none;">ABOUT</a></div>

</div>

</div>





</footer>
<hr style="margin-top:120px; width:100%;">
<div class="last" style="width:100%;height:70px; display:flex;gap:62%">
<p style="margin-top:12px;margin-left:50px;font-size:14px; color:smokewhite;">© 2025 YOUNG STAR.All right reserved</p>
<p style="margin-top:12px; font-size:14px;">Design by Rupesh Sharma</p>
</div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
        integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"
        integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">


</script>

<script>
function show() {

    let email = document.getElementsByClassName("inp")[0];
    let password = document.getElementsByClassName("inpu")[0];
    let confirmPassword = document.getElementsByClassName("input")[0];


    if (
        email.value.trim() === "" &&
        password.value.trim() === "" &&
        confirmPassword.value.trim() === ""
    ) {
        alert("All fields are mandatory");

        return;
    }


    if (email.value.trim() === "") {
        alert("Email is required");

        email.focus();

        return;
    }

    if (password.value.trim() === "") {
        alert("Password is required");

        password.focus();

        return;
    }

    if (confirmPassword.value.trim() === "") {
        alert("Confirm Password is required");

        confirmPassword.focus();

        return;
    }

    if (password.value !== confirmPassword.value) {
        alert("Password and Confirm Password do not match");
        confirmPassword.focus();
        return;
    } else if (confirmPassword.value.trim() === "" || password.value.trim() === "" || email.value.trim() === "") {
        alert("all are mandatory")
    }
    alert("✅ Login successful!");
}




gsap.registerPlugin(ScrollTrigger);

gsap.to(".imge1", {
    opacity: 1,
    delay: 1,
    duration: 2,
    scrollTrigger: {
        trigger: ".imge1",
        start:" bottom top ",
        end: " bottom top ",
        scrub: true,
        stagger: 0.1,
    }
})
gsap.to(".imge2", {
    opacity: 1,
    delay: 1,
    duration: 2,
    scrollTrigger: {
        trigger: ".imge2",
        start: " bottom top ",
        end: " bottom top ",
        scrub: true,
        stagger: 0.1,
    }
})
gsap.to(".imge3", {
    opacity: 1,
    delay: 1,
    duration: 2,
    scrollTrigger: {
        trigger: ".imge3",
        start:" bottom top ",
        end: " bottom top ",
        scrub: true,
        stagger: 0.1,
    }
})
gsap.to(".imge4", {
    opacity: 1,
    delay: 1,
    duration: 2,
    scrollTrigger: {
        trigger: ".imge4",
        start: " bottom top ",
        end: " bottom top ",
        scrub: true,
        stagger: 0.1,
    }
})
gsap.to(".imge5", {
    opacity: 1,
    delay: 1,
    duration: 2,
    scrollTrigger: {
        trigger: ".imge5",
        start: " bottom top ",
        end: " bottom top ",
        scrub: true,
        stagger: 0.1,
    }
});

const height = document.querySelector("#height");
const weight = document.querySelector("#weight");
const bmivalue = document.querySelector("#bmivalue");
const valstatus = document.querySelector("#valstatus");

function check() {
    if (height.value === "" || weight.value === "") {
        alert("⚠️ All fields are mandatory");
    } else {
        // ✅ parseFloat use karo
        let h = parseFloat(height.value);
        let w = parseFloat(weight.value);

        let h_m = h / 100;
        let bmi = w / (h_m * h_m);

        // ✅ show BMI in span
        bmivalue.innerText = bmi.toFixed(2);

        // ✅ check category
        if (bmi < 18.5) {
            valstatus.innerText = " Underweight";
            valstatus.style.color = "blue";
        } else if (bmi >= 18.5 && bmi < 24.9) {
            valstatus.innerText = " Normal";
            valstatus.style.color = "green";
        } else if (bmi >= 25 && bmi < 29.9) {
            valstatus.innerText = " Overweight";
            valstatus.style.color = "orange";
        } else {
            valstatus.innerText = " Obese";
            valstatus.style.color = "red";
        }
    }
}



//selector

  // Step 2: JS Logic
  const headers = document.querySelectorAll(".accordion-header");

  headers.forEach(header => {
    header.addEventListener("click", () => {
      const content = header.nextElementSibling;

      // पहले सभी बंद कर दो
      document.querySelectorAll(".accordion-content").forEach(c => {
        if (c !== content) c.style.display = "none";
      });

      // अब क्लिक वाले को टॉगल करो
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  });




//selector



</script>

</html>