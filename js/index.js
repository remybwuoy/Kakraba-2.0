
var form = document.getElementById('db-form');
  form.addEventListener("submit", e => {
   var button = document.getElementById("submitBtn");
    // button.innerText = 'Submitting';
    // button.disabled = true;
    button.style.backgroundColor = "#adadad";
    $(document).on('submit', 'form', function(e) {
      $(this).find('button[type="submit"]')
          .html(`<i class="fas fa-spinner fa-spin"></i> Submitting`);
 });
    e.preventDefault();
  
    fetch(form.action, {
        method : "POST",
        body: new FormData(document.getElementById("db-form")),
    }).then(
        response => response.json()
    ).then((html) => {
 
      // document.getElementById("loadingIcon").style.display = 'none';
      button.style.backgroundColor = "#6db983";
      button.innerText = 'Join Waitlist';
      button.disabled = false;
 

      swal("Good job!", "Successful!", "success")
      document.getElementById("db-form").reset();
      // window.location.href = 'https://abc.com';
    });
  });
// modal
  // var myModal = document.getElementById('myModal')
  // var myInput = document.getElementById('myInput')
  
  // myModal.addEventListener('shown.bs.modal', function () {
  //   myInput.focus()
  // })
  