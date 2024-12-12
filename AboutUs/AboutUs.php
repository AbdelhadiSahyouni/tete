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
    <title>YAD - About Us</title>
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

        <div class="conter first">
            <div class="background-img-1"></div>
            <div class="title"><h1>About « YAD »</h1></div>
        </div>



        <!-- Second Section -->

        <div class="conter second">
            <div class="background-img-2"></div>
            <div class="part-1">
                <div class="text-part">
                    <h2>Creating Opportunities and Delivering Hope</h2>
                    <p>YAD is an international non-governmental organization with a mission to "maximize the potential of Syrian youth through education." Founded in 2011 by Syrian expatriates from the private sector, YAD is a unique model of humanitarian intervention known for its innovative approach, dynamic and continuously improving programs, fast-paced implementation, and strong global partnerships.</p>
                    <P><br>We believe in the power of simple impact and see ourselves as accountable, smart, and responsive to the realities of Syrian children and youth both on the ground and in the diaspora. We are also non-political, non-religious, and globally registered in the United States, Canada, the United Kingdom, Jordan, and Lebanon.</p>                    </P>
                </div>
                <div id="img-boy"><img src="boy.png" alt="boy"></div>
            </div>
        </div>


        <!-- Third Section -->

        <div class="counter third">

           <span>We come together from all over the world</span>
           <h2>Get to know us</h2>

            <div class="about_team_list">

                <!-- 1 -->

                <div class="box-info">
                    <a href="info-Abdelhadi-Sahyouni.php"><img src="team1.jpg" alt="Abdelhadi Sahyouni"></a>
                        <div class="text-info">
                            <h3 class="heading-style-h3">Abdelhadi Sahyouni</h3>
                            <p>Volunteers Coordinator</p>
                            <a href="info-Abdelhadi-Sahyouni.php" class="more-info">Info ></a>
                        </div>
                </div>

                <!-- 2 -->

                <div class="box-info">
                    <a href="info-Sara-Jadid.php"><img src="team2.png" alt="Sara Jadid"></a>
                        <div class="text-info">
                            <h3 class="heading-style-h3">Sara Jadid</h3>
                            <p>Executive Director</p>
                            <a href="info-Sara-Jadid.php" class="more-info">Info ></a>
                        </div>
                </div>

                <!-- 3 -->

                <div class="box-info">
                    <a href="info-Ahmad-Khaled.php"><img src="team3.png" alt="Ahmad Khaled"></a>
                        <div class="text-info">
                            <h3 class="heading-style-h3">Ahmad Khaled</h3>
                            <p>Content writer</p>
                            <a href="info-Ahmad-Khaled.php" class="more-info">Info ></a>
                        </div>
                </div>

                <!-- 4 -->

                <div class="box-info">
                    <a href="info-Mira-Hazem.php"><img src="team4.png" alt="Mira Hazem"></a>
                        <div class="text-info">
                            <h3 class="heading-style-h3">Mira Hazem</h3>
                            <p>CEO</p>
                            <a href="info-Mira-Hazem.php" class="more-info">Info ></a>
                        </div>
                </div>
                
                <!-- 5 -->

                <div class="box-info">
                    <a href="info-Sarah-Almasri.php"><img src="team5.png" alt="Sarah Almasri"></a>
                        <div class="text-info">
                            <h3 class="heading-style-h3">Sarah Almasri</h3>
                            <p>Advisor</p>
                            <a href="info-Sarah-Almasri.php" class="more-info">Info ></a>
                        </div>
                </div>
                
            </div>
            <button id="load-more" class="load-more-button">Load More</button>

        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const cards = document.querySelectorAll(".box-info");
                const loadMoreButton = document.getElementById("load-more");
                let cardsPerLoad = 4;
                let currentIndex = 0;
        
                function showCards() {
                    for (let i = currentIndex; i < currentIndex + cardsPerLoad && i < cards.length; i++) {
                        cards[i].style.display = "flex";
                    }
                    currentIndex += cardsPerLoad;
        
                    if (currentIndex >= cards.length) {
                        loadMoreButton.style.display = "none";
                    }
                }
        
                cards.forEach(card => card.style.display = "none");
        
                showCards();
        
                loadMoreButton.addEventListener("click", showCards);
            });
        </script>
        


        <!-- This is Footer -->
        <?php include('../Footer/footer.php'); ?>

    </main>
</body>

</html>