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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="../Home/stylesheet.css">
</head>
<body>

    <!-- This is a NavBar -->

    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#719637"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="../Home/Home.php">Home</a></li>
            <li><a href="../AboutUs/AboutUs.php">About us</a></li>
            <li><a href="../Blogs/Blogs.php">Blogs</a></li>
            <li><a href="../Contact/Contact.php">Contact</a></li>
            <li id="opportunity-item2"><a href="../Volunteer/Volunteer.php"><i>Volunteer</i></a></li>
        </ul>

        
        <ul>
            <li><a href="../Home/Home.php" id="yad-logo"><img src="yadlogo.png" alt=""></a></li>
            <li class="hideonmobile"><a href="../Home/Home.php">Home</a></li>
            <li class="hideonmobile"><a href="../AboutUs/AboutUs.php">About us</a></li>
            <li class="hideonmobile"><a href="../Blogs/Blogs.php">Blogs</a></li>
            <li class="hideonmobile"><a href="../Contact/Contact.php">Contact</a></li>
            <li class="hideonmobile" id="opportunity-item1"><a href="../Volunteer/Volunteer.php"><i>Volunteer</i></a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFFFFF"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
        
    </nav>

</body>
</html>