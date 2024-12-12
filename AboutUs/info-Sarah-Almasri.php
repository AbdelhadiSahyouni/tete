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
    <title>Sarah Almasri - Advisor</title>
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
                <div class="team_pic"><img src="team5.png" alt="Sarah Almasri"></div>
                
                <div class="team_info_col">
                    <a href="javascript:history.back()">Back ></a>
                    
                    <div class="name_position_col">
                        <h1>Sarah Almasri</h1>
                        <h2>Advisor</h2>
                    </div>

                    <div class="paragraph"><p>Sarah Almasri, an insightful Advisor, plays a pivotal role in providing strategic guidance and mentorship. Her expertise and critical thinking skills allow her to navigate challenges and offer innovative solutions. Sarah’s ability to analyze situations and provide tailored advice ensures the team stays focused on achieving its goals. She is a trusted voice in the organization, helping shape its vision for a brighter future.</p></div>
                    
                    <div id="linkedin-info"><a href="https://www.linkedin.com/in/rose-farah"><i class="fab fa-linkedin-in"></i></a></div>
                </div>
            </drv>
        </div>

        
      <!-- This is Footer -->
      <?php include('../Footer/footer.php'); ?>

    </main>
</body>

</html>