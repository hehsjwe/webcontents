const scriptURL = 'https://script.google.com/macros/s/AKfycbxetCTnwH0iG_iYuEFC5tAEmX939HeUTS3akgq1ZOiaHkhuioemvjEsqRo4xff79Iry/exec'  // ← 여기 Web App 배포 URL 넣으세요

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form) })
    .then(response => alert("Thank you! your form is submitted successfully."))
    .then(() => { window.location.reload() })
    .catch(error => console.error('Error!', error.message))
})
