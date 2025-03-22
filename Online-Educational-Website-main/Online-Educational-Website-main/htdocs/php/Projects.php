<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet" type="text/css" href="../css/project.css">

</head>
<body>
<?php require 'nav.php'; ?>
 <table>
   <tr>
    <td>
    <div class="speaks top-m1">
    <p>Select Voice:</p><select id='voiceList'></select> <br>
    <textarea class="inpu" id='txtInput' rows="8" cols="40"> </textarea/><br><br>    
    <button id='btnSpeak'>Speak </button>
  </div>
  <div class="download">
   <a href=".\about\Projects1.zip" download>
     <button>Source code</button>
  </a>
 </div>
   </td>
 <td >
 <?php require '../html/resume.html'; ?>
   <div class="download">
   <a href=".\about\Projects1.zip" download>
     <button>Source code</button>
  </a>
 </div>
   </td>
 </tr>
</table>
    <script>
        var txtInput = document.querySelector('#txtInput');
        var voiceList = document.querySelector('#voiceList');
        var btnSpeak = document.querySelector('#btnSpeak');
        var synth = window.speechSynthesis;
        var voices = [];

        PopulateVoices();
        if(speechSynthesis !== undefined){
            speechSynthesis.onvoiceschanged = PopulateVoices;
        }

        btnSpeak.addEventListener('click', ()=> {
            var toSpeak = new SpeechSynthesisUtterance(txtInput.value);
            var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
            voices.forEach((voice)=>{
                if(voice.name === selectedVoiceName){
                    toSpeak.voice = voice;
                }
            });
            synth.speak(toSpeak);
        });

        function PopulateVoices(){
            voices = synth.getVoices();
            var selectedIndex = voiceList.selectedIndex < 0 ? 0 : voiceList.selectedIndex;
            voiceList.innerHTML = '';
            voices.forEach((voice)=>{
                var listItem = document.createElement('option');
                listItem.textContent = voice.name;
                listItem.setAttribute('data-lang', voice.lang);
                listItem.setAttribute('data-name', voice.name);
                voiceList.appendChild(listItem);
            });

            voiceList.selectedIndex = selectedIndex;
        }
    </script>
 


<script>
function resizeIframe() {
  var iframe = document.getElementById('myIframe');
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
  var body = innerDoc.body || innerDoc.documentElement;
  var newHeight = body.scrollHeight + 'px';
  iframe.style.height = newHeight;
}
document.getElementById('myIframe').onload = resizeIframe;
document.getElementById('myIframe').contentWindow.onresize = resizeIframe;
</script>

</script>
   
</body>
</html>