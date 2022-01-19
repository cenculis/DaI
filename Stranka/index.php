<!DOCTYPE HTML>

<head>
	<meta http-equiv="Content-Type" content="Stranka slavky fratricovej" charset="UTF-8">
	<meta name="Author" content="Peter Tibensky, STU"> 
	<meta http-equiv="content-language" content="sk">

   <link rel="stylesheet" href="css/default.css"> 
  <link rel="stylesheet" href="css/layout.css"> 
  <link rel="stylesheet" href="css/media-queries.css"> 
  <link rel="stylesheet" type="text/css" href="style.css">
	<title>SF</title>
  <link rel="shortcut icon" href="favicon.png" >
</head>

<body>

<?php 
require_once "config.php";
?>



<button class="open-button pointer" onclick="openForm()"></button>
<div class="form-popup " id="myForm">
  <a href='login.php' class="button10"></a>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<div class="logo center">
<a href="index.php"><img src="favicon.png" alt='Home' ></a>
</div>

<div class="topnav">
<div class="flex-parent jc-center ">

    <a href='indexx.php' class="button button1 font">texty</a>

    <a href='foto.php' class="button button1 font">foto</a>

    <a href='portfolko.php' class="button button1 font">portfolko</a>

</div>
 </div>

<div class="popis font">
<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra nisi a dolor interdum ultrices. Donec condimentum gravida augue ac semper. Vivamus ipsum odio, tristique nec blandit ac, finibus vel felis. Nunc elementum, quam vitae pulvinar tincidunt, neque justo elementum eros, vel auctor enim eros in leo. Aliquam pretium porta convallis. Cras non diam velit. Vivamus eget mauris mauris. Vivamus imperdiet arcu id ligula ullamcorper consectetur. Quisque mi magna, cursus sit amet neque ac, ultricies sagittis turpis. Nunc nec neque quis ante convallis interdum in sed nunc. Quisque in sapien at metus posuere fringilla. Vestibulum nec tincidunt risus. Ut tempus lectus et rhoncus consectetur. Pellentesque fermentum diam eget mauris pharetra, sit amet pulvinar mi porta. In hac habitasse platea dictumst. Donec vehicula risus sit amet tempor vestibulum.
</p>
</div>

<div class="popis font">
<p>
Curabitur molestie tellus vel mauris elementum pellentesque. Proin id felis non ante molestie posuere ornare dapibus sem. Fusce fermentum turpis eget leo gravida, sed ullamcorper urna blandit. Sed cursus erat quis orci tempor, quis elementum quam tincidunt. Ut nec commodo risus, at vulputate leo. Vivamus tincidunt sagittis velit, a sagittis turpis vestibulum a. Phasellus auctor elit sit amet viverra elementum. Sed accumsan libero vel mi ultrices, eget condimentum eros sodales. In eu tortor interdum, consequat mauris non, commodo elit. Quisque molestie leo vitae ipsum vehicula, ut commodo ipsum efficitur. Vivamus condimentum nibh et quam volutpat, quis auctor felis tempus. Sed ultricies ac quam ac laoreet.
</p>
</div>

<hr style="height:2px;border-width:0;color: #FFD658 ;background-color: #FFD658">

<div class="flex-parent jc-center ">

<div class=" column font ">
    <img src="in.png" alt="linkedin" style="width:4.5%">
      www.linkedin.com/in/slavka-fratricova
</div>

<div class=" column font">
    <img src="email.png" alt="email" style="width:5.8%">
     slavka.fratricova@gmail.com
</div>
 
</div>

</body>