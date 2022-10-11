document.addEventListener('DOMContentLoaded', async () => {
  document.getElementById("newsletter_form").addEventListener('submit', async (e) => {
    e.preventDefault('')
    const input = document.getElementById("email_input")
    
    const response = await fetch("newsletter.php", {
      method: "post",
      headers: {"Content-Type": "application/json"},
      body: JSON.stringify({email: input.value})
    })

    input.value = ""

    swal("Obrigado por se inscrever!", "Email recebido com sucesso!", "success");

  })

}, false);