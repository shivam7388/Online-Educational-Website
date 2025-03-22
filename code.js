
  const copyButtons = document.querySelectorAll('.copy-button');
  const tryButtons = document.querySelectorAll('.try-button');
  const codeSnippet = document.querySelector('.code-snippet pre');
  


copyButtons.forEach(copyButton => {
  copyButton.addEventListener('click', () => {
    const codeSnippet = copyButton.closest('.code-snippet').querySelector('pre');
    const codeText = codeSnippet.innerText;
    const tempTextArea = document.createElement('textarea');
    tempTextArea.value = codeText;
    document.body.appendChild(tempTextArea);
    tempTextArea.select();
    document.execCommand('copy');
    document.body.removeChild(tempTextArea);
    copyButton.innerHTML="Copied";
  });
});


tryButtons.forEach(tryButton => {
  tryButton.addEventListener('click', () => {
    const codeSnippet = tryButton.closest('.code-snippet').querySelector('pre');
    const codeText = codeSnippet.innerText;
    const encodedContent = encodeURIComponent(codeText);
    window.location.href = "compiler.html?content=" + encodedContent;
  });
});

 
