const form = document.getElementById('resume-form');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent the form from submitting normally

  // Get the form input values
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const degree = document.getElementById('degree').value;
  const major = document.getElementById('major').value;
  const university = document.getElementById('university').value;
  const jobTitle = document.getElementById('job-title').value;
  const company = document.getElementById('company').value;
  const startDate = document.getElementById('start-date').value;
  const endDate = document.getElementById('end-date').value;
  const skills = document.getElementById('skills').value;

  // Create a new jsPDF instance
  const doc = new jsPDF();

  // Generate the resume HTML
  const resume = `
    <h1>${name}</h1>
    <p>Email: ${email}</p>
    <p>Phone: ${phone}</p>

    <h2>Education</h2>
    <ul>
      <li>${degree} in ${major} from ${university}</li>
    </ul>

    <h2>Work Experience</h2>
    <ul>
      <li>${jobTitle} at ${company} (${startDate} - ${endDate})</li>
    </ul>

    <h2>Skills</h2>
    <p>${skills}</p>
  `;

  // Use the html2canvas library to render the resume HTML to an image
  html2canvas(document.body).then((canvas) => {
    // Add the image to the PDF document
    const imgData = canvas.toDataURL('image/png');
    doc.addImage(imgData, 'PNG', 0, 0, doc.internal.pageSize.getWidth(), doc.internal.pageSize.getHeight(), '', 'FAST');

    // Add background color to PDF
    const bgColor = getComputedStyle(document.body).backgroundColor;
    doc.setFillColor(bgColor);
    doc.rect(0, 0, doc.internal.pageSize.getWidth(), doc.internal.pageSize.getHeight(), 'F');

    // Save the PDF document
    doc.save('resume.pdf');
  });
});
