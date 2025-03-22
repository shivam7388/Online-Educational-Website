var darkModeBtn = document.getElementById('dark-mode-btn');
darkModeBtn.addEventListener('click', toggleDarkMode);
function toggleDarkMode() {
  var body = document.body;
  body.classList.toggle('dark');
}


function toggleSearch() {
  var searchForm = document.getElementById("searchForm");
  var searchToggle = document.querySelector(".search-toggle");
  if (searchForm.style.display === "block") {
    searchForm.style.display = "none";
   
  } else {
    searchForm.style.display = "block";
  }
}

 function submitSearch() {
 
    }

