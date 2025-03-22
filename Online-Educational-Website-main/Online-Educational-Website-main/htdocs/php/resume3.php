<?php require 'nav.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
   <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   <link rel="stylesheet" type="text/css" href="../kishan.css">
   <link rel="stylesheet" type="text/css" href="../left.css">
    <link rel="stylesheet" type="text/css" href="../NAV.css">
   <link rel="stylesheet" type="text/css" href="../Phone.css">
  <link rel="stylesheet" type="text/css" href="../cscode.css">
  <link rel="stylesheet" type="text/css" href="../header.css">
    <title>Editable Resume Template</title>
    <style>
      body { 
        margin-top:8rem;
      }
      .resumediv {
        width: 180mm;
        height: 257mm;
        border: 1px solid black;
        padding: 10mm;
        margin: 10mm auto;
      }
      .resumediv h1 {
        font-size: 28pt;
        margin: 0;
        padding: 0;
      }
       .resumediv h2 {
        font-size: 16pt;
        margin: 10pt 0;
        padding: 0;
      }
       .resumediv p {
        font-size: 12pt;
        margin: 0;
        padding: 0;
      }
       .btnn{
        display: block;
        margin: 10mm auto;
        padding: 10px;
        font-size: 14pt;
        margin-bottom:10mm;
      }
    </style>
  </head>
  <body>

    <div  class="resumediv" contenteditable="true">
      <h1>[Full Name]</h1>
      <p>[Address]<br>
      [Phone Number]<br>
      [Email Address]</p>

      <h2>Objective:</h2>
      <p>[Insert your career objective or summary here]</p>

      <h2>Education:</h2>
      <p>[Degree], [Major], [Graduation Date], [University Name], [GPA]<br>
      [Relevant coursework or academic achievements]</p>

      <h2>Experience:</h2>
      <p>[Job Title], [Employer], [Employment Dates]<br>
      - [Job duty or accomplishment]<br>
      - [Job duty or accomplishment]<br>
      - [Job duty or accomplishment]</p>

      <p>[Job Title], [Employer], [Employment Dates]<br>
      - [Job duty or accomplishment]<br>
      - [Job duty or accomplishment]<br>
      - [Job duty or accomplishment]</p>

      <h2>Skills:</h2>
      <p>[Technical skills or tools you are proficient in]<br>
      [Soft skills or personal qualities that make you an asset to the employer]</p>

      <h2>Activities and Interests:</h2>
      <p>[List any extracurricular activities or interests that demonstrate your skills or character]</p>

      <h2>References:</h2>
      <p>[Name], [Title], [Company], [Phone number], [Email address]<br>
      [Name], [Title], [Company], [Phone number], [Email address]</p>
    </div>
    <button  class="btnn" onclick="downloadResumeJPG()">Download Resume as JPEG</button>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
      function downloadResumeJPG() {
        var element = document.querySelector(".resumediv");
        html2canvas(element).then(function(canvas) {
          var imgData = canvas.toDataURL('image/jpeg');
          var a = document.createElement("a");
          a.href = imgData;
          a.download = "resume.jpg";
          a.click();
        });
      }
   </script>
</body>
</html>
 
      
      
