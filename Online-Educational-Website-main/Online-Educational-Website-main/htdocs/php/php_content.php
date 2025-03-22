
<div class="tabPanel" id="PHP">

<div class="wrapper3" id="item-containerp">
<input type="checkbox" id="btn4" hidden>
<label for="btn4" class="menu-btn"><img src="img/sidebar.png"></label>
 <nav  class="text-left bg-purple-100 md pl mdblock sidebar " aria-label="Breadcrumb" id=sidebar" style="background-color: #ff7200;overflow: scroll; ">
<div class="title">INTRODUCTION</div>
<ul class="left-nav">
<div><li onclick="PshowPanel(0,'#f5f6fa')"aria-current="page"><a id="btn1">PHP Overview</a></li></div>
<div><li onclick="PshowPanel(1,'#f5f6fa')"aria-current="page"id="Javascript"><a>PHP Comments</a></li></div>
<div><li onclick="PshowPanel(2,'#f5f6fa')"aria-current="page" id="rectjs"><a>Variables in PHP</a></li></div>
<div><li onclick="PshowPanel(3,'#f5f6fa')"aria-current="page" id="c"><a>Variable Scope</a></li></div>
<div class="title">Data Types & Operators</div>
<div><li onclick="PshowPanel(4,'#f5f6fa')"aria-current="page" id="c++"><a>PHP DataTypes</a></li></div>
<div><li onclick="PshowPanel(5,'#f5f6fa')"aria-current="page" id="c"><a>PHP Operators</a></li></div>
<div><li onclick="PshowPanel(6,'#f5f6fa')"aria-current="page" id="c"><a>PHP Conditional Statements</a></li></div>
<div><li onclick="PshowPanel(7,'#f5f6fa')"aria-current="page" id="c++"><a>PHP Iterative Statements</a></li></div>
<div><li onclick="PshowPanel(8,'#f5f6fa')"aria-current="page" id="c++"><a>Function Basics</a></li></div>
<div><li onclick="PshowPanel(9,'#f5f6fa')"aria-current="page" id="c">  <a>Function Arguments</a></li></div>

</ul>
</nav>

<div class="pe">
<button class="pre" type="presdp" value="prerp" name="presdp" id="prev-buttonp">Previous</button>
<button class="pre next" type="nextsdp" value="nextrp" name="nextsdp" id="next-buttonp">Next</button>
</div>

<div class="tabPanel5">

<div><h1 class="top" style="font-size:26px;">PHP Overview</h1></div>
<div><p dir="ltr">PHP is a server-side scripting language, which is used to manage dynamic web pages, databases and build websites with features like session tracking and e-commerce. On a day of 1995, Rasmus Lerdorf unleashed the first version of “Hypertext Preprocessor” also known as the PHP language. It is also integrated with several popular databases like MySQL, PostgreSQL, Microsoft SQL Server, Oracle etc.</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Uses of PHP</h3>
<p dir="ltr">PHP can perform several system functions like opening files, CRUD operations on data stores, general-purpose scripting, etc. Besides system operations, there are also other uses like</p>
<ol style="list-style-type: lower-alpha;">
<li dir="ltr">Handling Forms: PHP can handle form operations. It can gather data, save data to a file and send data through emails.</li>
<li dir="ltr"> Database Operations: PHP can also create, read, update and delete elements in your database.</li>
<li dir="ltr">Encryption: It can perform advanced encryption and encrypt data for you.</li>
<li dir="ltr">Dynamic Page Content: It can generate dynamic page content.</li>
</ol>
<p>&nbsp;</p>
<h3 dir="ltr">Basic Syntax PHP</h3>
<p dir="ltr">A PHP script can be written anywhere inside the HTML document. A PHP script starts with &lt;?php tag and ends with ?&gt;. We can write our logic inside this tag and it will be executed accordingly.</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php
echo htmlspecialchars('<?php
// PHP code goes here
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3>Displaying output in php</h3>
<p>In php,Output is displayed on the browser using echo as follows:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('<?php
echo "hello";
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3 dir="ltr">Hello World</h3>
<p dir="ltr">A basic PHP Hello World program looks something like this. We will use a built-in PHP function “echo” to output the text “Hello World!” on our webpage.</p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('
<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>
<?php
echo "Hello World!";
?>
</body>
</html>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p>
</div>

</div>

<div class="tabPanel5">


<div><h1 class="top">PHP Comments</h1></div>
<div ><p dir="ltr">A comment is a part of the coding file that the programmer does not want to execute, rather the programmer uses it to either explain a block of code or to avoid the execution of a specific part of code while testing.</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">PHP supports several ways of commenting:</h3>
<p dir="ltr"><strong>Single Line Comments</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('
<?php
// This is a single-line comment
# This is also a single-line comment
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Multiple-Line Comments</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('
<?php
/*
This is a
multiple line
Comment.
*/
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>&nbsp;</p></div>




</div>
<div class="tabPanel5">
<div><h1 class="top">Variables in PHP</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr"><strong>Variables are containers that can store information which can be manipulated or referenced later by the programmer within the code.</strong></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">In PHP, we don’t need to declare the variable type explicitly. The type of variable is determined by the value it stores. There are some important things to know about variables in PHP.</p>
<ul>
<li dir="ltr">All variables should be denoted with a Dollar Sign ($)</li>
<li dir="ltr">Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.</li>
<li dir="ltr">Variable names can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ).</li>
<li dir="ltr">Variables must start with a letter or the underscore “_” character.</li>
<li dir="ltr">Variables are case sensitive</li>
<li dir="ltr">Variable names cannot start with a number.</li>
</ul>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>For Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('
<?php
$txt = "Hello world!";  # Type String
$x = 5;               # Type int
$y = 10.5;            # Type Float
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p></div>

</div>
<div class="tabPanel5">

<div><h1 class="top">Variable Scope</h1></div>
<p dir="ltr">The scope of the variable is the area within which the variable has been created. Based on this a variable can either have a local scope or a global scope or a static scope in PHP.</p>
<p> <strong>&nbsp; </strong> </p>
<h3 dir="ltr">Global Variable:</h3>
<p dir="ltr">A variable which was created in the main body of the code and that can be accessed anywhere in the program is called Global Variable. Global variables can be directly accessed or used in or outside of a function with GLOBAL keyword before variable. However, we can also call them without the global keyword.&nbsp;</p>
<p dir="ltr"><strong>For Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
$name = "Kishan Bhai";        //Global Variable  
function global1_var()  
{  
  global $name;  
  echo "Variable inside the function: ". $name;  
  echo "</br>";  
}  
global1_var();  
echo "Variable outside the function: ". $name;  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p dir="ltr">Output:</p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
Variable inside the function: Kishan Bhai
Variable outside the function: Kishan Bhai
', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Local Variable:</h3>
<p dir="ltr">A local variable is created within a function and can be only used inside the function. This means that these variables cannot be accessed outside the function, as they have local scope.</p>
<p dir="ltr"><strong>For Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
function mytest1() 
{  
  $capital = "Delhi";  
  echo "Capital of India is: " .$capital;  
}  
mytest1(); //Calling the function
//using $capital outside the function will generate an error  
echo $capital;  
?> ', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p dir="ltr">Output:&nbsp;</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
Capital of India is: DelhiNotice: Undefined variable: capital in D:\xampp\htdocs\program\var.php on line 28
', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Static Variable:</h3>
<p dir="ltr">PHP has a feature that deletes the variable once it has finished execution and frees the memory. 
            When we need a local variable which can store its value even after the execution, 
             we use the static keyword before it and the variable is called static variable.&nbsp; </p>
<p dir="ltr">These variables only exist in a local function and do not get deleted after the execution has been completed.&nbsp;</p>
<p dir="ltr"><strong>For Example:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
function static_var1()  
{  
  static $num1 = 3;    //static variable  
  $num2 = 6;          //Non-static variable  
  //increment in non-static variable which will increment its value to 7
  $num1++;  
  //increment in static variable which will increment its value to 4 after first execution and 5 after second execution
  $num2++;  
  echo "Static: " .$num1 ."</br>";  
  echo "Non-static: " .$num2 ."</br>";  
}  


//first function call  
static_var1();  

//second function call  
static_var1();  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p dir="ltr">Output:</p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<xmp>
Static: 4
Non-static: 7
Static: 5
Non-static: 7    
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>



<p>&nbsp;</p>


</div>
<div class="tabPanel5">
<div><h1 class="top">PHP DataTypes</h1></div>
<div ><p dir="ltr">Data type specifies the type of value a variable requires to do various operations without causing an error. By default, PHP provides the following built-in data types:</p>
<ul>
<li dir="ltr" role="presentation">String</li>
<li dir="ltr" role="presentation">Integer</li>
<li dir="ltr" role="presentation">Float</li>
<li dir="ltr" role="presentation">Boolean</li>
<li dir="ltr" role="presentation">Array</li>
<li dir="ltr" role="presentation">NULL</li>
</ul>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">1. String</h3>
<p dir="ltr" role="presentation">A string is a sequence of characters that holds letters and numbers. It can be anything written inside single or double quotes.&nbsp;</p>
<p dir="ltr"><strong>For Example:</strong></p>



<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = "Hello world!";
echo $x;
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>



<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">2. Integer</h3>
<p dir="ltr" role="presentation">An integer is a non-decimal number typically ranging between&nbsp; -2,147,483,648 and 2,147,483,647.&nbsp;</p>




<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = 55;
var_dump($x);
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">3. Float</h3>
<p dir="ltr" role="presentation">A float is a number with a decimal point. It can be an exponential number or a fraction.</p>



<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = 52.55;
var_dump($x);
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3 dir="ltr" role="presentation">4. Boolean</h3>
<p dir="ltr" role="presentation">A Boolean represents two values: True or False.&nbsp;</p>



<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = true;
$y = false;
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3 dir="ltr" role="presentation">5. Array</h3>
<p dir="ltr" role="presentation">Array is a collection of similar data elements stored in a single variable.</p>



<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x =array("Rohan", "Lovish", "Harry");
var_dump($x);
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3 dir="ltr" role="presentation">6. NULL</h3>
<p dir="ltr" role="presentation">Null is a special data type with only one value which is NULL. In PHP, if a variable is created without passing a value, it will automatically assign itself a value of NULL.</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x =null;
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

</div>
</div>
<div class="tabPanel5">
<div><h1 class="top">PHP Operators</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr">PHP has different types of operators for different operations. They are as follows:</p>
<p><strong>&nbsp;</strong></p>
<h3>1. Arithmetic Operators</h3>
<p>Arithmetic operators are used to perform arithmetic operations.</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 39.9741%; border-width: 3px;" border="1"><colgroup><col style="width: 43.837%;"><col style="width: 28.1809%;"><col style="width: 27.7895%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Operator</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Example</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Addition</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">+</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x+$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Subtraction</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">-</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x-$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Multiplication</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">*</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x*$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Division</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">/</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x/$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Modulus</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">%</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x%$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Exponentiation</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">**</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x**$y</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">2. Assignment Operators</h3>
<p dir="ltr" role="presentation">These operators are used to assign values to variables.</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 30.0776%; border-width: 3px;" border="1"><colgroup><col style="width: 34.9315%;"><col style="width: 65.0685%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Evaluated as</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">a=b</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">+=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">a=a+b</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">-=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">a=a-b</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">*=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">a=a*b</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">/=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">a=a/b</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">%=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">a=a%b</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">3. Comparison Operators</h3>
<p dir="ltr" role="presentation">These operators are used to compare two values.</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 39.0039%; border-width: 3px;" border="1"><colgroup><col style="width: 52.7687%;"><col style="width: 22.4756%;"><col style="width: 24.7557%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Operator</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Example</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Equal</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">==</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x==$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Identical</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">===</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x===$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Not equal</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">!=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x!=$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Not equal</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&lt;&gt;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x&lt;&gt;$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Not Identical</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">!===</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x!===$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Greater than</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&gt;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x&gt;$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Less than</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&lt;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x&lt;$y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Greater than or equal to</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&gt;=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x &gt;= $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Less than or equal to</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&lt;=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x &lt;= $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Spaceship</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&lt;=&gt;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x &lt;=&gt; $y</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">4. PHP Increment/ Decrement Operators</h3>
<p dir="ltr" role="presentation">These operators are used to increment/ decrement variable’s value.&nbsp;</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 27.2316%; border-width: 3px;" border="1"><colgroup><col style="width: 62.0879%;"><col style="width: 37.9121%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Operator</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Pre-Increment</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">++$x</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Post-Increment</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x- -&nbsp;&nbsp;&nbsp;&nbsp;</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Pre-decrement</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">–$x</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Post-decrement</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x- -</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">5. PHP Logical Operators</h3>
<p dir="ltr" role="presentation">These are the logical operators that combine conditional statements.</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 36.4166%; border-width: 3px;" border="1"><colgroup><col style="width: 26.1538%;"><col style="width: 35.3846%;"><col style="width: 38.4615%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Operator</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Example</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">And</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">and</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x and $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Or</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">or</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x or $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Xor</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">xor</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x xor $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">And</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&amp;&amp;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x &amp;&amp; $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Or</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">||</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x || $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Not</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">!</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">!&amp;x</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">6. PHP String Operators</h3>
<p dir="ltr" role="presentation">PHP has these two operators designed for strings.</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 32.7296%; border-width: 3px;" border="1"><colgroup><col style="width: 49.5868%;"><col style="width: 20.1102%;"><col style="width: 30.303%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Operator</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Example</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Concatenation</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">.&nbsp;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$text1 . $text2</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Concatenation Assignment</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">.=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$text1 .= $text2</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">7. PHP Array Operators</h3>
<p dir="ltr" role="presentation">These Operators are used to compare arrays.</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 29.6248%; border-width: 3px;" border="1"><colgroup><col style="width: 43.767%;"><col style="width: 26.6514%;"><col style="width: 29.341%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Operator</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Example</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Union</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">+&nbsp;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x + $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Equality</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">==</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x = $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Identity</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">===</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x === $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Inequality</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">!=</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x != $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Inequality</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">&lt;&gt;</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x &lt;&gt; $y</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">!== Non-Identity</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">!==</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x !== $y</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">8. PHP Conditional Operators</h3>
<p dir="ltr" role="presentation">These operators assign values to operands based on the outcome of a certain condition.&nbsp;</p>
<div dir="ltr" align="left">
<table style="border-collapse: collapse; width: 29.6895%; border-width: 3px;" border="1"><colgroup><col style="width: 32.3615%;"><col style="width: 20.1166%;"><col style="width: 47.5219%;"></colgroup>
<tbody>
<tr>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Name</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Operator</strong></p>
</td>
<td style="border-width: 3px;">
<p dir="ltr"><strong>Example</strong></p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Ternary</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">?:</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x = exp1 ? exp2 : exp3</p>
</td>
</tr>
<tr>
<td style="border-width: 3px;">
<p dir="ltr">Null Coalescing</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">??</p>
</td>
<td style="border-width: 3px;">
<p dir="ltr">$x = exp1 ?? exp2</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div></div>



</div>
<div class="tabPanel5">
<div><h1 class="top">PHP Conditional Statements</h1></div>
<div><p dir="ltr">Conditional Statements are used to perform actions based on different conditions. Sometimes when we write a program, we want to perform some different actions for different actions. We can solve this by using conditional statements.&nbsp;</p>
<p dir="ltr"><strong>In PHP we have these conditional statements:</strong></p>
<ol>
<li dir="ltr" role="presentation">if Statement.</li>
<li dir="ltr" role="presentation">if-else Statement</li>
<li dir="ltr" role="presentation">If-elseif-else Statement</li>
<li dir="ltr" role="presentation">Switch statement</li>
</ol>
<p><strong>&nbsp;</strong></p>
<h3>1. if Statement</h3>
<p>This statement executes the block of code inside the if statement if the expression is evaluated as True.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = "22";
if ($x < "20") {
echo "Hello World!";
}
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">2. if-else Statement</h3>
<p dir="ltr" role="presentation">This statement executes the block of code inside the if statement if the expression is evaluated as True and executes the block of code inside the else statement if the expression is evaluated as False.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = "22";
if ($x < "20") {
echo "Less than 20";
} else {
echo "Greater than 20";
}
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">3. If-else-if-else</h3>
<p dir="ltr" role="presentation">This statement executes different expressions for more than two conditions.</p>
<p dir="ltr"><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = "22";
if ($x == "22") {
echo "correct guess";
} else if ($x < "22") {
echo "Less than 22";
} else {
echo "Greater than 22";
}
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">4. Switch Statement</h3>
<p dir="ltr" role="presentation">This statement allows us to execute different blocks of code based on different conditions. Rather than using if-elseif-if, we can use the switch statement to make our program.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$i = "2";
switch ($i) {
case 0:
  echo "i equals 0";
  break;
case 1:
  echo "i equals 1";
  break;
case 2:
  echo "i equals 2";
  break;
default:
 echo "i is not equal to 0, 1 or 2";
}
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p></div>




</div>
<div class="tabPanel5">

<div><h1 class="top">PHP Iterative Statements</h1></div>
<div ><p dir="ltr">Iterative statements are used to run same block of code over and over again for a certain number of times.&nbsp;</p>
<p dir="ltr"><strong>In PHP, we have the following loops:</strong></p>
<ol>
<li dir="ltr" role="presentation">while Loop</li>
<li dir="ltr" role="presentation">do-while Loop</li>
<li dir="ltr" role="presentation"> for Loop </li>
<li dir="ltr" role="presentation">foreach loop</li>
</ol>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">1. While Loop</h3>
<p dir="ltr" role="presentation">The While loop in PHP is used when we need to execute a block of code again and again based on a given condition. If the condition never becomes false, the while loop keeps getting executed. Such a loop is known as an infinite loop.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x = 1;
while($x <= 10) {
echo "The number is: $x <br>";
$x++;
}
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p><strong>&nbsp;</strong></p>
<h3 dir="ltr" role="presentation">2. Do-While Loop</h3>
<p dir="ltr" role="presentation">The do-while loop is similar to a while loop except that it is guaranteed to execute at least once. After executing a part of a program for once, the rest of the code gets executed based on a given boolean condition.</p>
<p dir="ltr"><strong>Example:</strong></p>



<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
$x =10;
do {
echo "The number is: $x <br>";
$x++;
} while ($x <= 9);
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>



<h3 dir="ltr" role="presentation">3. For Loop</h3>
<p dir="ltr" role="presentation">The for loop is used to iterate a block of code multiple times.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
for ($x = 0; $x <= 10; $x++) {
echo "The number is: $x <br>";
}
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3 dir="ltr" role="presentation">4. Foreach loop</h3>
<p dir="ltr" role="presentation">The foreach loop in PHP can be used to access the array indexes in PHP. It only works on arrays and objects.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
echo "Welcome to the world of foreach loops <br>";
$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");
foreach ($arr as  $value) {
echo "$value <br>";
}
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>&nbsp;</p></div>


<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr">The scope of the variable is the area within which the variable has been created. Based on this a variable can either have a local scope or a global scope or a static scope in PHP.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Global Variable:</h3>
<p dir="ltr">A variable which was created in the main body of the code and that can be accessed anywhere in the program is called Global Variable. Global variables can be directly accessed or used in or outside of a function with GLOBAL keyword before variable. However, we can also call them without the global keyword.&nbsp;</p>
<p dir="ltr"><strong>For Example:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
$name = "kishan Bhai";        //Global Variable  
function global_var()  
{  
  global $name;  
  echo "Variable inside the function: ". $name;  
  echo "</br>";  
}  
global_var();  
echo "Variable outside the function: ". $name;  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p dir="ltr">Output:</p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<xmp>
Variable inside the function: Kishan Bhai
Variable outside the function: Kishan Bhai
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3 dir="ltr">Local Variable:</h3>
<p dir="ltr">A local variable is created within a function and can be only used inside the function. This means that these variables cannot be accessed outside the function, as they have local scope.</p>
<p dir="ltr"><strong>For Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
function mytest() 
{  
  $capital = "Delhi";  
  echo "Capital of India is: " .$capital;  
}  
mytest(); //Calling the function
//using $capital outside the function will generate an error  
echo $capital;  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p dir="ltr">Output:&nbsp;</p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<xmp>
Capital of India is: Delhi                                               
Notice: Undefined variable: capital in D:\xampp\htdocs\program\var.php on line 28

</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3 dir="ltr">Static Variable:</h3>
<p dir="ltr">PHP has a feature that deletes the variable once it has finished execution and frees the memory. When we need a local variable which can store its value even after the execution, we use the static keyword before it and the variable is called static variable.&nbsp;</p>
<p dir="ltr">These variables only exist in a local function and do not get deleted after the execution has been completed.&nbsp;</p>
<p dir="ltr"><strong>For Example:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
function static_var()  
{  
  static $num1 = 3;    //static variable  
  $num2 = 6;          //Non-static variable  
  //increment in non-static variable which will increment its value to 7
  $num1++;  
  //increment in static variable which will increment its value to 4 after first execution and 5 after second execution
  $num2++;  
  echo "Static: " .$num1 ."</br>";  
  echo "Non-static: " .$num2 ."</br>";  
}  

//first function call  
static_var();  

//second function call  
static_var();  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>&nbsp;</p></div>





</div>
<div class="tabPanel5">

<div><h1 class="top">Function Basics</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr">Function arguments are variables of some supported data type that are processed within the body of the function. It can take input as an argument and return value.&nbsp;</p>
<p dir="ltr">PHP has more than 1000 built-in functions, and in addition, you can also create your own functions.&nbsp;</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Advantages:</h3>
<ol>
<li dir="ltr" role="presentation">Functions reduce the complexity of a program and give it a modular structure.</li>
<li dir="ltr" role="presentation">A function can be defined only once and called many times.&nbsp;</li>
<li dir="ltr" role="presentation">It saves a lot of code writing because you don't need to write the same logic multiple times, you can write the logic once and reuse it.&nbsp;</li>
</ol>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Built-in Functions: </strong>PHP has thousands of built-in functions. For a complete reference and examples, you can go to this link&lt;<a href="https://www.php.net/manual/en/funcref.php">https://www.php.net/manual/en/funcref.php</a>&gt;.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>User Defined Functions:</strong> Apart from built-in functions, We can also create our own functions and call them easily.&nbsp;</p>
<p dir="ltr">A user-defined function looks something like this:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php 
Function functionname(){
//Code
}
functionname(); // Calling Function
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p dir="ltr"><strong>Note: </strong>A function name should only start with letters and underscore only. It can’t start with numbers and special symbols.&nbsp;</p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php
function helloMsg() {
echo "Hello world!";
}
helloMsg(); // call the function
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p></div>








</div>
<div class="tabPanel5">
<div><h1 class="top">Function Arguments</h1></div>

<div ><p dir="ltr"><strong>Function Arguments: </strong>Argument is just like a variable which can be used to pass through information to functions.&nbsp;</p>
<p dir="ltr">PHP supports Call by Value, Call by Reference, Default Argument Values and Variable-length argument.</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr" role="presentation">1. Call by Value</h3>
<p dir="ltr" role="presentation">In Call by Value, the value of a variable is passed directly. This means if the value of a variable within the function is changed, it does not get changed outside of the function.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
function incr($i)  
{  
$i++;  
}  
$i = 5;  
incr($i);  
echo $i;  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p dir="ltr">Output:&nbsp;</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" style="line-height:0.2;" >
<xmp>
5
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3 dir="ltr" role="presentation">2. Call by Reference</h3>
<p dir="ltr" role="presentation">In call by reference, the address of a variable (their memory location) is passed. In the case of call by reference, we prepend an ampersand (&amp;) to the argument name in the function definition. Any change in variable value within a function can reflect the change in the original value of a variable.</p>
<p dir="ltr"><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
function incre(&$i)  
{  
$i++;  
}  
$i = 5;  
incre($i);  
echo $i;  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p dir="ltr">Output:&nbsp;</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" style="line-height:0.2;" >
<xmp>
6
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3 dir="ltr" role="presentation">3. Default Argument Values</h3>
<p dir="ltr" role="presentation">If we call a function without arguments, then PHP function takes the default value as an argument.&nbsp;</p>
<p dir="ltr"><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<?php echo htmlspecialchars('
<?php  
function Hello($name="Aakash"){  
echo "Hello $name <br>";  
}  
Hello("Rohan");  
Hello();//passing no value  
Hello("Lovish");  
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p dir="ltr">Output:&nbsp;</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php" >
<xmp>
Hello Rohan
Hello Aakash
Hello Lovish 
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p></div>
</div>

<div><h1 class="top" style="font-size:26px; margin-top:50px;">PHP Overview</h1></div>

<div><p dir="ltr">PHP is a server-side scripting language, which is used to manage dynamic web pages, databases and build websites with features like session tracking and e-commerce. On a day of 1995, Rasmus Lerdorf unleashed the first version of “Hypertext Preprocessor” also known as the PHP language. It is also integrated with several popular databases like MySQL, PostgreSQL, Microsoft SQL Server, Oracle etc.</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Uses of PHP</h3>
<p dir="ltr">PHP can perform several system functions like opening files, CRUD operations on data stores, general-purpose scripting, etc. Besides system operations, there are also other uses like</p>
<ol style="list-style-type: lower-alpha;">
<li dir="ltr">Handling Forms: PHP can handle form operations. It can gather data, save data to a file and send data through emails.</li>
<li dir="ltr">Database Operations: PHP can also create, read, update and delete elements in your database.</li>
<li dir="ltr"> Encryption: It can perform advanced encryption and encrypt data for you.</li>
<li dir="ltr">Dynamic Page Content: It can generate dynamic page content.</li>
</ol>
<p>&nbsp;</p>
<h3 dir="ltr">Basic Syntax PHP</h3>
<p dir="ltr">A PHP script can be written anywhere inside the HTML document. A PHP script starts with &lt;?php tag and ends with ?&gt;. We can write our logic inside this tag and it will be executed accordingly.</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('
<?php
// PHP code goes here
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3>Displaying output in php</h3>
<p>In php,Output is displayed on the browser using echo as follows:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('
<?php
echo "hello";
?>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3 dir="ltr">Hello World</h3>
<p dir="ltr">A basic PHP Hello World program looks something like this. We will use a built-in PHP function “echo” to output the text “Hello World!” on our webpage.</p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-php">
<?php echo htmlspecialchars('
<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page</h1>
<?php
echo "Hello World!";
?>
</body>
</html>', ENT_QUOTES);
?>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p>

</div>

</div>
</div>
