$(document).ready(function () {
  $(function () {
    $('form').submit(function (e) {
      e.preventDefault();
      var formData = {
        username: $('#Username').val(),
        password: $('#Password').val(),
      };
      $.ajax({
        type: 'POST',
        url: '/backend/login.php',
        dataType: 'json',
        encode: true,
        data: formData,
      }).done(function (data) {
        console.log(data);
        window.location =
          '/challenge2/intern.php/?username=' +
          data[0].username +
          '&GroupId=' +
          data[0].GroupId;
      });
    });
  });
});
