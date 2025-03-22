var tabButtons=document.querySelectorAll(".con-cousre .course a");
var tabPanels=document.querySelectorAll(".con-cousre .tabPanel");

function hideContent() {
  document.getElementById('content').style.display = 'none';
  const footElement = document.getElementById('foot');
  if (footElement) {
    footElement.style.display = 'none';
  }
  console.log("hide");
}



function showPanel(panelIndex,colorCode) {
     hideContent();

    tabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
   
    tabButtons[panelIndex].style.color="";
    tabPanels.forEach(function(node){
        node.style.display="none";
    });
    tabPanels[panelIndex].style.display="block";
    tabPanels[panelIndex].style.backgroundColor=colorCode;
    console.log("hif");

}
 

 if (window.location.hash === '#Html') {
    showPanel(0, '#fff');
  }
 if (window.location.hash === '#CSS') {
    showPanel(1, '#fff');
  }
 if (window.location.hash === '#Javascript') {
      showPanel(2, '#fff');
    }
 if (window.location.hash === '#PHP') {
      showPanel(3, '#fff');
    } 
 if (window.location.hash === '#Python') {
      showPanel(4, '#fff');
    }

function hidepanel() {
  var panelhide = document.querySelector('.tabPanel');
  panelhide.style.display = 'none';
  console.log("hide panel");
}



var atabButtons=document.querySelectorAll(".wrapper1 .left-nav li");
var atabPanels=document.querySelectorAll(".wrapper1 .tabPanel2");

function ashowPanel(panelIndex,colorCode) {
    tabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
   
    atabButtons[panelIndex].style.color="";
    atabPanels.forEach(function(node){
        node.style.display="none";
    });
    atabPanels[panelIndex].style.display="block";
    atabPanels[panelIndex].style.backgroundColor=colorCode;
}



var ctabButtons=document.querySelectorAll(".wrapper1 .left-nav li");
var ctabPanels=document.querySelectorAll(".wrapper1 .tabPanel3");

function cshowPanel(panelIndex,colorCode) {
    ctabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
   
    ctabButtons[panelIndex].style.color="";
    ctabPanels.forEach(function(node){
        node.style.display="none";
    });
    ctabPanels[panelIndex].style.display="block";
    ctabPanels[panelIndex].style.backgroundColor=colorCode;
}





var jtabButtons=document.querySelectorAll(".wrapper2 .left-nav li");
var jtabPanels=document.querySelectorAll(".wrapper2 .tabPanel4");

function JshowPanel(panelIndex,colorCode) {
    jtabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
   
    jtabButtons[panelIndex].style.color="";
    jtabPanels.forEach(function(node){
        node.style.display="none";
    });
    jtabPanels[panelIndex].style.display="block";
    jtabPanels[panelIndex].style.backgroundColor=colorCode;
}




var ptabButtons=document.querySelectorAll(".wrapper3 .left-nav li");
var ptabPanels=document.querySelectorAll(".wrapper3 .tabPanel5");

function PshowPanel(panelIndex,colorCode) {
    ptabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
   
    ptabButtons[panelIndex].style.color="";
    ptabPanels.forEach(function(node){
        node.style.display="none";
    });
    ptabPanels[panelIndex].style.display="block";
    ptabPanels[panelIndex].style.backgroundColor=colorCode;
}


var pytabButtons=document.querySelectorAll(".wrapper4 .left-nav li");
var pytabPanels=document.querySelectorAll(".wrapper4 .tabPanel6");

function PyshowPanel(panelIndex,colorCode) {
    pytabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
   
    pytabButtons[panelIndex].style.color="";
    pytabPanels.forEach(function(node){
        node.style.display="none";
    });
    pytabPanels[panelIndex].style.display="block";
    pytabPanels[panelIndex].style.backgroundColor=colorCode;
}







// Get references to the items container and the previous/next buttons
const itemContainer = document.getElementById("item-container");
const prevButton = document.getElementById("prev-button");
const nextButton = document.getElementById("next-button");

// Set the initial item index to 0
let acurrentItemIndex = 4;

// Get references to all of the items in the container
const items = itemContainer.children;

// Hide all of the items except the first one
for (let i = 1; i < (items.length); i++) {
    items[i].style.display = "";
}

// Add event listeners to the previous and next buttons
prevButton.addEventListener("click", () => {
  // Hide the current item
  items[acurrentItemIndex].style.display = "none";
  // Decrement the item index
  acurrentItemIndex--;
console.log(acurrentItemIndex );
  // If we're at the beginning of the list, wrap around to the end
  if (acurrentItemIndex <= 3) {
    acurrentItemIndex = items.length - 1;
  }
  // Show the new current item
  items[acurrentItemIndex].style.display = "block";
});

nextButton.addEventListener("click", () => {
  // Hide the current item
  items[acurrentItemIndex].style.display = "";
  // Increment the item index
  acurrentItemIndex++;
  // If we're at the end of the list, wrap around to the beginning
console.log(acurrentItemIndex );
console.log(items.length); 
  if (acurrentItemIndex >= 19) {
    acurrentItemIndex = 4;
  }
  // Show the new current item
  items[acurrentItemIndex].style.display = "block";
});








// Get references to the items container and the previous/next buttons
const aitemContainer = document.getElementById("item-container1");
const aprevButton = document.getElementById("prev-buttons");
const anextButton = document.getElementById("next-buttons");

// Set the initial item index to 0
let bcurrentItemIndex = 3;

// Get references to all of the items in the container
const ccitems = aitemContainer.children;

// Hide all of the items except the first one
for (let i = 1; i < (ccitems.length); i++) {
  ccitems[i].style.display = "";
}

// Add event listeners to the previous and next buttons
aprevButton.addEventListener("click", () => {
  // Hide the current item
  ccitems[bcurrentItemIndex].style.display = "none";
  // Decrement the item index
  bcurrentItemIndex--;
console.log(bcurrentItemIndex );
  // If we're at the beginning of the list, wrap around to the end
  if (bcurrentItemIndex <= 3) {
    bcurrentItemIndex = ccitems.length - 1;
  }
console.log(bcurrentItemIndex );
console.log(ccitems.length );
  // Show the new current item
  ccitems[bcurrentItemIndex].style.display = "block";
  ccitems[3].style.display = "block";
});

anextButton.addEventListener("click", () => {
  // Hide the current item
  ccitems[bcurrentItemIndex].style.display = "";
  // Increment the item index
  bcurrentItemIndex++;
  // If we're at the end of the list, wrap around to the beginning
console.log(bcurrentItemIndex );
console.log(ccitems.length); 
  if (bcurrentItemIndex >= 15) {
    bcurrentItemIndex = 4;
  }
  // Show the new current item
  ccitems[bcurrentItemIndex].style.display = "block";
});


// Get references to the items container and the previous/next buttons
const jitemContainer = document.getElementById("item-containerj");
const jprevButton = document.getElementById("prev-buttonj");
const jnextButton = document.getElementById("next-buttonj");

// Set the initial item index to 0
let jcurrentItemIndex = 3;

// Get references to all of the items in the container
const jitems = jitemContainer.children;

// Hide all of the items except the first one
for (let i = 1; i < jitems.length; i++) {
  jitems[i].style.display = "";
}

// Add event listeners to the previous and next buttons
jprevButton.addEventListener("click", () => {
  // Hide the current item
  jitems[jcurrentItemIndex].style.display = "none";
  // Decrement the item index
  jcurrentItemIndex--;
  // If we're at the beginning of the list, wrap around to the end
  if (jcurrentItemIndex <=2) {
    jcurrentItemIndex = jitems.length - 1;
  }
  // Show the new current item
  jitems[jcurrentItemIndex].style.display = "block";
  jitems[3].style.display = "block";
});

jnextButton.addEventListener("click", () => {
  // Hide the current item
  jitems[jcurrentItemIndex].style.display = "";
  // Increment the item index
  jcurrentItemIndex++;
  // If we're at the end of the list, wrap around to the beginning
console.log(jcurrentItemIndex );
console.log(jitems.length); 
  if (jcurrentItemIndex >= 17) {
    jcurrentItemIndex = 3;
  }
  // Show the new current item
  jitems[jcurrentItemIndex].style.display = "block";
});





// Get references to the items container and the previous/next buttons
const pitemContainer = document.getElementById("item-containerp");
const pprevButton = document.getElementById("prev-buttonp");
const pnextButton = document.getElementById("next-buttonp");

// Set the initial item index to 0
let pcurrentItemIndex = 4;

// Get references to all of the items in the container
const pitems = pitemContainer.children;

// Hide all of the items except the first one
for (let i = 1; i < pitems.length; i++) {
  pitems[i].style.display = "";
}

// Add event listeners to the previous and next buttons
pprevButton.addEventListener("click", () => {
  // Hide the current item
  pitems[pcurrentItemIndex].style.display="none"; 
  // Decrement the item index
  pcurrentItemIndex--;
  
  // If we're at the beginning of the list, wrap around to the end
  if(pcurrentItemIndex <=3){
    pcurrentItemIndex = 13 - 1;
  }
  // Show the new current item
  pitems[pcurrentItemIndex].style.display = "block";
});

pnextButton.addEventListener("click", () => {
  // Hide the current item
  pitems[pcurrentItemIndex].style.display="none";
  // Increment the item index
  pcurrentItemIndex++;
  // If we're at the end of the list, wrap around to the beginning
  if (pcurrentItemIndex >= 13) {
    pcurrentItemIndex = 4;
  }
  // Show the new current item
  pitems[pcurrentItemIndex].style.display = "block";
});



// Get references to the items container and the previous/next buttons
const pyitemContainer = document.getElementById("item-containerpy");
const pyprevButton = document.getElementById("prev-buttonpy");
const pynextButton = document.getElementById("next-buttonpy");

// Set the initial item index to 0
let pycurrentItemIndex = 4;

// Get references to all of the items in the container
const pyitems = pyitemContainer.children;

// Hide all of the items except the first one
for (let i = 1; i < pyitems.length; i++) {
  pyitems[i].style.display = "";
}

// Add event listeners to the previous and next buttons
pyprevButton.addEventListener("click", () => {
  // Hide the current item
  pyitems[pycurrentItemIndex].style.display = "none";
  // Decrement the item index
  pycurrentItemIndex--;
  // If we're at the beginning of the list, wrap around to the end
  if (pycurrentItemIndex <=3) {
    pycurrentItemIndex = 13-1;
  }
  // Show the new current item
  pyitems[pycurrentItemIndex].style.display = "block";
});

pynextButton.addEventListener("click", () => {
  // Hide the current item
  pyitems[pycurrentItemIndex].style.display="none";
  // Increment the item index
  pycurrentItemIndex++;
  // If we're at the end of the list, wrap around to the beginning
console.log(pycurrentItemIndex );
console.log(pyitems.length); 
  if (pycurrentItemIndex >= 12) {
    pycurrentItemIndex =4;
  }
  // Show the new current item
  pyitems[pycurrentItemIndex].style.display = "block";
});





