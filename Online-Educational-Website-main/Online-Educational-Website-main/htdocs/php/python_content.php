<div class="tabPanel" id="Python">

<div class="wrapper4" id="item-containerpy">
   <input type="checkbox" id="btn5" hidden>
<label for="btn5" class="menu-btn"><img src="img/sidebar.png"></label>
 <nav  class="text-left bg-purple-100 md pl mdblock sidebar " aria-label="Breadcrumb" id=sidebar" style="background-color: #ff7200; overflow: scroll; ">
<div class="title">INTRODUCTION</div>
<ul class="left-nav">
<div><li onclick="PyshowPanel(0,'#f5f6fa')" aria-current="page"> <a id="btn1">Python Overview</a> </li> </div>
<div><li onclick="PyshowPanel(1,'#f5f6fa')"aria-current="page"id="Javascript"><a>Installation & Getting Started</a></li></div>
<div><li onclick="PyshowPanel(2,'#f5f6fa')"aria-current="page" id="rectjs"><a>What is Syntax?</a></li></div>
<div><li onclick="PyshowPanel(3,'#f5f6fa')"aria-current="page" id="c"><a>Python Comments</a></li></div>
<div><li onclick="PyshowPanel(4,'#f5f6fa')"aria-current="page" id="c++"><a>Python Variables</a></li></div>
<div class="title">Data Types & Operators</div>
<div><li onclick="PyshowPanel(5,'#f5f6fa')"aria-current="page" id="c"><a>Data Types</a></li></div>
<div><li onclick="PyshowPanel(6,'#f5f6fa')"aria-current="page" id="c"><a>Python Numbers</a></li></div>
<div><li onclick="PyshowPanel(7,'#f5f6fa')"aria-current="page" id="c++"><a>Data Conversion</a></li></div>
<div><li onclick="PyshowPanel(8,'#f5f6fa')"aria-current="page" id="c++"><a>Python Tuples</a></li></div>


</ul>
</nav>

<div class="pe">
<button class="pre" type="presdpy" value="prerpy" name="presdpy" id="prev-buttonpy">Previous</button>
<button class="pre next" type="nextsdpy" value="nextrpy" name="nextsdpy" id="next-buttonpy">Next</button>
</div>

<div class="tabPanel6">
<div><h1 class="top"style="font-size:26px;">Python Overview</h1></div>
<h2>What is Python</h2>
<ul>
<li class="MsoNormal">Python is a dynamically typed, General Purpose Programming Language that supports an object-oriented programming approach as well as a functional programming approach.</li>
<li class="MsoNormal">Python is also an interpreted and high-level programming language.</li>
<li class="MsoNormal">It was created by Guido Van Rossum in 1989.</li>
</ul>
<p>&nbsp;</p>
<h2>Features of Python</h2>
<ul>
<li>Python is simple and easy to understand.</li>
<li>It is Interpreted and platform-independent which makes debugging very easy.</li>
<li>Python is an open-source programming language.</li>
<li>Python provides very big library support. Some of the popular libraries include NumPy, Tensorflow, Selenium, OpenCV, etc.</li>
<li>It is possible to integrate other programming languages within python.</li>
</ul>
<p>&nbsp;</p>
<h2>What is Python used for</h2>
<ul>
<li>Python is used in Data Visualization to create plots and graphical representations.</li>
<li>Python helps in Data Analytics to analyze and understand raw data for insights and trends.</li>
<li>It is used in AI and Machine Learning to simulate human behavior and to learn from past data without hard coding.</li>
<li>It is used to create web applications.</li>
<li>It can be used to handle databases.</li>
<li>It is used in business and accounting to perform complex mathematical operations along with quantitative and qualitative analysis.</li>
</ul>
</div>

<div class="tabPanel6">
<div><h1 class="top">Installation &amp; Getting Started</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><h2>Steps to Install Python:</h2>
<ol style="list-style-type: lower-alpha;">
<li>Visit the official python website: <a href="https://www.python.org/">https://www.python.org/</a></li>
<li>Download the executable file based on your Operating System and version specifications.</li>
<li>Run the executable file and complete the installation process.</li>
</ol>
<h4>Version:</h4>
<p>After installation check the version of python by typing following command: ‘python --version’.</p>
<p>&nbsp;</p>
<h2>Starting Python:</h2>
<p>Open Python IDE or any other text editor of your preferred choice. Let’s understand python code execution with the simplest print statement. Type the following in the IDE:&nbsp;</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
print("Hello World !!!")
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Now save the file with a .py extension and Run it. You will get the following output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
Hello World !!!
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h2>Installing Packages:</h2>
<p>To install packages in Python, we use the <strong>pip </strong>command.&nbsp;<br>e.g. pip install "Package Name"</p>
<p>Following command installs pandas package in Python</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
pip install pandas
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p><br>We will learn more about the pip command in the chapter dedicated to pip.</p>
<p>&nbsp;</p>

<p>&nbsp;</p></div>

</div>
<div class="tabPanel6">
<div><h1 class="top">What is Syntax?</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p>In simplest words, <em>Syntax is the arrangement of words and phrases to create well-formed sentences in a language</em>. In the case of a computer language, the syntax is the structural arrangement of comments, variables, numbers, operators, statements, loops, functions, classes, objects, etc. which helps us understand the meaning or semantics of a computer language.</p>
<p>&nbsp;</p>
<p>For E.g. a ‘comment’ is used to explain the functioning of a block of code. It starts with a ‘#’.</p>
<p>More on comments in the comments chapter.</p>
<p>&nbsp;</p>
<p>For E.g. a block of code is identified by an ‘indentation’. Have a look at the following code, here print(i) is said to be indented with respect to the link above it. In simple words, indentation is the addition of spaces before the line "print(i)"</p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
for i in range(5):
print(i)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

</div>
</div>
<div class="tabPanel6">
<div><h1 class="top">Python Comments</h1></div>
<div><p>A comment is a part of the coding file that the programmer does not want to execute, rather the programmer uses it to either explain a block of code or to avoid the execution of a specific part of code while testing.</p>
<p>&nbsp;</p>
<h2>Single-Line Comments:</h2>
<p>To write a comment just add a ‘#’ at the start of the line.</p>
<p><strong>Example 1:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" >
<xmp>
#This is a 'Single-Line Comment'
print("This is a print statement.")
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
This is a print statement. 
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p><strong>Example 2:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
print("Hello World !!!") #Printing Hello World
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
Hello World !!!
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p><strong>Example 3:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
print("Python Program")
#print("Python Program")
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
Python Program
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h2>Multi-Line Comments:</h2>
<p>To write multi-line comments you can use ‘#’ at each line or you can use the multiline string.</p>
<p><strong>Example 1: </strong>The use of ‘#’.</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
#It will execute a block of code if a specified condition is true.
#If the codition is false than it will execute another block of code.
p = 7
if (p > 5):
print("p is greater than 5.")
else:
print("p is not greater than 5.")
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
p is greater than 5.
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p><strong>Example 2: </strong>The use of multiline string.</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
"""This is an if-else statement.
It will execute a block of code if a specified condition is true.
If the condition is false then it will execute another block of code."""
p = 7
if (p > 5):
print("p is greater than 5.")
else:
print("p is not greater than 5.")
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
p is greater than 5.
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p></div>
</div>
<div class="tabPanel6">
<div><h1 class="top">Python Variables</h1></div>
<div ><p>Variables are containers that store information that can be manipulated and referenced later by the programmer within the code.</p>
<p>In python, the programmer does not need to declare the variable type explicitly, we just need to assign the value to the variable.</p>
<p><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
name = "Abhishek"   #type str
age = 20            #type int
passed = True       #type bool
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>It is always advisable to keep variable names descriptive and to follow a set of conventions while creating variables:</p>
<ul>
<li>Variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
<li>Variable name must start with a letter or the underscore character.</li>
<li>Variables are case sensitive.</li>
<li>Variable name cannot start with a number.</li>
</ul>
<p><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
Color = "yellow"    #valid variable name
cOlor = "red"       #valid variable name
_color = "blue"     #valid variable name

5color = "green"    #invalid variable name
$color = "orange"   #invalid variable name
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Sometimes, a multi-word variable name can be difficult to read by the reader. To make it more readable, the programmer can do the following:</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
NameOfCity = "Mumbai"       #Pascal case
nameOfCity = "Berlin"       #Camel case
name_of_city = "Moscow"     #snake case
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h2>Scope of variable:</h2>
<p>The scope of the variable is the area within which the variable has been created. Based on this a variable can either have a local scope or a global scope.</p>
<h3>Local Variable:</h3>
<p>A local variable is created within a function and can be only used inside that function. Such a variable has a local scope.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
icecream = "Vanilla"    #global variable
def foods():
vegetable = "Potato"    #local variable
fruit = "Lichi"         #local variable
print(vegetable + " is a local variable value.")
print(icecream + " is a global variable value.")
print(fruit + " is a local variable value.")

foods()
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
Potato is a local variable value.
Vanilla is a global variable value.
Lichi is a local variable value.
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<h3>Global Variable:</h3>
<p>A global variable is created in the main body of the code and can be used anywhere within the code. Such a variable has a global scope.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" >
<xmp>
icecream = "Vanilla"    #global variable
def foods():
vegetable = "Potato"    #local variable
fruit = "Lichi"         #local variable
print(vegetable + " is a local variable value.")

foods()
print(icecream + " is a global variable value.")
print(fruit + " is a local variable value.")
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
Potato is a local variable value.
Vanilla is a global variable value.
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p></div>
</div>
<div class="tabPanel6">
<div ><h1 class="top">Data Types</h1></div>
<div ><p>Data type specifies the type of value a variable requires to do various operations without causing an error. By default, python provides the following built-in data types:</p>
<h3>Numeric data: int, float, complex</h3>
<p>int: 3, -8, 0</p>
<p>float: 7.349, -9.0, 0.0000001</p>
<p>complex: 6 + 2i</p>
<p>more on numeric data types in the number chapter.</p>
<p>&nbsp;</p>
<h3>Text data: str</h3>
<p>str: “Hello World!!!”, “Python Programming”</p>
<p>&nbsp;</p>
<h3>Boolean data:</h3>
<p>Boolean data consists of values True or False.</p>
<p>&nbsp;</p>
<h3>Sequenced data: list, tuple, range</h3>
<p><strong>list:</strong> A list is an ordered collection of data with elements separated by a comma and enclosed within square brackets. Lists are mutable and can be modified after creation.</p>
<p><strong>Example:</strong></p>


<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
list1 = [8, 2.3, [-4, 5], ["apple", "banana"]]
print(list1)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
[8, 2.3, [-4, 5], ['apple', 'banana']]
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p><strong>tuple: </strong>A tuple is an ordered collection of data with elements separated by a comma and enclosed within parentheses. Tuples are immutable and can not be modified after creation.&nbsp;</p>
<p><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
tuple1 = (("parrot", "sparrow"), ("Lion", "Tiger"))
print(tuple1)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python"style="line-height:0.2;">
<xmp>
(('parrot', 'sparrow'), ('Lion', 'Tiger'))
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p><strong>range:</strong> returns a sequence of numbers as specified by the user. If not specified by the user then it starts from 0 by default and increments by 1.</p>
<p><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
sequence1 = range(4,14,2)
for i in sequence1:
print(i)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
4
6
8
10
12
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3>Mapped data: dict</h3>
<p><strong>dict: </strong>a dictionary is an unordered collection of data containing a key:value pair. The key:value pairs are enclosed within curly brackets.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
dict1 = {"name":"Sakshi", "age":20, "canVote":True}
print(dict1)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
{'name': 'Sakshi', 'age': 20, 'canVote': True}
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3>Binary data: bytes, bytearray, memoryview</h3>
<p><strong>bytes:</strong> bytes() function is used to convert objects into byte objects, or create empty bytes object of the specified size.</p>
<p><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
#Converting string to bytes
str1 = "This is a string"
arr1 = bytes(str1, 'utf-8')
print(arr1)
arr2 = bytes(str1, 'utf-16')
print(arr2)

#Creating bytes of given size
bytestr = bytes(4)
print(bytestr)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>Output:</p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
b'This is a string'
b'\xff\xfeT\x00h\x00i\x00s\x00 \x00i\x00s\x00 \x00a\x00 \x00s\x00t\x00r\x00i   \x00n\x00g\x00'
b'\x00\x00\x00\x00'
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p><strong>memoryview:</strong> memoryview() function returns a memory view object from a specified object.</p>
<p><strong>Example:</strong></p>

<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
str1 = bytes("home", "utf-8")
memoryviewstr = memoryview(str1)
print(list(memoryviewstr[0:]))
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
[104, 111, 109, 101]
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<h3>Set data:</h3>
<p>Set is an unordered collection of elements in which no element is repeated. The elements of sets are separated by a comma and contained within curly braces.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
set1 = {4, -5, 8, 3, 2.9}
print(set1)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
{2.9, 3, 4, 8, -5}
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<h3>None:</h3>
<p>None is used to define a null value. When we assign a None value to a variable, we are essentially resetting it to its original empty state which is not the same as zero, an empty string or a False value.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
state = None
print(type(state))
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
<class 'NoneType'>
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>




</div>
<div class="tabPanel6">

<div ><h1 class="top">Python Numbers</h1></div>
<div ><p>In Python, numbers are of the following data types:</p>
<ul>
<li>int</li>
<li>float</li>
<li>complex</li>
</ul>
<p>&nbsp;</p>
<h3>int</h3>
<p>int is a positive or a negative integer of any length. int should not be a decimal or a fraction.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
int1 = -2345698
int2 = 0
int3 = 100548

print(type(int1))
print(type(int2))
print(type(int3))
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
<class 'int'>
<class 'int'>
<class 'int'>
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3>Float</h3>
<p>A float is a positive or a negative decimal number. It can be an exponential number or a fraction.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
flt1 = -8.35245     #decimal number
flt2 = 0.000001     #decimal number
flt3 = 2.6E44       #exponential number
flt4 = -6.022e23    #exponential number

print(type(flt1))
print(type(flt2))
print(type(flt3))
print(type(flt4))
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
<class 'float'>
<class 'float'>
<class 'float'>
<class 'float'>
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p></div>




</div>
<div class="tabPanel6">
<div><h1 class="top">Data Conversion</h1></div>
<div>
<ul>
<li>The process of converting numeric data from one type to another is called as type conversion.</li>
<li>To convert from integer to float, we use float() function.</li>
</ul>
<p>&nbsp;</p>
<p>To convert from integer to complex, we use the complex() function.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
num1 = -25
num2 = float(num1)
num3 = complex(num1)

print(num2)
print(num3)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
-25.0
(-25+0j)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<ul>
<li>To convert from float to integer, we use int() function. int() function rounds of the given number to the nearest integer value.</li>
</ul>
<p>&nbsp;</p>
<p>To convert from float to complex, we use the complex() function.</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
num1 = 8.4
num2 = int(num1)
num3 = complex(num1)

print(num2)
print(num3)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
8
(8.4+0j)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p><strong>Note: </strong>complex numbers cannot be converted to integer or float.</p>
<p>&nbsp;</p></div>


</div>
<div class="tabPanel6">
<div><h1 class="top">Python Tuples<!-- --></h1></div>
<div ><p>Tuples are ordered collection of data items. They store multiple items in a single variable. Tuple items are separated by commas and enclosed within round brackets (). Tuples are unchangeable meaning we can not alter them after creation.</p>
<p>&nbsp;</p>
<p><strong>Example 1:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
tuple1 = (1,2,2,3,5,4,6)
tuple2 = ("Red", "Green", "Blue")
print(tuple1)
print(tuple2)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
(1, 2, 2, 3, 5, 4, 6)
('Red', 'Green', 'Blue')
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Example 2:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
details = ("Abhijeet", 18, "FYBScIT", 9.8)
print(details)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" style="line-height:0.2;">
<xmp>
('Abhijeet', 18, 'FYBScIT', 9.8)
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>

</div>
<div class="tabPanel6">

<div ><h1 class="top">Type Casting<!-- --></h1></div>
<div ><p>Similar to type conversion, type casting is done when we want to specify a type on a variable.&nbsp;</p>
<p><strong>Example:</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python">
<xmp>
str1 = "7"          
str2 = "3.142"
str3 = "13"
num1 = 29
num2 = 6.67

print(int(str1))
print(float(str2))
print(float(str3))
print(str(num1))
print(str(num2))
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>Output:</p>
<p>&nbsp;</p>
<div class="code-snippet">
<pre style="line-height:0.2;">
<code class="language-python" >
<xmp>
7
3.142
13.0
29
6.67
</xmp>
</code>
</pre>
<button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p></div>

</div>
<div><h1 class="top" style="font-size:26px; margin-top:50px;">Python Overview</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><h2>What is Python</h2>
<ul>
<li class="MsoNormal">Python is a dynamically typed, General Purpose Programming Language that supports an object-oriented programming approach as well as a functional programming approach.</li>
<li class="MsoNormal">Python is also an interpreted and high-level programming language.</li>
<li class="MsoNormal">It was created by Guido Van Rossum in 1989.</li>
</ul>
<p>&nbsp;</p>
<h2>Features of Python</h2>
<ul>
<li>Python is simple and easy to understand.</li>
<li>It is Interpreted and platform-independent which makes debugging very easy.</li>
<li>Python is an open-source programming language.</li>
<li>Python provides very big library support. Some of the popular libraries include NumPy, Tensorflow, Selenium, OpenCV, etc.</li>
<li>It is possible to integrate other programming languages within python.</li>
</ul>
<p>&nbsp;</p>
<h2>What is Python used for</h2>
<ul>
<li>Python is used in Data Visualization to create plots and graphical representations.</li>
<li>Python helps in Data Analytics to analyze and understand raw data for insights and trends.</li>
<li>It is used in AI and Machine Learning to simulate human behavior and to learn from past data without hard coding.</li>
<li>It is used to create web applications.</li>
<li>It can be used to handle databases.</li>
<li>It is used in business and accounting to perform complex mathematical operations along with quantitative and qualitative analysis.</li>
</ul></div>
</div>
</div>

</div>
