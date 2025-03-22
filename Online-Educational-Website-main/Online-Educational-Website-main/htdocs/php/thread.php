<?php
    $thread_id = $_GET['threadid'];
?>
<html>
<head>  
</head>
<body>
    <?php
        echo $thread_id;
        if ($thread_id == 1) {
            echo '          
<table style="width: 100%; font-size: 0.875rem; text-align: left; color: #718096;">
  <thead style="font-size: 0.75rem; text-transform: uppercase; background-color: #9f7aea; color: #fff;">
    <tr>
      <th scope="col" style="padding: 1rem 1.5rem;">In Tutorials (24 results found)</th>
    </tr>
  </thead>
  <tbody style="background-color: #dee0e4;;">
    <div style="height: auto; overflow: auto;">
      <div class="infinite-scroll-component">
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;"><a href="">Python PIP</a></th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">Python Iterators</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">Python OOPS</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">Python Packages</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">Python Modules</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">Python Functions</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">Python while Loop</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">Python for Loop</th>
        </tr>
       </div>
   <div>
    </tbody>
</table>
';
        }
        if ($thread_id == 2) {
            echo '
<table style="width: 100%; font-size: 0.875rem; text-align: left; color: #718096;">
  <thead style="font-size: 0.75rem; text-transform: uppercase; background-color: #9f7aea; color: #fff;">
    <tr>
      <th scope="col" style="padding: 1rem 1.5rem;">In Tutorials (24 results found)</th>
    </tr>
  </thead>
  <tbody style="background-color: #dee0e4;;">
    <div style="height: auto; overflow: auto;">
      <div class="infinite-scroll-component">
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;"><a href="">HTML Tables</a></th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">HTML Lists</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">HTML Images</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">HTML Comments</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">HTML Links</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">HTML Attributes</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">HTML Elements</th>
        </tr>
        <tr style="border-bottom: 1px solid #cbd5e0; cursor: pointer; display: block; padding: 1rem 1.5rem; color: #1a202c;">
          <th scope="row" style="font-weight: normal; white-space: nowrap;">HTML Tags</th>
        </tr>
       </div>
   <div>
    </tbody>
</table>
';
        }
    ?>
</body>
</html>
