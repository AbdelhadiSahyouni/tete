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
    <title>Abdelhadi Sahyouni - Volunteers Coordinator</title>
    <link rel="icon" href="yadlogo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <!-- This is a Green Logo NavBar -->
    <?php include('../NavBar-GreenLogo/Nav-GreenLogo.php'); ?>

    
    <main>

        <!-- information Section -->

        <div class="conter_info">
            <drv class="row_info">
                <div class="team_pic"><img src="team1.jpg" alt="Abdelhadi Sahyouni"></div>
                
                <div class="team_info_col">
                    <a href="javascript:history.back()">Back ></a>
                    
                    <div class="name_position_col">
                        <h1>Abdelhadi Sahyouni</h1>
                        <h2>Volunteers Coordinator</h2>
                    </div>

                    <div class="paragraph"><p>Abdelhadi Sahyouni is a passionate and energetic Volunteers Coordinator, dedicated to building a strong network of engaged individuals. With his approachable personality and excellent organizational skills, he ensures that volunteers feel supported and motivated. Abdelhadi’s ability to foster collaboration among team members and create a positive environment makes him a key player in the team’s success. His commitment to encouraging community involvement inspires others to contribute to meaningful causes.</p></div>
                    
                    <div id="linkedin-info"><a href="https://linkedin.com/in/Abdelhadi-Sahyouni"><i class="fab fa-linkedin-in"></i></a></div>
                </div>
            </drv>
        </div>







        <!-- This is Footer -->
        <?php include('../Footer/footer.php'); ?>

    </main>
</body>

</html>