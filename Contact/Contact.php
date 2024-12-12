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
    <title>YAD - Contact</title>
    <link rel="icon" href="yadlogo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
<body>
    
    <!-- This is a Green Logo NavBar -->
    <?php include('../NavBar-GreenLogo/Nav-GreenLogo.php'); ?>
    

    <main>


        <!-- First Section -->

        <div class="conter first_sec">
            <div class="background-contact"></div>
            <div class="title"><h1>Contact « YAD »</h1></div>
        </div>





        <!-- Second Section -->

        <div class="info_vol_container" >
            <div class="huge_conter_vol">
                <div class="volunter_info_img">
                    <img src="team.png" alt="Get Involved With YAD">
                </div>
    
                <div class="voluntering_text">
                    <h1>Contact YAD <br>We Can Team</h1>
                    <p>If you are an association or organization looking to reach out to numerous students to assist them in completing their university education, please do not hesitate to contact us. We can connect you with
                        the students you are looking for. Additionally, if you are a student with any inquiries regarding
                        available scholarships or need assistance in filling out a scholarship application form completely free
                        of charge, please do not hesitate to get in touch with us.</p>
                        <div class="icons_contact">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.x.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

            </div>
        </div>


        


        <!-- third section -->


        <div class="contact-container">
            <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
                <div class="contact-left-title">
                    <h2>Contact US</h2>
                    <hr>
                </div>
                <input type="hidden" name="access_key" value="08dc9280-204a-4b2c-b629-956cd333003f">
                <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
                <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
                <textarea name="message" placeholder="Your Message" class="contact-inputs" required></textarea>
                <button type="submit">Submit<img src="arrow_icon.png"></button>
            </form>
        </div>






        <!-- This is Footer -->
        <?php include('../Footer/footer.php'); ?>

    </main>
</body>

</html>