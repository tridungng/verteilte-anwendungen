$(document).ready(function () {
  $.ajax({
    url: '/verteilteAnwendungen/backend/userdata.php',
    type: 'get',
    dataType: 'JSON',
    success: function (response) {
      console.log(response[0]);
      var len = response.length;
      for (var i = 0; i < len; i++) {
        var id = response[i].id;
        var credit = response[i].pan;
        var cvv = response[i].cvv;
        var name = response[i].name;
        var email = response[i].email;

        var tr_str =
          '<tr>' +
          "<td class='text-center'>" +
          id +
          '</td>' +
          "<td class='text-center'>" +
          name +
          '</td>' +
          "<td class='text-center'>" +
          email +
          '</td>' +
          "<td class='text-center'>" +
          credit +
          '</td>' +
          "<td class='text-center'>" +
          cvv +
          '</td>' +
          '</tr>';

        $('#userTable tbody').append(tr_str);
      }
    },
  });
});
