<div class="tabPanel" id="CSS">

      <div class="wrapper1" id="item-container1">
      <input type="checkbox" id="btn2" hidden>
      <label for="btn2" class="menu-btn"><img src="../img/sidebar.png"></label>
       <nav  class="text-left bg-purple-100 md pl mdblock sidebar " aria-label="Breadcrumb" id=sidebar" style="background-color: #ff7200; overflow: scroll; ">
      <div class="title">INTRODUCTION</div>
      <ul class="left-nav">
    <div><li onclick="cshowPanel(0,'#f5f6fa')"aria-current="page"><a id="btn1">Information & History</a></li></div>
    <div><li onclick="cshowPanel(1,'#f5f6fa')"aria-current="page"><a>Your first CSS website</a></li></div>
    <div><li onclick="cshowPanel(2,'#f5f6fa')"aria-current="page"id="Javascript"><a>How CSS works?</a></li></div>
    <div><li onclick="cshowPanel(3,'#f5f6fa')"aria-current="page" id="rectjs"><a>Ways to add CSS</a></li></div>
    <div><li onclick="cshowPanel(4,'#f5f6fa')"aria-current="page" id="c"><a>CSS Selectors</a></li></div>
    <div><li onclick="cshowPanel(5,'#f5f6fa')"aria-current="page" id="c++"><a>CSS Comments</a></li></div>
<div class="title">CSS Properties</div>
    <div><li onclick="cshowPanel(6,'#f5f6fa')"aria-current="page" id="c++"><a>CSS Colors</a></li></div>
    <div><li onclick="cshowPanel(7,'#f5f6fa')"aria-current="page" id="c"><a>CSS Buttons</a></li></div>
    <div><li onclick="cshowPanel(8,'#f5f6fa')"aria-current="page" id="c++"><a>CSS Text Styling</a></li></div>
    <div><li onclick="cshowPanel(9,'#f5f6fa')"aria-current="page" id="c"><a>CSS Margin</a></li></div>
    <div><li onclick="cshowPanel(10,'#f5f6fa')"aria-current="page" id="c++"><a>CSS Padding</a></li></div>

    </ul>
     </nav>

<div class="pe">
 <button class="pre" type="pres" value="pres" name="pres" id="prev-buttons">Previous</button>
 <button class="pre next" type="nexts" value="nexts" name="nexts" id="next-buttons">Next</button>
</div>

<div class="tabPanel3">
 
<div><h1 class="top">Information &amp; History <!-- --></h1></div>
<div ><p dir="ltr">Have you ever wondered about the websites you interact with daily basis, how do they look without any styling?&nbsp;</p>
<p dir="ltr">Well, without Cascading Style Sheets (CSS) this is what this website looks like.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">WITHOUT CSS</h3>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-home/Without CSS.webp" width="49.3%" height="74.7%"></p>
<p>&nbsp;</p>
<h3>WITH CSS</h3>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-home/With CSS.webp" width="100.0%" height="76.1%"></p>
<p>&nbsp;</p>
<h3 dir="ltr">History</h3>
<p dir="ltr">CSS was created by Håkon Wium Lie to allow web designers to change their website's layout, colours, and fonts. Originally, websites were meant to be used by researchers only, so the decoration did not matter. However, the need to make them look nice grew when websites became widespread.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Why the word “Cascade”?</h3>
<p dir="ltr">The Cascade determines which CSS rules will be applied when multiple rules for an item are contradicting in the style sheet.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Key features of CSS</h3>
<ol>
<li dir="ltr" role="presentation">Used to style and layout webpages</li>
<li dir="ltr" role="presentation">Written in HTML and XML</li>
<li dir="ltr" role="presentation">The last version was CSS 2.1, but seeing the scope everything now comes under the umbrella of CSS without any version number.</li>
<li dir="ltr" role="presentation">Reusability of the same rules for multiple HTML documents.<strong><br></strong></li>
</ol>
<p>&nbsp;</p>
<h3 dir="ltr">Why learn CSS?</h3>
<p dir="ltr">CSS though optional, adds beauty to a website. It helps the user to design a majestic website according to their own liking.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">So without wasting any time let’s start with your first CSS website.</p>
<p>&nbsp;</p></div>

</div>
<div class="tabPanel3">

<div ><h1 class="top">Your first CSS website<!-- --></h1></div>
<div ><h3 dir="ltr">Installing VS Code</h3>
<ul>
<li dir="ltr" role="presentation">Go to Google (or any preferred browser).</li>
<li dir="ltr" role="presentation">Type Visual studio code download</li>
<li dir="ltr" role="presentation">Click on download and install it as per your OS</li>
<li dir="ltr" role="presentation">After the installation is done, you need to install the Live Server extension to view the changes you make to your website.</li>
</ul>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">You can refer to this link in case you have any doubts about the installation- <a href="https://youtu.be/TeZdo8mx0gc?t=92"><span data-rich-links="{&quot;fple-t&quot;:&quot;HTML Tutorial: Installing VS Code &amp; Live Server | Web Development Tutorials #2&quot;,&quot;fple-u&quot;:&quot;https://youtu.be/TeZdo8mx0gc?t=92&quot;,&quot;fple-mt&quot;:null,&quot;type&quot;:&quot;first-party-link&quot;}">HTML Tutorial: Installing VS Code &amp; Live Server | Web Development Tutorials #2</span></a></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Which Browser should I use for web development?</h3>
<p dir="ltr">In general, you can use any web browser that is supported on your device. The most common of these are-&nbsp;</p>
<ul>
<li dir="ltr" role="presentation">Chrome</li>
<li dir="ltr" role="presentation">Microsoft Edge</li>
<li dir="ltr" role="presentation">Safari</li>
<li dir="ltr" role="presentation">Firefox</li>
<li dir="ltr" role="presentation">Brave<br><br></li>
</ul>
<p dir="ltr">But as per my personal advice, the Firefox browser gives the best usability and features especially for a new user. In fact, this tutorial will use Firefox to show the code outputs on our website.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Your first CSS website</h3>
<p dir="ltr">So, if you have successfully followed the above steps you can open vs code and create a new file with the name “first.html”. I assume you’ve enough knowledge so far about HTML to understand the working of HTML emmet and tags.</p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">In case you do not feel confident with CSS, you can skim through this tutorial for a refresher.</p>
<p dir="ltr"><a href="../../../tutorial/html-home/">https://www.codewithharry.com/tutorial/html-home/</a></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Now once you have created an HTML file, type “!” and enter to use the emmet for the default HTML website.</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-your-first-website/!.webp" width="100.0%" height="32.7%"></p>
<p dir="ltr">This code would then look something like this.</p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-your-first-website/default HTML.webp" width="100.0%" height="54.6%"></p>
<p dir="ltr">Rename the title to “First CSS”. This is the title that would be displayed at the top of the website.</p>
<p dir="ltr">&nbsp;</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-your-first-website/first.webp" width="100.0%" height="58.4%"></p>
<p dir="ltr">Now let’s see the output of this code. Remember we had installed a live server extension earlier, you would see an icon on the bottom of the tray in VS code named “Go live”. You can also right-click to select open with Live Server to run the code.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">This is how this website would look like without any text or attributes.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-your-first-website/preview.webp" width="100.0%" height="58.4%"></p>
<p dir="ltr">You can see here, that the title of the website is the only change we made. This is what an empty HTML website looks like. Now let’s add some HTML text and try styling that with CSS.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In the body tag, write anything you want to. Something like this-</p>
<p>&nbsp;</p>
<p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css">
 <xmp>
   <body>
       This is KishanCoding
   </body>
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
  <button class="try-button">Try It Yourself</button>
</div>
</p>
<p>&nbsp;</p>

<p dir="ltr">Now let’s add some styling. Though there are many ways to add CSS to an HTML website, we’ll look at them later. For now, in the head tag create a tag with the name style.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Add the body tag there, and finally, you’re going to add now your first CSS property.&nbsp;</p>
<p dir="ltr">Type the following lines-</p>
<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css">
 <xmp>
 <style>
    body {
        color: yellow;
        background-color: rebeccapurple;
    }
</style>
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
  <button class="try-button">Try It Yourself</button>
</div>
<p>&nbsp;</p>


<p dir="ltr">Let’s see the output of this code first, which will give you half of the explanation of what exactly happened here.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-your-first-website/first css.webp" width="100.0%" height="74.7%"></p>
<p dir="ltr">Pat yourself on the back! You’ve begun your journey with CSS. Throughout these tutorials, you’ll get better clarity about other properties as well.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Coming back to this code, <strong>here’s the whole code for you.</strong></p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-your-first-website/full code.webp" width="100.0%" height="83.6%"></p>
<p>To style any piece of code in CSS we need to select that (we selected body tag here). There are many other ways to do so as well. So just be patient and join your Harry Bhai to master CSS from Scratch.</p>
<p>&nbsp;</p></div>
</div>
<div class="tabPanel3">

<div><h1 class="top">How CSS works?<!-- --></h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr">We wrote our first CSS style but still, the things wouldn’t be very much clear to an amateur person. Let’s look at how CSS works on the DOM model.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">DOM model - Document Object Model</h3>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/how-css-works/DOM-model.webp" width="98.7%" height="102.5%"></p>
<p>&nbsp;</p>
<p dir="ltr">Source: Wikipedia</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Just like how any artist makes a structure of his art, similarly, when our website is loaded in the browser it creates a structure to manage the execution of different tags of HTML.</p>
<p dir="ltr">Using DOM, HTML, as well as CSS of the web page, can be accessed along with the behaviour of the HTML elements. So, Document Object Model is a sort of API that represents and interacts with HTML documents.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Working of CSS</h3>
<p dir="ltr">So basically after the DOM model is created in HTML, the browser parses CSS to the selectors we used (you’ll learn more about selectors in a while). The properties or the rules written in CSS are then applied to individual spans.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">To know more about the document structure you can refer to this as well:&nbsp;</p>
<p dir="ltr"><a href="../../../tutorial/html-document-structure/">https://www.kishanCoding.com/tutorial/html-document-structure/</a></p>
<p>&nbsp;</p></div>
</div>
<div class="tabPanel3">

<div ><h1 class="top">Ways to add CSS<!-- --></h1></div>
<div ><p dir="ltr">So, there are mainly three ways to add CSS to any HTML document. One of the ways, we have already seen.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Inline CSS:</h3>
<p dir="ltr">In this method, we can simply add CSS to the particular HTML tag using the style keyword.</p>

<p>&nbsp</p>
<div class="code-snippet">
  <pre  style="line-height: 0.2;">
  <code class="language-html" >
 <xmp>
     <h1 style="color:violet">Hello, I'm using in line CSS</h1>
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp</p>


<p dir="ltr">Output:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/ways-to-add-css/inline css.webp" width="80.0%" height="49.3%"></p>
<p dir="ltr">This way minute styling of the HTML document can be easily done without any hassles.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">But still, generally, this method of adding CSS is not advised as it can create confusion in the tags and thus decrease the readability of code.&nbsp;</p>
<p dir="ltr">Also, with this method of styling, you can’t use quotations within inline CSS. The quotations will be treated as the end of style and therefore stopping the block of code.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Internal CSS:</h3>
<p dir="ltr">This method would sound similar to you because we used this method originally to write our first CSS code.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Let’s try that again using another property. Create a style tag in the head of the HTML document and write the following code.</p>


<p>&nbsp</p>
<div class="code-snippet">
  <pre  style="line-height: 0.2;">
  <code class="language-css" >
 <xmp>
     <style>
    body {
        color: turquoise;
        background-color: brown;
        text-decoration: underline;
    }
</style>
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp</p>

<p>This tag selects the body and performs 3 operations on the text written in the body. Therefore the output would look like this-</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/ways-to-add-css/internal css.webp" width="80.1%" height="50.5%"></p>
<p dir="ltr">This way we can use CSS rules in the same document. But the major issue with this is, you can’t use these rules outside of the document, i.e, the scope of this style sheet is local. Therefore, let’s look at the most common method of adding the style sheet now…</p>
<p><strong><br><br></strong></p>
<h3 dir="ltr">External CSS:</h3>
<p dir="ltr">As the name suggests, in this method we explicitly create a file name style (name can be changed) with the extension ‘.css’. Then we link this file in the head tag of the HTML document.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">This style sheet can be linked with any number of documents thus making it easy to use everywhere.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Let’s look at the implementation of the same. First, you need to create a file with the name “style.css” in the same folder where your HTML file is present. Later using the following command in the Head tag the file would be linked with the HTML document.</p>

<p>&nbsp</p>
<div class="code-snippet">
  <pre  style="line-height: 0.2;">
  <code class="language-css" >
 <xmp>
      <link rel="stylesheet" href="style.css">
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp</p>

<p dir="ltr">Here, “rel” defines the relationship between a linked resource and the current document, and “style.css” is the file we have created. Right now my file is already in the same directory as the HTML file so I don’t need to give the absolute path.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">If you’ve created your “style.css” somewhere else, please give the path accordingly.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">This way we can link CSS externally. But you’re on Code With Harry’s website, so here’s a shortcut for you to reduce the steps of doing so.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/ways-to-add-css/CSS_style_sheet.gif" width="100.0%" height="87.6%"></p>
<p>&nbsp;</p>
<p dir="ltr">As you can see, I used the basic functionality of VS code and directly created a file called “style.css”. (I used ctrl+click to open the popup bar)</p>
<p dir="ltr">These were some ways in which you can link your CSS to your HTML file. But as a rule of thumb, external CSS is the best method to do so.</p>
<p>&nbsp;</p></div>
</div>
<div class="tabPanel3">


<div ><h1 class="top">CSS Selectors</h1></div>
<div ><p dir="ltr">So far we have just glanced at the basics of CSS, and you must have noticed me selecting the body tag every time I write any rule of CSS in the stylesheet.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In technical terms, it is known as a selector. It tells the browser on which portion of the HTML document the styling needs to be applied.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The syntax of the selector goes as follows-</p>
<p>&nbsp</p>
<div class="code-snippet">
  <pre  style="line-height: 0.2;">
  <code class="language-css" >
 <xmp>
      Selector {
                  (Declaration)
                 Property: Value;
               }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp</p>

<p dir="ltr"><strong>There are primarily 5 types of Selectors.</strong></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">1. CSS Element Selector</h3>
<p dir="ltr">This is the only method that we have used so far in all our examples. It is used to select an HTML element which has a particular keyword.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">But we don’t recommend using it in proper projects as there can be multiple times the same tag used in the document. So, overlapping of rules can occur in the stylesheet.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Eg-</strong></p>

<p>&nbsp</p>
<div class="code-snippet">
  <pre  style="line-height: 0.2;">
  <code class="language-css" >
 <xmp>
<style>
    h1 {
        color: green;
        background-color: aquamarine;
    }
     p {
        color: aquamarine;
        background-color: green;
    }
</style>
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp</p>

<p dir="ltr">We can see here, the output is applied to the individual elements of the code.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/CSS-selectors/element selector.webp" width="100.0%" height="71.6%"></p>
<p>&nbsp;</p>
<h3 dir="ltr">2. CSS ID Selector</h3>
<p dir="ltr">As I said earlier if we use an element selector we can’t add uniqueness to each element. This is achieved by the ID selector. We can create unique IDs for each element property and use that for selecting that block of code.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">It is written with “#” followed by the ID name in the style sheet. But before that, we need to define it in the HTML document as well. Here’s an example-</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/CSS-selectors/id selector.webp" width="100.1%" height="80.8%"></p>
<p dir="ltr">Pay attention to how I created a division to use the id selector. You must be aware of div in HTML but just for a refresher, it is used to create separate blocks for refining the document structure.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">I deliberately left an &lt;p&gt; in the div to show that the “id selector” tag will select every element present in the div.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The output of this code would be</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/CSS-selectors/id selector output.webp" width="100.0%" height="93.5%"></p>
<p>&nbsp;</p>
<h3 dir="ltr">3. CSS Class Selector</h3>
<p dir="ltr">So roughly you can say that the class selector does the same job as the id selector; the only difference is we use the id selector for specifically one element of a unique type. On the other hand, a class selector helps us in grouping various types of elements. Like sometimes we need to style maybe a title and specific paragraph with the same rules. In that case, we can give the same class to both elements.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The syntax of a class selector is almost similar to the id selector, just “#” is replaced with “.”</p>
<p dir="ltr">Eg- .class-name{ property : value;}</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">So here’s a small assignment for you. You’ve to make this layout with just two class selectors. Try it out and then look down for the solution.</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/CSS-selectors/class selector output.webp" width="100.0%" height="78.5%"></p>
<p dir="ltr">Notice how all of the 4 headings are different. So if you think to use an ID selector or element selector then you need to create 4 style properties. But with the class selector, it is cut in half.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Here’s the code of it, I hope you tried it yourself first.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/CSS-selectors/class selector.webp" width="100.2%" height="90.2%"></p>
<p dir="ltr">Thus we can see a class selector helps in grouping two distinct elements. But what if you want to group everything?</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">4. CSS Universal Selector</h3>
<p dir="ltr">A universal selector is used to group everything present on the page. Thus it comes in handy while structuring websites quickly. You’ll learn in detail about the situations in which a universal selector is helpful.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The syntax of a universal selector is simple. Just use “*” to use the selector.</p>
<p dir="ltr">Eg-&nbsp;</p>
<div class="code-toolbar"><pre class="language-css" tabindex="0"><code class="language-css"><span class="token selector">&lt;style&gt;
    *</span> <span class="token punctuation">{</span>
        <span class="token property">color</span><span class="token punctuation">:</span> brown<span class="token punctuation">;</span>
        <span class="token property">background-color</span><span class="token punctuation">:</span> yellowgreen<span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
&lt;/style&gt;</code></pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copy</span></button></div></div></div>
<p dir="ltr">Run it yourself and see what output it is giving to you.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">5. CSS Group Selector</h3>
<p dir="ltr">Previously we just saw the use of class selectors right? There’s another way to do so as well.</p>
<div class="code-toolbar"><pre class="language-css" tabindex="0"><code class="language-css"><span class="token selector">&lt;style&gt;
    h1, h3</span> <span class="token punctuation">{</span>
        <span class="token property">color</span><span class="token punctuation">:</span> brown<span class="token punctuation">;</span>
        <span class="token property">background-color</span><span class="token punctuation">:</span> yellowgreen<span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
   
    <span class="token selector">h2, h4</span> <span class="token punctuation">{</span>
        <span class="token property">color</span><span class="token punctuation">:</span> yellowgreen<span class="token punctuation">;</span>
        <span class="token property">background-color</span><span class="token punctuation">:</span> brown<span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
&lt;/style&gt;</code></pre><div class="toolbar"><div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copy</span></button></div></div></div>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">A grouping selector is used to minimize the code. Commas are used to separate each selector in a grouping. This reduces the number of lines of code and yes! The code looks clean.</p>
<p>&nbsp;</p></div>
</div>
<div class="tabPanel3">

<div><h1 class="top">CSS Comments<!-- --></h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr">CSS comments are the same as what you must have learnt in any technical language. It is written to explain the code and is helpful for the users who read that code so that they can understand it easily.</p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">Comments are ignored by browsers, and the syntax to write them is:&nbsp;</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css" style="line-height:0.2;">
 <xmp>
  /* Your comment */
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p></div>

</div>
<div class="tabPanel3">

<div><h1 class="top">CSS Colors<!-- --></h1></div>
<div ><p dir="ltr">We have been glimpsing this property for quite a while in the Introduction portion; so you must be aware that this property can help us set the colour of the text.</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css"style="line-height:0.2;">
 <xmp>
 Syntax: { color: value;}
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>

<p dir="ltr">Now there are many ways of giving this value to the colour. Some of the most common are listed below.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">1. RGB format:</h3>
<p dir="ltr">The full form of RGB is “Red, Green, Blue” and thus it defines the colour value by taking three arguments ranging from 0 to 255.</p>
<p dir="ltr">Syntax: {color: rgb(0,0,0);}. <br><br></p>
<p dir="ltr">Note that this colour is black, if you change each of the values to 255 white colours of the text would be selected.</p>
<p><strong id="docs-internal-guid-b409f6e4-7fff-48a8-df88-fa5fe366a6cd"><br>Here’s an example to give you clarity on the RGB colour scheme.<br></strong></p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-colors/rgb color code.webp" width="80.1%" height="69.6%"></p>
<p>&nbsp;</p>
<p dir="ltr">The output of this would be-</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-colors/rgb output.webp" width="90.0%" height="71.3%"></p>
<p>&nbsp;</p>
<h3 dir="ltr">2. Hexadecimal notation:</h3>
<p dir="ltr">By using the hex code of any colour you can assign that colour to the element.</p>
<p dir="ltr"><strong>For eg:-</strong></p>
<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css">
 <xmp>
  h1 {
            color: #ff7189;
        }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>
<p dir="ltr">This way you can give specific values to the colour by searching for their hex codes on google.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">3. HSL:</h3>
<p dir="ltr">HSL stands for Hue, Saturation and Lightness. Tweaking these values gives different colours, and the syntax is quite similar to RGB.&nbsp;</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css"style="line-height:0.2;">
 <xmp>
     Syntax: {color: hsl(hue,saturation,lightness);}.
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p dir="ltr">Hue refers to the dominant colour family present in that colour, saturation adds the shades to that dominant colour and lastly, lightness describes the transparency and boldness of that colour.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Apart from these methods RGBA and HSLA too are used to give colour to text, but that is something not so common with beginners.</p>
<p>&nbsp;</p></div>


</div>
<div class="tabPanel3">
<div><h1 class="top">CSS Buttons<!-- --></h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr">Buttons can be styled in CSS to match the theme of our website. Various ways of styling it is given below.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Eg:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-buttons/button styling.webp" width="100.1%" height="97.0%"></p>
<p>&nbsp;</p>
<p>Output:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-buttons/button styling output.webp" width="100.0%" height="52.3%"></p></div>

</div>
<div class="tabPanel3">

<div ><h1 class="top">CSS Text Styling<!-- --></h1></div>
<div ><p dir="ltr">Apart from playing with fonts, you can also decorate, alter and change the alignment of your text. Let’s have a look at these properties.</p>
<p><strong>&nbsp;</strong></p>
<h4 dir="ltr">Text Decoration</h4>
<p dir="ltr">Whether it is underlining text, cross through, etc these all can be achieved by using Text Decoration.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Eg:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text decoration.webp" width="90.0%" height="98.3%"></p>
<p>&nbsp;</p>
<p>Output:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text decoration output.webp" width="90.0%" height="82.4%"></p>
<h4 dir="ltr">Text Alignment</h4>
<p dir="ltr">To set the alignment of text visible on the website we use this property. It sets the horizontal alignment of the text across the screen.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Eg:</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text alignment.webp" width="90.0%" height="94.8%"></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">Output:</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text alignment output.webp" width="100.0%" height="62.8%"></p>
<p dir="ltr">Note: Justify Text is mostly used in newspaper-styled websites to provide equispaced text in the line.</p>
<p dir="ltr"><strong>&nbsp;</strong></p>
<h4 dir="ltr">Text Transformation</h4>
<p dir="ltr">Using this property you can capitalise your text, and convert it into both upper and lower case.</p>
<p dir="ltr"><strong>&nbsp;</strong></p>
<p dir="ltr">Eg:</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text transform.webp" width="90.0%" height="87.2%"></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">Output:</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text transform output.webp" width="90.0%" height="67.8%"></p>
<h4 dir="ltr">Text Spacing</h4>
<p dir="ltr">This property allows the spacing between words, letters and lines of the paragraph. Various attributes of it are listed in the below example.</p>
<p dir="ltr"><strong>&nbsp;</strong></p>
<p dir="ltr">Eg:</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text spacing.webp" width="90.0%" height="85.8%"></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">Output:</p>
<p dir="ltr"><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text spacing output.webp" width="60.0%" height="63.2%"></p>
<h4 dir="ltr">Text Shadow</h4>
<p dir="ltr">As the name suggests, you can add shadows to the text using this command. It adds both vertical and horizontal offset to the shadow.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Eg.</p>

<p>&nbsp;</p>
<div class="code-snippet">
  <pre style="line-height:0.2;">
  <code class="language-css">
 <xmp>
     h1 {
            color: yellow;
            text-shadow: rebeccapurple 2px 2px;
        }
p {
            text-shadow: 2px 4px 4px royalblue;
        }
</xmp>
  </code>
  </pre>
  <button id="copy-btn1" class="copy-button">Copy</button>
</div>
<p>&nbsp;</p>


<p dir="ltr">Output:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-text-styling/text shadow.webp" width="70.1%" height="46.9%"></p></div>





</div>
<div class="tabPanel3">
<div><h1 class="top">CSS Margin<!-- --></h1></div>
<div class="pt-2 cont font-karla min-h-screen dark:text-gray-200"><p dir="ltr">In margin property unlike padding, the background of the text is also included while adding the space between content and element.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Eg:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-margin/css margin.webp" width="100.0%" height="94.6%"></p>
<p>&nbsp;</p>
<p>Output:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-margin/css margin output.webp" width="100.0%" height="70.2%"></p>
<p dir="ltr">You can add margins for individual elements as well by adding two or more values for it.</p>
<p><strong>&nbsp;</strong></p>
<h4 dir="ltr">Margin Collapse</h4>
<p dir="ltr">When two margins from different elements overlap, the resulting margin is common to both of them. For eg: I give a margin of 5px on one element and 2px to another. In the end, the margin of 5px would be taken as the rule for both of them.</p>
<p>&nbsp;</p></div>
</div>
<div class="tabPanel3">

<div><h1 class="top">CSS Padding<!-- --></h1></div>
<div ><p dir="ltr">CSS works on a box model structure, where elements are packed according to the sequence of the image.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-padding/css box model.webp" width="45.3%" height="29.3%"></p>
<p dir="ltr">The padding property defines the space between the element and the border. The background colour isn’t affected in the case of padding. Here’s an example:</p>
<p dir="ltr">This is how your website looks without padding.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-padding/css without padding.webp" width="100.0%" height="88.4%"></p>
<p>&nbsp;</p>
<p>Output:</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-padding/css without padding output.webp" width="100.0%" height="81.8%"></p>
<p dir="ltr">Now on adding padding of 5px, 20px and 50px to h1, para1 and para2 respectively. This is the output you’ll be getting.</p>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-padding/css padding output.webp" width="100.0%" height="81.8%"></p>
<p dir="ltr">You can also add padding individually to each corner: Top, Bottom, Left and Right.</p>
<p>&nbsp;</p></div>

</div>

</div>


<div><h1 class="top" style="font-size:26px;margin-top: 50px;">Information &amp; History <!-- --></h1></div>
<div><p dir="ltr">Have you ever wondered about the websites you interact with daily basis, how do they look without any styling?&nbsp;</p>
<p dir="ltr">Well, without Cascading Style Sheets (CSS) this is what this website looks like.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">WITHOUT CSS</h3>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-home/Without CSS.webp" width="49.3%" height="74.7%"></p>
<p>&nbsp;</p>
<h3>WITH CSS</h3>
<p><img src="https://cwh-full-next-space.fra1.digitaloceanspaces.com/tutorial/css-home/With CSS.webp" width="100.0%" height="76.1%"></p>
<p>&nbsp;</p>
<h3 dir="ltr">History</h3>
<p dir="ltr">CSS was created by Håkon Wium Lie to allow web designers to change their website's layout, colours, and fonts. Originally, websites were meant to be used by researchers only, so the decoration did not matter. However, the need to make them look nice grew when websites became widespread.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Why the word “Cascade”?</h3>
<p dir="ltr">The Cascade determines which CSS rules will be applied when multiple rules for an item are contradicting in the style sheet.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Key features of CSS</h3>
<ol>
<li dir="ltr" role="presentation">Used to style and layout webpages</li>
<li dir="ltr" role="presentation">Written in HTML and XML</li>
<li dir="ltr" role="presentation">The last version was CSS 2.1, but seeing the scope everything now comes under the umbrella of CSS without any version number.</li>
<li dir="ltr" role="presentation">Reusability of the same rules for multiple HTML documents.<strong><br></strong></li>
</ol>
<p>&nbsp;</p>
<h3 dir="ltr">Why learn CSS?</h3>
<p dir="ltr">CSS though optional, adds beauty to a website. It helps the user to design a majestic website according to their own liking.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">So without wasting any time let’s start with your first CSS website.</p>
<p>&nbsp;</p></div>


</div>
