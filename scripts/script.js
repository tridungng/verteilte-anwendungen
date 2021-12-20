$(document).ready(function () {
  $.ajax({
    url: '/backend/userdata.php',
    type: 'get',
    dataType: 'JSON',
    success: function (response) {
      var len = response.length;
      for (var i = 0; i < len; i++) {
        var id = response[i].id;
        var credit = response[i].pan;
        var cvv = response[i].cvv;
        var name = response[i].name;
        var email = response[i].email;

        var tr_str =
          '<tr>' +
          "<td align='center'>" +
          id +
          '</td>' +
          "<td align='center'>" +
          name +
          '</td>' +
          "<td align='center'>" +
          email +
          '</td>' +
          "<td align='center'>" +
          credit +
          '</td>' +
          "<td align='center'>" +
          cvv +
          '</td>' +
          '</tr>';

        $('#userTable tbody').append(tr_str);
      }
    },
  });
  $('#userTable').hide();
  $('#showData').click(function (e) {
    e.preventDefault();
    $('#userTable').show();
    $('#showData').hide();
  });
});
