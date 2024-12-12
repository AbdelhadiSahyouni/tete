<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAD - Bridging the Opportunity Gap</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" href="yadlogo.png" type="image/x-icon">
</head>
<body>
    
    <!-- This is a White Logo NavBar -->
    <?php include('../NavBar-whiteLogo/Nav-WhiteLogo.php'); ?>
    

    <main>

        <!-- This is the first section -->

        <section class="countainer first">
                <div id="div1">
                    <img src="background.jpg" alt="Hero Image" class="hero-image">
                    <h1>Bridging the <br>Opportunity Gap</h1>
                    <p>Empowering Minds, Transforming Lives Through Education, Community Growth,<br> and Equal Opportunities for a Brighter Future.</p>
                    <a href="../AboutUs/AboutUs.php" class="button-about">About us</a>
                </div>
        </section>




        <!-- This is the second section -->
        
        <section class="countainer secound">
            <div id="div2">
                <div class="box">
                    <div class="inside-box">
                        <a href="../Blogs/blog4-open.php" class="title-blog"><h2>The Journey of Knowledge: Inside a Classroom</h2></a>
                        <a href="../Blogs/blog4-open.php" class="blog-pic"><img src="section2-pic1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="box">
                    <div class="inside-box">
                        <a href="../Blogs/blog5-open.php" class="title-blog"><h2>The Journey of Knowledge: Inside a Classroom</h2></a>
                        <a href="../Blogs/blog5-open.php" class="blog-pic"><img src="section2-pic2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>





        <!-- This is the third section -->

            <section class="countainer third">
                <div id="div3">
                    <span>About «YAD» Initiative</span>
                    <h2>Bridging Opportunity Gaps</h2>
                    <span>Since 2022</span>
                        <div id="info-div">
                            <p>«YAD» is a non-governmental initiative dedicated to <span id="bolde">«seeking opportunities that empower individuals to build a better future»</span>. As a key player in identifying educational programs and assisting students with university scholarship applications, «YAD» is renowned for its innovative approach to tackling challenges and supporting youth affected by conflict.</p>
                            <p>Amid Lebanon's economic collapse since 2019, which has deprived many children and young people of their right to education, the support that «YAD» can provide and advocate for has become not only important but essential for the lives of thousands of young individuals.</p>
                            <a href="../AboutUs/AboutUs.php">About «YAD»</a>
                        </div>
                </div>
            </section>


        

        <!-- This is the fourth section -->
        
        <section class="countainer fourth">

            <div id="div4">

                <div id="big-title"><h1>Our Local Impact</h1></div>

                <div id="div-info">

                    <!-- first box -->
                    <div class="box-information">
                        <h1 class="numbers">52</h1>
                        <h3 class="numbers-title">Volunteers</h3>
                    </div>

                    <!-- second box -->
                    <div class="box-information">
                        <h1 class="numbers">332</h1>
                        <h3 class="numbers-title">Students helped <br> with scholarships</h3>
                    </div>

                    <!-- third box -->
                    <div class="box-information">
                        <h1 class="numbers">1340</h1>
                        <h3 class="numbers-title">Youth secured <br> future opportunities</h3>
                    </div>
                    
                </div>

            </div>

        </section>


        <!-- This is the fifth section -->

        <section class="countainer fifth">
            
            <div id="main-div">

                    <div class="newsletter-header">
                        <img src="Newspaper.gif" alt="news-icon" class="newsletter-icon">
                        <h2>Do you want to hear our news?</h2>
                        <p>Subscribe to our newsletter</p>
                    </div>
        
        
                        <form class="newsletter-form" action="#" method="post">
                            <div class="form-row">
                                <input type="text" name="first_name" placeholder="First Name" class="input-field">
                                <input type="text" name="last_name" placeholder="Last Name" class="input-field">
                            </div>
                            <input type="email" name="email" placeholder="Enter your email" class="input-field width" >
                            <div class="center-button"><button type="submit" class="submit-button">Subscribe</button></div>
                        </form>
            
                    <div class="terms-text"><p>By clicking Subscribe, you agree to the Terms of Use</p></div>
            
            </div>

        </section>

                <!-- This is Footer -->
                <?php include('../Home/HomeFooter/homefooter.php'); ?>

    </main>
</body>

</html>