// Confirmation Message On Button
$('.confirm').click(function () {
    return confirm("😊😊انت كدا هتحذف يسطا خد بالك😊😊")
})

 /* Delete the Facebook Link from Database */
$(document).ready(function() {
  $(".btn-delete").click(function() {
      var id = $(this).data("id");
      var confirmUrl = "phone_number.php?do=Delete&id=" + id;
      $("#delete-phone .btn-danger").attr("href", confirmUrl);
  });
});

 

 /* Delete the Email from Database */
$(document).ready(function() {
  $(".btn-delete").click(function() {
      var id = $(this).data("id");
      var confirmUrl = "email.php?do=Delete&id=" + id;
      $("#delete-mail .btn-danger").attr("href", confirmUrl);
  });
});

/* Delete the Facebook Link from Database */
$(document).ready(function() {
  $(".btn-delete").click(function() {
      var id = $(this).data("id");
      var confirmUrl = "facebook_link.php?do=Delete&id=" + id;
      $("#delete-facebook .btn-danger").attr("href", confirmUrl);
  });
});

/* Delete the Instagram Link from Database */
$(document).ready(function() {
  $(".btn-delete").click(function() {
      var id = $(this).data("id");
      var confirmUrl = "instagram_link.php?do=Delete&id=" + id;
      $("#delete-instagram .btn-danger").attr("href", confirmUrl);
  });
});
  
/* Delete the Twitter Link from Database */
$(document).ready(function() {
  $(".btn-delete").click(function() {
      var id = $(this).data("id");
      var confirmUrl = "twitter_link.php?do=Delete&id=" + id;
      $("#delete-twitter .btn-danger").attr("href", confirmUrl);
  });
});

/* Delete the linkedin Link from Database */
$(document).ready(function() {
  $(".btn-delete").click(function() {
      var id = $(this).data("id");
      var confirmUrl = "linkedin_link.php?do=Delete&id=" + id;
      $("#delete-linkedin .btn-danger").attr("href", confirmUrl);
  });
});

/* Delete the youtube Link from Database */
$(document).ready(function() {
  $(".btn-delete").click(function() {
      var id = $(this).data("id");
      var confirmUrl = "youtube_link.php?do=Delete&id=" + id;
      $("#delete-youtube .btn-danger").attr("href", confirmUrl);
  });
});




$(document).ready(function() {
  // Add click event listener to all edit buttons
  $('.btn-outline-secondary').click(function() {
    // Get the parent input-group element
    var $inputGroup = $(this).closest('.input-group');
    // Check if button says "تعديل" or "حفظ"
    if ($(this).text() === "تعديل") {
      // Change button text to "حفظ"
      $(this).text("حفظ");
      // Enable input field
      $inputGroup.find('input[type=text]').prop('disabled', false);
    } else {
      // Change button text to "تعديل"
      $(this).text("تعديل");
      // Disable input field
      $inputGroup.find('input[type=text]').prop('disabled', true);
    }
  });
});


// Get all the "Delete" buttons on the page
var deleteButtons = document.querySelectorAll('.delete-btn');

// Loop through each button and add a click event listener to it
deleteButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    // Get the ID of the user from the data-id attribute
    var id = button.getAttribute('data-id');

    // Get the confirmation button in the modal and update its link
    var confirmButton = document.querySelector('#delete-user .btn-danger');
    confirmButton.href = 'members.php?do=Delete&id=' + id;
  });
});










