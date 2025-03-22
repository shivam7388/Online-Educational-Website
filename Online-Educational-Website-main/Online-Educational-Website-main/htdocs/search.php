<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/search.css">
    <style>
        #maincontainer{
            min-height: 100vh;
         }
    </style>
    <title>search-page</title>
</head>

<body>
    <?php require 'php/config.php'; ?>
    <?php require 'index.php'; ?>
    <?php echo '<script> hideContent();</script>'; ?>

    <div class="container my-3" id="maincontainer">
  <h1 class="py-3">Search results for <em>"<?php echo htmlspecialchars($_GET['q']); ?>"</em></h1>
   
   <?php
        $noresults = true;
        $query=$_GET["q"];
        $sql = "select * from threads where match (thread_title, thread_desc) against ('$query')"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['thread_title'];
            $desc = $row['thread_desc']; 
            $thread_id= $row['thread_id'];
            $url = "php/thread.php?threadid=". $thread_id;
            $noresults = false;

           if ($thread_id == 1) {
            echo '<div class="result" style="width: 100%; font-size: 0.875rem; text-align: left;">               
                    <table style="width: 100%; font-size: 0.875rem; text-align: left; color: #718096; display:block;">
                        <thead style="font-size: 0.75rem; text-transform: uppercase; background-color: #9f7aea; color: #fff; display:block;">
                     <tr>
                    <th scope="col" style="padding: 1rem 1.5rem; display:block;">In Tutorials ( 1 results found)</th>
                    </tr>
                    </thead>
                     <tbody style="background-color: #dee0e4; display:block;">
                     <div style="height: auto; overflow: auto;">
                       <div class="infinite-scroll-component">
                       <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
                      <th scope="row" style="font-weight: normal;"><a href="../index.php#Python">'. $title. '</a>
                       <P>'. $desc .'</P>
                         </th>
                    </tr>
                <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
               <th scope="row" style="font-weight: normal; "><a href="php/videohtmlpython.php">'. $title. ' Video</a>
                <P>Python Tutorials - 100 Days of Code<p>
                <p>Python is one of the most demanded programming languages in the job market.</p>
                <p>Surprisingly, it is equally easy to learn and master Python.</p> 
                <p>Let\'s commit our 100 days of code to python!</p>
               
             </th>
              
               </tr>  
              </div>
                      </div>
              </tbody>
                 </table>

   
                  </div>'; 
          }
              
  if ($thread_id == 2) {
            echo '<div class="result" style="width: 100%; font-size: 0.875rem; text-align: left;">               
                    <table style="width: 100%; font-size: 0.875rem; text-align: left; color: #718096; display:block; ">
                        <thead style="font-size: 0.75rem; text-transform: uppercase; background-color: #9f7aea; color: #fff; display:block;">
                       <tr>
                    <th scope="col" style="padding: 1rem 1.5rem; display:block;">In Tutorials ( 1 results found)</th>
                    </tr>
                    </thead>
                     <tbody style="background-color: #dee0e4; display:block;">
                     <div style="height: auto; overflow: auto;">
                       <div class="infinite-scroll-component">
                       <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
                      <th scope="row" style="font-weight: normal;"><a href="index.php#Html">'. $title. '</a>
                       <P>'. $desc .'</P>
                         </th>
                    </tr>
                <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
               <th scope="row" style="font-weight: normal; "><a href="php/videohtml.php">'. $title. ' Video</a>
                   <p>HTML Tutorials For Beginners</p>
                   <p>Welcome to our HTML tutorial!</p>
                   <p>In this tutorial we learn web pages, customize existing ones, and</p>
                   <p>understand how web pages are structured.</p> 
                   <p>this tutorial is perfect for you.</p> 
                   <p>Let\'s get started!</p>
               </th>
               </tr>  
              </div>
                      </div>
              </tbody>
                 </table>
                  </div>'; 
          }
               if ($thread_id == 3) {
            echo '<div class="result" style="width: 100%; font-size: 0.875rem; text-align: left;">               
                    <table style="width: 100%; font-size: 0.875rem; text-align: left; color: #718096; display:block;">
                        <thead style="font-size: 0.75rem; text-transform: uppercase; background-color: #9f7aea; color: #fff; display:block;">
                     <tr>
                    <th scope="col" style="padding: 1rem 1.5rem; display:block;">In Tutorials ( 1 results found)</th>
                    </tr>
                    </thead>
                     <tbody style="background-color: #dee0e4; display:block;">
                     <div style="height: auto; overflow: auto;">
                       <div class="infinite-scroll-component">
                       <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
                      <th scope="row" style="font-weight: normal;"><a href="index.php#CSS">'. $title. '</a>
                       <P>'. $desc .'</P>
                         </th>
                    </tr>
                <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c; display:block;">
               <th scope="row" style="font-weight: normal; "><a href="php/videocss.php">'. $title. ' Video</a>
               <p>The basics of CSS (Cascading Style Sheets) and gradually move towards advanced concepts.</p>
               <p>CSS is a styling language used to define the visual appearance of web pages.</p> 
               <p>With CSS, you can control the layout of web pages, change the colors and </p>
               <p>fonts, and create visually appealing and responsive web pages.</p>
                 </th>
               </tr>  
              </div>
                      </div>
              </tbody>
                 </table>
                  </div>'; 
          }
               if ($thread_id == 4) {
            echo '<div class="result" style="width: 100%; font-size: 0.875rem; text-align: left;">               
                    <table style="width: 100%; font-size: 0.875rem; text-align: left; color: #718096; display:block;">
                        <thead style="font-size: 0.75rem; text-transform: uppercase; background-color: #9f7aea; color: #fff; display:block;">
                     <tr>
                    <th scope="col" style="padding: 1rem 1.5rem; display:block;">In Tutorials ( 1 results found)</th>
                    </tr>
                    </thead>
                     <tbody style="background-color: #dee0e4; display:block;">
                     <div style="height: auto; overflow: auto;">
                       <div class="infinite-scroll-component">
                       <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
                      <th scope="row" style="font-weight: normal;"><a href="index.php#Javascript">'. $title. '</a>
                       <P>'. $desc .'</P>
                         </th>
                    </tr>
                <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
               <th scope="row" style="font-weight: normal; "><a href="php/videojavascript.php">'. $title. ' Video</a>
               <p>Ultimate JavaScript Course</p>
               <p>This latest JavaScript course comes with premium curriculum that covers everything from basics to advance.</p> 
               <p>On top of that, you will get my handwritten notes of JS for completely free.</p> 
               <p>What are you waiting for? Just Enroll Buddy.</p>
               </th>
               </tr>  
              </div>
           </div>
              </tbody>
                 </table>
                  </div>'; 
          }
               if ($thread_id == 5) {
            echo '<div class="result" style="width: 100%; font-size: 0.875rem; text-align: left;">               
                    <table style="width: 100%; font-size: 0.875rem; text-align: left; color: #718096;">
                        <thead style="font-size: 0.75rem; text-transform: uppercase; background-color: #9f7aea; color: #fff;">
                     <tr>
                    <th scope="col" style="padding: 1rem 1.5rem;">In Tutorials ( 1 results found)</th>
                    </tr>
                    </thead>
                     <tbody style="background-color: #dee0e4;;">
                     <div style="height: auto; overflow: auto;">
                       <div class="infinite-scroll-component">
                       <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
                      <th scope="row" style="font-weight: normal; white-space: nowrap;"><a href="index.php#PHP">'. $title. '</a>
                       <P>'. $desc .'</P>
                         </th>
                    </tr>
                <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
               <th scope="row" style="font-weight: normal; white-space: nowrap;"><a href="php/videophp.php">'. $title. ' Video</a>
                 <p> Welcome to this PHP tutorial!</p>
                 <p>In this tutorial, we will take you through the basics of PHP programming language and</p> 
                 <p>gradually move towards advanced concepts.</p>
                 <p>PHP (Hypertext Preprocessor) is a widely-used open source server-side scripting language</p>
                 <p>that is designed primarily for web development.</p>
               </th>
               </tr>  
              </div>
           </div>
              </tbody>
                 </table>
                  </div>'; 
          }
 }             
 if ($noresults){
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Results Found</p>
                        <p class="lead"> Suggestions: <ul>
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords. </li></ul>
                        </p>
                    </div>
                 </div>';
        }  
         elseif (isset($_GET['threadid'])) {
        echo '<div class="thread-content">';
        include 'thread.php'; // include the contents of thread.php
        echo '</div>';
    }
     ?>
<script>
const searchBox = document.querySelector('#search-box');
const noResultsMessage = document.querySelector('.jumbotron');

searchBox.addEventListener('input', () => {
  if (searchBox.value.length > 0) {
    noResultsMessage.style.display = 'none';
  } else {
    noResultsMessage.style.display = 'block';
  }
});
</script>
<script>  
   function hideContent() {
    document.getElementById('content').style.display = 'none';
    document.getElementById('foot').style.display = 'none';
    console.log("hide");
    }
</script>
</body>
</html>