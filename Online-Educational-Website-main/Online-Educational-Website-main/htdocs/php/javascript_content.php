<div class="tabPanel" id="Javascript" >
    
      <div class="wrapper2" id="item-containerj">
      <input type="checkbox" id="btn3" hidden>
      <label for="btn3" class="menu-btn"><img src="../img/sidebar.png"></label>
       <nav  class="text-left bg-purple-100 md pl mdblock sidebar " aria-label="Breadcrumb" id=sidebar" style="background-color: #ff7200; overflow: scroll; ">
      <div class="title">INTRODUCTION</div>
      <ul class="left-nav">
    <div><li onclick="JshowPanel(0,'#f5f6fa')"aria-current="page"><a id="btn1">JS Introduction</a></li></div>
    <div><li onclick="JshowPanel(1,'#f5f6fa')"aria-current="page"><a>JS Execution</a></li></div>
    <div><li onclick="JshowPanel(2,'#f5f6fa')"aria-current="page"id="Javascript"><a>Node.js Installation</a></li></div>
<div class="title">JAVASCRIPT VARIABLES</div>
    <div><li onclick="JshowPanel(3,'#f5f6fa')"aria-current="page" id="rectjs"><a>What are Variables?</a></li></div>
    <div><li onclick="JshowPanel(4,'#f5f6fa')"aria-current="page" id="c"><a>Variable Naming Rules</a></li></div>
    <div><li onclick="JshowPanel(5,'#f5f6fa')"aria-current="page" id="c++"><a>var vs let vs const</a></li></div>
    <div><li onclick="JshowPanel(6,'#f5f6fa')"aria-current="page" id="c"><a>Primitives and Objects</a></li></div>
    <div><li onclick="JshowPanel(7,'#f5f6fa')"aria-current="page" id="c++"><a>Operators and Expressions</a></li></div>
<div class="title">JAVASCRIPT BASICS</div>   
 <div><li onclick="JshowPanel(8,'#f5f6fa')"aria-current="page" id="c"><a>If else conditionals</a></li></div>
    <div><li onclick="JshowPanel(9,'#f5f6fa')"aria-current="page" id="c++"><a>If else ladder</a></li></div>
    <div><li onclick="JshowPanel(10,'#f5f6fa')"aria-current="page" id="c"><a>Switch case</a></li></div>
<div class="title">JAVASCRIPT OBJECTS</div> 
    <div><li onclick="JshowPanel(11,'#f5f6fa')"aria-current="page" id="c++"><a>DOM & BOM</a></li></div>
    </ul>
     </nav>

<div class="pe">
 <button class="pre" type="presd" value="prer" name="presd" id="prev-buttonj">Previous</button>
 <button class="pre next" type="nextsd" value="nextr" name="nextsd" id="next-buttonj">Next</button>
</div>

<div class="tabPanel4">
 
<div><h1 class="top" style="font-size:26px;">What is Programming? <!-- --></h1></div>

<p>It is a way to talk to computers. A language like Hindi, English, or Bengali can be used to talk to a human but for computers, we need straightforward instructions.</p>
<p>Programming is the act of constructing a program, a set of precise instructions telling a computer what to do.</p>
<p>Programming is the process of designing, writing, testing, debugging, and maintaining the source code of computer programs. It involves the use of programming languages and various tools to create software programs that can be run on a computer or other devices.</p>
<p>&nbsp;</p>
<h3>What is ECMAScript?</h3>
<p>ECMAScript is a standard on which JavaScript is based!</p>
<p>It was created to ensure that different documents on JavaScript are talking about the same language.</p>
<p>&nbsp;</p>
<h3>ECMAScript Versions:&nbsp;</h3>
<p>Beginning in <strong>1997</strong>, JavaScript has evolved into many versions.</p>
<ul>
<li><strong>ECMAScript1</strong> or <strong>ES1</strong> was first released in <strong>1997</strong>.&nbsp;</li>
<li><strong>ECMAScript 2015</strong> also known as <strong>ES6</strong> was released in <strong>2015</strong> and a major revision to JavaScript was made.</li>
<li>The latest version of JavaScript will be <strong>ECMaScript2022 (ES13)</strong> in <strong>2022</strong>.</li>
</ul>
<h3>What is JavaScript?</h3>
<ul>
<li>JavaScript is a lightweight, OOP language.</li>
<li>It is a scripting language for web pages.</li>
<li>It is used to add interactivity and dynamic effects to web pages.</li>
<li><strong>“<span style="color: rgb(35, 111, 161);">.js</span>”</strong> is the extension.</li>
<li>Nowadays used in server-side development.</li>
<li>JS <strong>Frontend Frameworks:</strong> <span style="color: rgb(35, 111, 161);">React, Angular, Vue</span>.</li>
<li>JS <strong>Backend Frameworks</strong>: <span style="color: rgb(35, 111, 161);">Express, Node</span>.</li>
</ul>
<p>In this tutorial, we will learn JavaScript in depth</p>
<p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-size: 12.0pt;">&nbsp;</span></p>

</div>

<div class="tabPanel4">

<div><h3 class="top">Do we need to install Javascript?</h3></div>
<p>The answer is <strong>NO.&nbsp;</strong></p>
<p>JavaScript is present everywhere in browsers, on your phone, etc.</p>
<p>&nbsp;</p>
<h3>How to execute JavaScript?</h3>
<p>JavaScript can be executed right inside one’s browser. You can open the JS console and start writing JS there.</p>
<p>Another way to execute JS is a runtime like Node.js which can be installed and used to run JavaScript code.</p>
<p>Yet another way to execute JavaScript is by inserting it inside the &lt;script&gt; tag of an HTML document.</p>
<h3>What is JavaScript?</h3>
<p>JavaScript is a programming language that is commonly used in web development. It is a client-side language, which means that it is executed by the user's web browser rather than the web server. This allows JavaScript to interact with the user and create dynamic, interactive web pages.</p>
<p>JavaScript is often used in combination with HTML and CSS to create web pages that are more interactive and engaging. It can be used to create all sorts of effects, such as drop-down menus, image sliders, and pop-up windows.</p>
<h3>Getting Started with JavaScript</h3>
<p>To start using JavaScript, you'll need a text editor and a web browser. There are many text editors available, such as Sublime Text, Atom, and Visual Studio Code, which are all popular choices among developers.</p>
<p>Once you have a text editor set up, you can start writing JavaScript code. To do this, you'll need to create a new file with a .js extension and then type your code into the file. You can then save the file and open it in your web browser to see the results.</p>

</div>

<div class="tabPanel4">

 <div><h3 class="top">Node.js Installation</h3></div>
<p>Node.js is an open-source, cross-platform JavaScript runtime environment that executes JavaScript code outside of a web browser. It is commonly used for building server-side applications, command-line tools, and other types of scalable network programs.</p>
<p>To install Node.js, you can follow these steps:</p>
<ol>
<li>
<p>Download the installer: Go to the official Node.js website (<a href="https://nodejs.org/" target="_new">https://nodejs.org/</a>) and click the "Download" button to download the latest version of the Node.js installer.</p>
</li>
<li>
<p>Run the installer: Double-click the downloaded installer file to start the installation process. Follow the prompts to complete the installation.</p>
</li>
<li>
<p>Verify the installation: To verify that Node.js has been installed successfully, open a terminal or command prompt and type the following command:</p>
</li>
</ol>
<p>Run the following command:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css" style="line-height:0.2;">
 <xmp>
    node -v
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>This should output the version number of Node.js that you have installed.</p>
<p>That's it! You should now have Node.js installed on your system and be able to run JavaScript code using the "node" command.</p>
<p>I hope this helps. Let me know if you have any questions.</p>
<h3>Script using Node.js</h3>
<p>To run JavaScript with Visual Studio Code (VS Code), you will need to follow these steps:</p>
<ol>
<li>
<p>Install VS Code: If you don't already have it, you can download and install VS Code from the official website (<a href="https://code.visualstudio.com/" target="_new">https://code.visualstudio.com/</a>).</p>
</li>
<li>
<p>Create a new JavaScript file: Open VS Code and create a new file with a .js extension. You can do this by going to File &gt; New File or by using the shortcut Ctrl + N.</p>
</li>
<li>
<p>Write your JavaScript code: Type your JavaScript code into the file and save it.</p>
</li>
<li>
<p>Open the Command Palette: You can open the Command Palette by pressing Ctrl + Shift + P or by going to View &gt; Command Palette.</p>
</li>
<li>
<p>Run the JavaScript file: In the Command Palette, type "Run JavaScript" and select "Run JavaScript file in the terminal" from the list of options. This will open a terminal window and run your JavaScript file.</p>
</li>
<li>
<p>View the output: The output of your JavaScript code will be displayed in the terminal window.</p>
</li>
</ol>
<p>Alternatively, you can also run JavaScript code directly in the terminal by using a command-line interpreter such as Node.js. To do this, you will need to install Node.js and then run your JavaScript file using the "node" command, followed by the name of the file. For example:</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css" style="line-height:0.2;">
 <xmp>
    node myfile.js
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


</div>

<div class="tabPanel4">
<div><h1 class="top">What are Variables?<!-- --></h1></div>

  <p>In JavaScript, variables are used to store data. They are an essential part of any programming language, as they allow you to store, retrieve, and manipulate data in your programs.</p>
<p>There are a few different ways to declare variables in JavaScript, each with its own syntax and rules. In this blog post, we'll take a look at the different types of variables available in JavaScript and how to use them.</p>
<h3>Declaring Variables</h3>
<p>To declare a variable in JavaScript, you use the "var" keyword followed by the name of the variable. For example:</p>


<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css" style="line-height:0.2;">
 <xmp>
     var x;
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>This declares a variable called "x" but does not assign any value to it. You can also assign a value to a variable when you declare it, like this:</p>
<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript" style="line-height:0.2;">
 <xmp>
     var x=10;
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>In JavaScript, you can also use the "let" and "const" keywords to declare variables. The "let" keyword is used to declare a variable that can be reassigned later, while the "const" keyword is used to declare a variable that cannot be reassigned. For example:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
     let y = 20;
     const z = 30;
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>In this example, "y" is a variable that can be reassigned, while "z" is a constant that cannot be reassigned.</p>
<h3>Data Types</h3>
<p>In JavaScript, there are several data types that you can use to store different types of data. Some common data types include:</p>
<ul>
<li>Numbers (e.g. 10, 3.14)</li>
<li>Strings (e.g. "hello", 'world')</li>
<li>Booleans (e.g. true, false)</li>
<li>Arrays (e.g. [1, 2, 3])</li>
<li>Objects (e.g. { name: "John", age: 30 })</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>



<div class="tabPanel4">

<div><h1 class="top">Variable Naming Rules</h1></div>

<p>JavaScript is a dynamically-typed language, which means that you don't have to specify the data type of a variable when you declare it. The data type of a variable is determined by the value that is assigned to it. For example:</p>


<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   var x = 10; // x is a number
   var y = "hello"; // y is a string
   var z = [1, 2, 3]; // z is an array
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<h3>Variable Naming Rules</h3>
<p>There are a few rules that you need to follow when naming variables in JavaScript:</p>
<ul>
<li>Variable names can only contain letters, digits, underscores, and dollar signs.</li>
<li>Variable names cannot start with a digit.</li>
<li>Variable names are case-sensitive.</li>
</ul>
<p>It is also a good practice to use descriptive and meaningful names for your variables, as this makes your code easier to read and understand.</p>
<h3>Using Variables</h3>
<p>Once you have declared a variable, you can use it to store and retrieve data in your program. For example:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    var x = 10;
    console.log(x); // prints 10

    x = "hello";
    console.log(x); // prints "hello"
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>You can also perform various operations on variables, such as mathematical calculations, string concatenation, and more. For example:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   var x = 10;
   var y = 20;
   var z = x + y; // z is 30

  var str1 = "hello";
  var str2 = "world";
  var str3 = str1 + " " + str2; // str3 is "hello world"
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

</div>
<div class="tabPanel4">
<div><h1 class="top">var vs let vs const<!-- --></h1></div>
<div ><p>In JavaScript, there are three ways to declare variables: var, let, and const. Each of these keywords has its own rules and uses, and it is important to understand the differences between them in order to write effective and maintainable code.</p>
<h3>var</h3>
<p>The "var" keyword is used to declare variables in JavaScript. It was introduced in the early days of the language and was the only way to declare variables for a long time. However, the "var" keyword has some limitations and has been largely replaced by the "let" and "const" keywords in modern JavaScript.</p>
<p>One of the main issues with "var" is that it is function-scoped, rather than block-scoped. This means that variables declared with "var" are accessible within the entire function in which they are declared, rather than just within the block of code in which they appear. This can lead to unexpected behavior and can make it difficult to reason about the scope of variables in your code.</p>
<h3>let</h3>
<p>The "let" keyword was introduced in ECMAScript 6 (also known as ES6) and is used to declare variables that can be reassigned later. "let" variables are block-scoped, which means that they are only accessible within the block of code in which they are declared. This makes them more predictable and easier to reason about than "var" variables.</p>
<p>For example:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   if (x > 10) {
      let y = 20;
      console.log(y); // 20
   }
   console.log(y); // ReferenceError: y is not defined
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>



<p>In this example, the "y" variable is declared with the "let" keyword and is only accessible within the block of the if statement. If you try to access it outside of the block, you will get a "ReferenceError" because "y" is not defined in that scope.</p>
<h3>const</h3>
<p>The "const" keyword was also introduced in ES6 and is used to declare variables that cannot be reassigned later. "const" variables are also block-scoped and behave similarly to "let" variables in that respect. However, the main difference is that "const" variables must be initialized with a value when they are declared and cannot be reassigned later.</p>
<p>For example:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   const PI = 3.14;
   PI = 3.14159; // TypeError: Assignment to constant variable.
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>In this example, the "PI" variable is declared with the "const" keyword and is assigned the value of 3.14. If you try to reassign a new value to "PI," you will get a "TypeError" because "PI" is a constant variable and cannot be changed.</p>
<h3>Conclusion</h3>
<p>In summary, "var" is an old way of declaring variables that is function-scoped and can be reassigned. "let" is a newer way of declaring variables that is block-scoped and can be reassigned. "const" is a newer way of declaring variables that is block-scoped and cannot be reassigned. In modern JavaScript, it is generally recommended to use "let" and "const" instead of "var," as they provide better scoping and make it easier to write maintainable code.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>








</div>
<div class="tabPanel4">
<div ><h1 class="top">Primitives and Objects</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p>In JavaScript, there are two main types of data: primitives and objects.</p>
<h3>Primitives</h3>
<p>Primitives are the simplest and most basic data types in JavaScript. They include:</p>
<ul>
<li>Numbers (e.g. 10, 3.14)</li>
<li>Strings (e.g. "hello", 'world')</li>
<li>Booleans (e.g. true, false)</li>
<li>Null (a special value that represents an absence of value)</li>
<li>Undefined (a special value that represents an uninitialized variable)</li>
</ul>
<p>Primitives are immutable, which means that once they are created, they cannot be changed. For example:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   let x = 10;
   x = 20; // x is now 20
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>In this example, the value of "x" is changed from 10 to 20. However, this does not change the value of the primitive itself, but rather creates a new primitive with the value of 20.</p>
<h3>Objects</h3>
<p>Objects are more complex data types in JavaScript and are used to represent real-world objects or abstract concepts. They are composed of key-value pairs, where the keys are strings and the values can be any data type (including primitives and other objects).</p>
<p>Objects are mutable, which means that they can be changed after they are created. For example:</p>



<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   let obj = { name: "John", age: 30 };
   obj.age = 31; // the age property of obj is now 31
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>In this example, the "age" property of the "obj" object is changed from 30 to 31. This changes the value of the object itself, rather than creating a new object.</p>
<p>There are several other data types in JavaScript that are classified as objects, including arrays, functions, and dates. These data types behave similarly to objects in that they are mutable and can be modified after they are created.</p>
<h3>Conclusion</h3>
<p>In summary, primitives are the simplest data types in JavaScript and are immutable. Objects are more complex data types that are used to represent real-world objects or abstract concepts and are mutable. It is important to understand the differences between these two types of data in order to write effective and maintainable code in JavaScript.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

</div>
<div class="tabPanel4">


<div ><h1 class="top">Operators and Expressions</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p>Operators in JavaScript are symbols that perform specific operations on one or more operands (values or variables). For example, the addition operator (+) adds two operands together and the assignment operator (=) assigns a value to a variable.</p>
<p>There are several types of operators in JavaScript, including:</p>
<ul>
<li>Arithmetic operators (e.g. +, -, *, /, %)</li>
<li>Comparison operators (e.g. &gt;, &lt;, &gt;=, &lt;=, ==, !=)</li>
<li>Logical operators (e.g. &amp;&amp;, ||, !)</li>
<li>Assignment operators (e.g. =, +=, -=, *=, /=)</li>
<li>Conditional (ternary) operator (e.g. ?:)</li>
</ul>
<p>Expressions are combinations of values, variables, and operators that produce a result. For example:</p>
<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
  let x = 10;
  let y = 20;
  let z = x + y; // z is 30
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>In this example, the expression "x + y" is evaluated to 30 and assigned to the "z" variable.</p>
<p>Operator precedence determines the order in which operators are applied when an expression has multiple operators. For example:</p>
<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript" style="line-height:0.2;">
 <xmp>
     let x = 10 + 5 * 3; // x is 25
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>In this example, the multiplication operator (*) has a higher precedence than the addition operator (+), so the multiplication is performed before the addition. As a result, the expression is evaluated as 10 + (5 * 3) = 25.</p>
<p>You can use parentheses to specify the order of operations in an expression. For example:</p>




<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript" style="line-height:0.2;">
 <xmp>
   let x = (10 + 5) * 3; // x is 45
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>In this example, the parentheses indicate that the addition should be performed before the multiplication. As a result, the expression is evaluated as (10 + 5) * 3 = 45.</p>
<h3>Conclusion</h3>
<p>In summary, operators are symbols that perform specific operations on one or more operands, and expressions are combinations of values, variables, and operators that produce a result. Operator precedence determines the order in which operators are applied in an expression, and parentheses can be used to specify the order of operations. Understanding how to use operators and expressions is an important part of programming in JavaScript.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</div>








</div>
<div class="tabPanel4">

<div><h1 class="top">If else conditionals</h1></div>
<div ><p>The "if" statement in JavaScript is used to execute a block of code if a certain condition is met. The "else" clause is used to execute a block of code if the condition is not met.</p>
<p>Here is the basic syntax for an "if" statement:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    if (condition) {
      // code to be executed if condition is true
   }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>Here is the syntax for an "if" statement with an "else" clause:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    if (condition) {
       // code to be executed if condition is true
    } else {
       // code to be executed if condition is false
    }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>The condition is a boolean expression that evaluates to either true or false. If the condition is true, the code in the "if" block is executed. If the condition is false, the code in the "else" block is executed (if present).</p>
<p>For example:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    let x = 10;
    if (x > 5) {
        console.log("x is greater than 5");
    } else {
        console.log("x is not greater than 5");
    }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>In this example, the condition "x &gt; 5" is true, so the code in the "if" block is executed and the message "x is greater than 5" is printed to the console</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>



</div>
<div class="tabPanel4">
<div><h1 class="top">If else ladder</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p>The "if-else ladder" is a control structure in JavaScript that allows you to execute a different block of code depending on multiple conditions. It is called a ladder because it consists of multiple "if" and "else" statements arranged in a ladder-like fashion.</p>
<p>Here is the syntax for an "if-else ladder":</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    if (condition1) {
         // code to be executed if condition1 is true
    } else if (condition2) {
        // code to be executed if condition1 is false and condition2 is true
    } else if (condition3) {
        // code to be executed if condition1 and condition2 are false and condition3 is true
    } ...
    else {
       // code to be executed if all conditions are false
    }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>In this structure, each "if" statement is followed by an optional "else" statement. If the first "if" condition is true, the code in the corresponding block is executed and the rest of the ladder is skipped. If the first "if" condition is false, the second "if" condition is evaluated, and so on. If none of the conditions are true, the code in the "else" block is executed.</p>
<p>For example:</p>


<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   let x = 10;
   if (x > 15) {
      console.log("x is greater than 15");
   } else if (x > 10) {
      console.log("x is greater than 10 but less than or equal to 15");
   } else if (x > 5) {
      console.log("x is greater than 5 but less than or equal to 10");
   } else {
      console.log("x is less than or equal to 5");
   }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>In this example, the first "if" condition "x &gt; 15" is false, so the second "if" condition "x &gt; 10" is evaluated. This condition is also false, so the third "if" condition "x &gt; 5" is evaluated. This condition is true, so the code in the corresponding block is executed and the message "x is greater than 5 but less than or equal to 10" is printed to the console.</p>
<p>The "if-else ladder" is a useful control structure for executing different blocks of code based on multiple conditions. It can help you write more concise and maintainable code in JavaScript.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>


</div>
<div class="tabPanel4">


<div><h1 class="top">Switch case</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p>The "switch" statement in JavaScript is another control structure that allows you to execute a different block of code depending on a specific value. It is often used as an alternative to the "if-else ladder" when you have multiple conditions to check against a single value.</p>
<p>Here is the syntax for a "switch" statement:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    switch (expression) {
     case value1:
         // code to be executed if expression == value1
     break;
     case value2:
        // code to be executed if expression == value2
     break;
       ...
     default:
       // code to be executed if expression does not match any of the values
     } 
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>In this structure, the "expression" is evaluated and compared to each of the "case" values. If the "expression" matches a "case" value, the corresponding block of code is executed. The "break" statement is used to exit the "switch" statement and prevent the code in the following cases from being executed. The "default" case is optional and is executed if the "expression" does not match any of the "case" values.</p>
<p>For example:</p>


<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    let x = "apple";
     switch (x) {
       case "apple":
          console.log("x is an apple");
          break;
       case "banana":
         console.log("x is a banana");
         break;
       case "orange":
         console.log("x is an orange");
         break;
      default:
         console.log("x is something else");
       } 
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>



<p>In this example, the "expression" is the variable "x," which has the value "apple." The "expression" is compared to each of the "case" values, and when it matches the value "apple," the corresponding block of code is executed and the message "x is an apple" is printed to the console.</p>
<p>The "switch" statement is a useful control structure for executing different blocks of code based on a specific value. It can help you write more concise and maintainable code in JavaScript.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>











</div>
<div class="tabPanel4">

<div><h1 class="top">Ternary Operator</h1></div>
<div ><p>The ternary operator is a shorthand way to write an <code>if</code>-<code>else</code> statement in JavaScript. It takes the form of <code>condition ? value1 : value2</code>, where <code>condition</code> is a boolean expression, and <code>value1</code> and <code>value2</code> are expressions of any type. If <code>condition</code> is <code>true</code>, the ternary operator returns <code>value1</code>; if <code>condition</code> is <code>false</code>, it returns <code>value2</code>.</p>
<p>Here's an example of how you can use the ternary operator to assign a value to a variable based on a condition:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   let x = 10;
   let y = 20;
   let max;

   max = (x > y) ? x : y;

   console.log(max); // Outputs: 20
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>



<p>In this example, the ternary operator checks whether <code>x</code> is greater than <code>y</code>. If it is, <code>max</code> is assigned the value of <code>x</code>; otherwise, it is assigned the value of <code>y</code>.</p>
<p>The ternary operator can be a useful and concise way to write simple <code>if</code>-<code>else</code> statements, but it can become difficult to read and understand when used for more complex statements or nested inside other expressions. In these cases, it may be better to use a regular <code>if</code>-<code>else</code> statement instead.</p></div>







</div>
<div class="tabPanel4">

<div><h1 class="top">For Loops</h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p>For loops are a common control flow structure in programming that allows you to repeat a block of code a specific number of times. In JavaScript, there are three types of for loops: the standard for loop, the for-in loop, and the for-of loop.</p>
<h3>Standard for loop</h3>
<p>The standard for loop has the following syntax:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    for (initialization; condition; increment/decrement) {
     // code to be executed
    }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>The <code>initialization</code> the statement is executed before the loop starts and is typically used to initialize a counter variable. The <code>condition</code> is checked at the beginning of each iteration and if it is <code>true</code>, the loop continues. If it is <code>false</code>, the loop exits. The <code>increment/decrement</code> statement is executed at the end of each iteration and is used to update the counter variable.</p>
<p>Here's an example of a standard for loop that counts from 1 to 10:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    for (let i = 1; i <= 10; i++) {
     console.log(i);
    }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>This loop will print the numbers 1 through 10 to the console.</p>
<h3>For-in loop</h3>
<p>The for-in loop is used to iterate over the properties of an object. It has the following syntax:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
    for (variable in object) {
     // code to be executed
    }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>The <code>variable</code> is assigned the name of each property in the object as the loop iterates over them.</p>
<p>Here's an example of a for-in loop that iterates over the properties of an object:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
  let person = {
     name: "John",
     age: 30,
    job: "developer"
  };

  for (let key in person) {
    console.log(key + ": " + person[key]);
   }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>This loop will print the following to the console:</p>
<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   name: John
   age: 30
   job: developer
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<h3>For-of loop</h3>
<p>The for-of loop is used to iterate over the values of an iterable object, such as an array or a string. It has the following syntax:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
   for (variable of object) {
     // code to be executed
   }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p>The <code>variable</code> is assigned the value of each element in the object as the loop iterates over them.</p>
<p>Here's an example of a for-of loop that iterates over the elements of an array:</p>


<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript">
 <xmp>
     let numbers = [1, 2, 3, 4, 5];

     for (let number of numbers) {
     console.log(number);
     }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>This loop will print the numbers 1 through 5 to the console.</p>
<p>For loops are a powerful tool in JavaScript and can be used to perform a variety of tasks, such as iterating over arrays and objects, repeating a block of code a specific number of times, and more. With the three types of for loops available in JavaScript, you can choose the one that best fits your needs and use it to write more efficient and effective code.</p>
<p>&nbsp;</p>

</div>

</div>
<div class="tabPanel4">

<div ><h1 class="top">Screen Object<!-- --></h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p>The JavaScript <code>screen</code> object is a part of the <code>window</code> object and provides information about the device's screen properties. It allows developers to gather information about the screen resolution, color depth, and available screen area.</p>
<p>One of the most commonly used properties of the <code>screen</code> object is the <code>width</code> and <code>height</code> properties. These properties return the width and height of the device's screen in pixels, respectively. Developers can use these properties to create responsive designs and adjust the layout based on the screen size. For example, the following code can be used to log the screen resolution:</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript" style="line-height:0.2;">
 <xmp>
    console.log(`The screen resolution is ${screen.width}x${screen.height} pixels`);
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>Another important property is the <code>colorDepth</code> property which returns the number of bits used to represent the color of a single pixel. This property can be used to check the color depth of the screen and make sure that images and videos are displayed correctly.</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript" style="line-height:0.2;">
 <xmp>
    console.log(`The screen color depth is ${screen.colorDepth} bits`);
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p>The <code>screen</code> object also provides the <code>availWidth</code> and <code>availHeight</code> properties, which return the width and height of the available screen area, respectively. This means the area available to the browser, not including the taskbar or other system interface elements.</p>
<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-javascript" style="line-height:0.2;">
 <xmp>
    console.log(`The available screen width is ${screen.availWidth} pixels and the available screen height is ${screen.availHeight} pixels`);

</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p>It's important to note that the <code>screen</code> object is a part of the DOM API and it is supported by all modern browsers, but it's important to check for browser compatibility before using it. Also, the screen object properties will return the screen size of the device the browser is running on, and not the size of the window that the browser is running in.</p>
<p>In conclusion, the JavaScript <code>screen</code> object provides a powerful set of tools for gathering information about the device's screen properties such as resolution, color depth and available screen area. Understanding how to use the <code>screen</code> object is essential for creating responsive designs and adjusting the layout based on the screen size, but it's important to keep in mind its limitations and check browser compatibility before using it.</p></div>

</div>


</div>


<div><h1 class="top" style="font-size:26px; margin-top:50px;">What is Programming? <!-- --></h1></div>
<p>It is a way to talk to computers. A language like Hindi, English, or Bengali can be used to talk to a human but for computers, we need straightforward instructions.</p>
<p>Programming is the act of constructing a program, a set of precise instructions telling a computer what to do.</p>
<p>Programming is the process of designing, writing, testing, debugging, and maintaining the source code of computer programs. It involves the use of programming languages and various tools to create software programs that can be run on a computer or other devices.</p>
<p>&nbsp;</p>
<h3>What is ECMAScript?</h3>
<p>ECMAScript is a standard on which JavaScript is based!</p>
<p>It was created to ensure that different documents on JavaScript are talking about the same language.</p>
<p>&nbsp;</p>
<h3>ECMAScript Versions:&nbsp;</h3>
<p>Beginning in <strong>1997</strong>, JavaScript has evolved into many versions.</p>
<ul>
<li><strong>ECMAScript1</strong> or <strong>ES1</strong> was first released in <strong>1997</strong>.&nbsp;</li>
<li><strong>ECMAScript 2015</strong> also known as <strong>ES6</strong> was released in <strong>2015</strong> and a major revision to JavaScript was made.</li>
<li>The latest version of JavaScript will be <strong>ECMaScript2022 (ES13)</strong> in <strong>2022</strong>.</li>
</ul>
<h3>What is JavaScript?</h3>
<ul>
<li>JavaScript is a lightweight, OOP language.</li>
<li>It is a scripting language for web pages.</li>
<li>It is used to add interactivity and dynamic effects to web pages.</li>
<li><strong>“<span style="color: rgb(35, 111, 161);">.js</span>”</strong> is the extension.</li>
<li>Nowadays used in server-side development.</li>
<li>JS <strong>Frontend Frameworks:</strong> <span style="color: rgb(35, 111, 161);">React, Angular, Vue</span>.</li>
<li>JS <strong>Backend Frameworks</strong>: <span style="color: rgb(35, 111, 161);">Express, Node</span>.</li>
</ul>
<p>In this tutorial, we will learn JavaScript in depth</p>
<p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-size: 12.0pt;">&nbsp;</span></p>

</div>
