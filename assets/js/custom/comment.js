document.addEventListener('DOMContentLoaded', async () => {
  document.getElementById("comment_form").addEventListener('submit',  async function (e) {
    e.preventDefault('')

    const firstName = document.getElementById("firstname")
    const lastName = document.getElementById("lastname")
    const email = document.getElementById("email")
    const comment = document.getElementById("comment")

    const data = new FormData(this)

    firstName.value = ""
    lastName.value = ""
    email.value = ""
    comment.value = ""

    swal("Comment receveid!", "Thanks for sharing your comment with us!", "success");
    
    await fetch("comment.php", {
      method: "post",
      body: data
    })

  })

}, false);