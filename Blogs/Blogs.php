<script>
    function showSidebar(){
const sidebar = document.querySelector('.sidebar');
sidebar.style.display = 'flex';
}

function hideSidebar(){
const sidebar = document.querySelector('.sidebar');
sidebar.style.display = 'none';
}
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAD - News</title>
    <link rel="icon" href="yadlogo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <!-- This is a Green Logo NavBar -->
    <?php include('../NavBar-GreenLogo/Nav-GreenLogo.php'); ?>


    <main>


        <!-- First Section -->

        <div class="conter first_blog">
            <div class="background-news"></div>
            <div class="title"><h1>News « YAD »</h1></div>
        </div>



        <!-- Second Section -->

        <div class="conter secound_blog">
            <div class="blogs-row">

                <div class="blog-box">
                    <a href="blog1-open.php"><img src="blog1.jpg" alt="first_blog"></a>
                    <div class="blog-info">
                        <span>October 3, 2024 • <span id="dot">Program Update</span></span>
                        <a href="blog1-open.php">The Joy of Learning Through Children’s Eyes</a>
                    </div>
                </div>

                <div class="blog-box">
                    <a href="blog2-open.php"><img src="blog2.jpg" alt="second_blog"></a>
                    <div class="blog-info">
                        <span>October 2, 2024 • <span id="dot">Program Update</span></span>
                        <a href="blog2-open.php">Empowering Change: A Voice of Hope</a>
                    </div>
                </div>

                <div class="blog-box">
                    <a href="blog3-open.php"><img src="blog3.png" alt="third_blog"></a>
                    <div class="blog-info">
                        <span>October 1, 2024 • <span id="dot">Program Update</span></span>
                        <a href="blog3-open.php">Teen Connections: The Strength of Friendship</a>
                    </div>
                </div>

                <div class="blog-box">
                    <a href="blog4-open.php"><img src="blog4.jpg" alt="forth_blog"></a>
                    <div class="blog-info">
                        <span>September 28, 2024 • <span id="dot">Program Update</span></span>
                        <a href="blog4-open.php">The Journey of Knowledge: Inside a Classroom</a>
                    </div>
                </div>

                <div class="blog-box">
                    <a href="blog5-open.php"><img src="blog5.jpg" alt="fifth_blog"></a>
                    <div class="blog-info">
                        <span>September 20, 2024 • <span id="dot">Program Update</span></span>
                        <a href="blog5-open.php">Building Bright Futures for Students Worldwide</a>
                    </div>
                </div>

            </div>
            <button id="load-more" class="load-more-button">Load More</button>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const blogBoxes = document.querySelectorAll(".blog-box"); // جميع المدونات
            const loadMoreButton = document.getElementById("load-more");
            let visibleBlogs = 3; // عدد المدونات المرئية افتراضيًا

                // إظهار أول 3 مدونات عند التحميل
                blogBoxes.forEach((blog, index) => {
                    if (index < visibleBlogs) {
                        blog.classList.add("visible");
                    }
                });

                // عند النقر على زر "Load More"
                loadMoreButton.addEventListener("click", function () {
                    visibleBlogs += 3; // زيادة عدد المدونات المرئية بمقدار 3
                    blogBoxes.forEach((blog, index) => {
                        if (index < visibleBlogs) {
                            blog.classList.add("visible");
                        }
                        });

                    // إخفاء الزر إذا تم عرض جميع المدونات
                    if (visibleBlogs >= blogBoxes.length) {
                        loadMoreButton.style.display = "none";
                    }
                });
            });
        </script>



        <!-- Third Section -->

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
        <?php include('../Footer/footer.php'); ?>

    </main>
</body>

</html>