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
    <title>Get Involved With YAD</title>
    <link rel="icon" href="yadlogo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    
    <!-- This is a Green Logo NavBar -->
    <?php include('../NavBar-GreenLogo/Nav-GreenLogo.php'); ?>
    

    <main>
        
        <!-- first section -->

        <div class="info_vol_container" >
            <div class="huge_conter_vol">
                <div class="volunter_info_img">
                    <img src="get involve with us.jpg" alt="Get Involved With YAD">
                </div>
    
                <div class="voluntering_text">
                    <h1>Get Involved <br>With YAD</h1>
                    <h4>Be an agent of change!</h4>
                    <p>We invite students to volunteer with the YAD Initiative and help make a difference in our community.By joining our team, you'll support fellow students and children affected by Lebanon's economic crisisand COVID-19. Volunteering with YAD offers valuable experiences, skills, and the chance to be part ofa passionate team. Together, we can empower youth and create a positive impact. Your dedication canmake a real difference, join us and be part of the change!.</p>
                    <div class="two_bottons">
                        <a id="explore-button" href="#">Explore How</a>
                        <a id="contact-button" href="../Contact/Contact.php">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>


        <script>
            document.getElementById("explore-button").addEventListener("click", function(event) {
                event.preventDefault();
                document.getElementById("big-counter-section").scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });
            });
        </script>


         <!-- Secound section -->
        
         <div class="big_counter" id="big-counter-section">
            <section class="container">
                <header>Volunteer Form</header>
                <form action="#" class="form">
                    <div class="input-box">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter full name" required />
                    </div>
    
                    <div class="input-box">
                        <label>Email Address</label>
                        <input type="email" placeholder="Enter email address" required/>
                    </div>
    
                    <div class="column">
                        <div class="input-box">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter phone number" required/>
                        </div>
    
                        <div class="input-box">
                            <label>Birth Date</label>
                            <input type="date" placeholder="Enter birth date" required/>
                        </div>
                    </div>
    
                    <div class="gender-box">
                        <h3>Gender</h3>
                        <div class="gender-option">
                            <div class="gender">
                                <input type="radio" id="check-male" name="gender" checked>
                                <label for="check-male">Male</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-female" name="gender">
                                <label for="check-female">Female</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-other" name="gender">
                                <label for="check-other">Prefer not to say</label>
                            </div>
                    </div>
    
                    <div class="input-box address">
                        <label>Address</label>
                        <input type="text" placeholder="Enter street address" required/>
                        <input type="text" placeholder="Enter street address line 2" required/>
                        <div class="column">
                            <div class="select-box">
                                <select>
                                    <option hidden>Country</option>
                                    <option>Lebanon</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>Canada</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                    <option>Italy</option>
                                    <option>Spain</option>
                                    <option>Japan</option>
                                    <option>South Korea</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" placeholder="Enter your city" required/>
                        <input type="text" placeholder="Enter your region" required/>
                        <input type="number" placeholder="Enter postal code" required/>
                    </div>
    
                    <button>Submit</button>
                </form>
            </section>
         </div>




        <!-- This is Footer -->
        <?php include('../Footer/footer.php'); ?>

    </main>
</body>

</html>