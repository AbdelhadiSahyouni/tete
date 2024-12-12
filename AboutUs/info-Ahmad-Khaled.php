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
    <title>Ahmad Khaled - Content Writer</title>
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
                <div class="team_pic"><img src="team3.png" alt="Ahmad Khaled"></div>
                
                <div class="team_info_col">
                    <a href="javascript:history.back()">Back ></a>
                    
                    <div class="name_position_col">
                        <h1>Ahmad Khaled</h1>
                        <h2>Content Writer</h2>
                    </div>

                    <div class="paragraph"><p>Ahmad Khaled is a talented Content Writer with a knack for storytelling and effective communication. His creativity shines through in the compelling narratives he crafts, which help connect the organization’s mission to a broader audience. Ahmad excels in turning complex ideas into accessible content, ensuring that messages resonate deeply with readers. His dedication to sharing impactful stories helps the team amplify its voice and reach new horizons.</p></div>
                    
                    <div id="linkedin-info"><a href="https://www.linkedin.com/in/karim-dabbagh-8123291b8"><i class="fab fa-linkedin-in"></i></a></div>
                </div>
            </drv>
        </div>


        <!-- This is Footer -->
        <?php include('../Footer/footer.php'); ?>
                
    </main>
</body>

</html>