<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO-CONNECT: SHARE-LEARN-THRIVE</title>
    <link rel="stylesheet" href="sars.css">
    <style>
    #tooltip-text {
        font-size: 20px;
        color: blue;
            }
            
        .contact-number {
        font-size: 18px; 
        color: black;
        margin-top: 10px;
    }
</style>
</head>
<body style="background: linear-gradient(to right, whitesmoke,yellow);width: 100%;">
<div class="tooltip" style="display: none;">
        <p id="tooltip-text"></p>
    </div>
    

    <?php
session_start();
if (isset($_SESSION['email'])) {
    echo "<h1 style='color: green;'>Welcome ".$_SESSION['fname']."</h1>";
    echo "<a style='position: absolute; bottom: 95%; left: 93%; font-size: 20px;' href='index.php'>Logout</a>";
} else {
    echo "<h1>Welcome Guest</h1>";
}
 ?>



    <div class="gline">
  <span class="head">ECO-CONNECT: <span style="font-size: x-small;">SHARE-LEARN-THRIVE </span> 
  </span><span class="side">Welcome</span>
  <span style="padding-left: 140px;flex-direction: column;">
    <a href="login.php" title="Account Information">
      <img src="https://pm1.aminoapps.com/6761/d63cf8f1a27519a70c9e5b86c45a5b2bb1fe8f85v2_00.jpg" alt="non" title="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" style="width: 90px;height: 90px;border:1px  solid black; border-radius: 50%; box-shadow: none;" >
    </a>
    
  </span>
</div>
    <div class="hhover">
        
        <a href="#prop"><span class="hover">Topics</span></a>
        <a href="#foot"><span class="hover">About us</span></a>
        <a href="location.html"><span class="hover">Location</span></a>
    </div>
        
        <div>
            <marquee class="li" scrollamount="20">This is a lifestyle and development website</marquee>

    </div>
    <div id="life">
        <p style="font-size: 50px;">Sustainable lifestyle.</p>
        <img src="https://www.ambujaneotia.com/wp-content/uploads/2023/04/Sustainable-Lighting-scaled.jpg" width="20%" style="display: block; margin-left:auto;margin-right: auto;">
        <ul>
            <li>Sustainable Lifestyles are considered as ways of living, social behaviors and choices, that minimize environmental degradation (use of natural resources, CO2 emissions, waste and pollution) while supporting equitable socio-economic development and better quality of life for all.</li>
            <li>Sustainable living describes a lifestyle that attempts to reduce the use of Earth's natural resources by an individual or society.</li>
            <li>Its practitioners often attempt to reduce their ecological footprint (including their carbon footprint) by altering their home designs and methods of transportation, energy consumption and diet.</li>
            <li>Its proponents aim to conduct their lives in ways that are consistent with sustainability, naturally balanced, and respectful of humanity's symbiotic relationship with the Earth's natural ecology.</li>
            <li>The practice and general philosophy of ecological living closely follows the overall principles of sustainable development.</li>
            <li>One approach to sustainable living, exemplified by small-scale urban transition towns and rural ecovillages, seeks to create self-reliant communities based on principles of simple living, which maximize self-sufficiency, particularly in food production.</li>

        </ul>
        <iframe width="999" height="562" src="https://www.youtube.com/embed/y5PKB9q5TA4" title="Cooking amidst Rice Fields: Meaty Squash Soup and Crispy-fried Squash I Joseph The Explorer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p style="font-size: 50px;">Sustainable development</p>
        
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZX_0lg4mE-gfKdwIrixueJTztY2YWKKFS7Q&usqp=CAU" width="20%" style="display: block; margin-left:auto;margin-right: auto;">
        
        <ul>
            <li>Sustainable development is development that meets the needs of the present without compromising the ability of future generations to meet their own needs.</li>
            <li>Sustainable development is an organizing principle that aims to meet human development goals while also enabling natural systems to provide necessary natural resources and ecosystem services to humans.</li>
            <li>The desired result is a society where living conditions and resources meet human needs without undermining the planetary integrity and stability of the natural system.</li>
            <li>Sustainable development tries to find a balance between economic development, environmental protection
            <li  id="prop">The Brundtland Report in 1987 defined sustainable development as "development that meets the needs of the present generation without compromising the ability of future generations to meet their own needs".</li>
        <li>The concept of sustainable development nowadays has a focus on economic development, social development and environmental protection for future generations.</li>
        <li> Sustainable development was first institutionalized with the Rio Process initiated at the 1992 Earth Summit in Rio de Janeiro. In 2015 the United Nations General Assembly (UNGA) adopted the Sustainable Development Goals (2015 to 2030) and explained how the goals are integrated and indivisible to achieve sustainable development at the global level. The UNGA's 17 goals address the global challenges, including poverty, inequality, climate change, environmental degradation, peace, and justice.</li>
        <li> Sustainable development is interlinked with the normative concept of sustainability. UNESCO formulated a distinction between the two concepts as follows: "Sustainability is often thought of as a long-term goal (i.e. a more sustainable world), while sustainable development refers to the many processes and pathways to achieve it." The concept of sustainable development has been criticized in various ways. While some see it as paradoxical (or as an oxymoron) and regard development as inherently unsustainable, others are disappointed in the lack of progress that has been achieved so far. Part of the problem is that "development" itself is not consistently defined.</li>
    </ul>
</div>

<p style="font-size: 50px;"><u>Properties of sustainable Lifestyles and Development::</u></p>
    
<span class="icons">
    <a href="food.html" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRghK2_1y2Dw9x4LjCLEJfFmg8WdNFPBMAjg&usqp=CAU" alt="error" style="width: 10%;"></a>
</span>
<span class="icons">
    <a href="geo1.html" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyQULcOYe_ea7D00vrPLo0qTgkplM4Y3u02A&usqp=CAU" alt="error" style="width: 10%;"></a>
</span>

<span class="icons">
    <a href="paperless.html" target="_blank"><img src="https://static.thenounproject.com/png/33778-200.png" alt="error" style="width: 150px;"></a>
</span>

<div>
    <video controls autoplay src="rickyvid.mp4" width="50%" style=" display: block;margin-left: auto;margin-right: auto; align-content: center;">Happy life</video>
</div>
<footer class="footer" id="foot">
    <div>
        <span>
            <h4><u>ABOUT US:</u></h4>
            <span class="footer">
                <img src="https://media.licdn.com/dms/image/D4D03AQE8UbR6CDbQoA/profile-displayphoto-shrink_800_800/0/1709882634314?e=1715212800&v=beta&t=96OTGJR-biZcQY56wNZG7fBXLttPxxvAyVbFMsWAj-E" alt="1">
            </span>
            <span class="footer">
                <img src="ricky_photo.jpg" alt="1">
            </span>
            <span class="footer">
                <img src="https://media.licdn.com/dms/image/D4E03AQHg5xYlw2UhIw/profile-displayphoto-shrink_800_800/0/1683621001453?e=1715212800&v=beta&t=1uwHfds_ODTdyRLj8aBLwZeyDaCh_mjP3iZWcPukhFE" alt="1">
            </span>
            <span class="footer">
                <img src="Shivashankar.jpg" alt="1">
            </span>
        </span>
    </div>
    <div class="ficon">
        <a href="https://www.linkedin.com/in/atharv-shevade-b182b52b9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app " style="padding-top: 50px; padding-left: 140px;">Atharv Shevde</a>
        
        <a href="https://www.linkedin.com/in/rickysingh-tekcham-996046288?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" style="padding-top: 50px; padding-left: 230px;">Tekcham Rickysingh</a>
        <a href="https://www.linkedin.com/in/subhag-raut-246512274?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" style="padding-top: 50px; padding-left: 200px;">Subhag Raut</a>
        <a href="https://www.linkedin.com/in/shivashankar-meganathan-5ab51b26b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" style="padding-top: 190px; padding-left: 150px;">Shivashankar Meganathan
    </div>
    <div id="feed">
        <a href="submit_form.php">To share your thoughts - Click here</a>
    </div>
</footer>

<script>
    const tooltip = document.querySelector('.tooltip');

    const accountIcon = document.querySelector('a img[src="https://pm1.aminoapps.com/6761/d63cf8f1a27519a70c9e5b86c45a5b2bb1fe8f85v2_00.jpg"]');

    // Replace the static account information with dynamic information based on the logged-in user
    let accountInfo = `Name: <?php echo isset($_SESSION['fname']) ? $_SESSION['fname'] : 'Guest'; ?>\n` +
                  `Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>`;

    accountIcon.addEventListener('mouseover', () => {
      tooltip.style.display = 'block';
      document.querySelector('#tooltip-text').innerText = accountInfo;
    });

    accountIcon.addEventListener('mouseout', () => {
      tooltip.style.display = 'none';
    });

    window.addEventListener('click', () => {
      tooltip.style.display = 'none';
    });
</script>
<?php
$_SESSION = array();
session_destroy();
exit;
?>


</body>
</html>

