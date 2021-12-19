$(document).ready(function () {
    $(function (){
    $('form').submit(function (e) {
        e.preventDefault();
        
        var username= $("#Username").val();
        var  password= $("#Password").val();
        $.ajax({
            type: 'GET',
            url: '/verteilteAnwendungen/backend/sql-injection.php/?Username='+ username +'&Password='+ password,
            dataType: "json",
            encode: true,
        }).done(function(response){
            var len = response.length;
            console.log(response);
            for(var i=0; i<len; i++){
                var id = response[i].id;
                var credit = response[i].username;
                var cvv = response[i].vorname;
                var name = response[i].nachname;
                var email = response[i].passwort;
                var tr_str = "<tr>" +
                    "<td align='center'>" + id + "</td>" +
                    "<td align='center'>" + name + "</td>" +
                    "<td align='center'>" + cvv + "</td>" +
                    "<td align='center'>" + credit + "</td>" +
                    "<td align='center'>" + email + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
                $("#userTable").show();
                $('form').hide();
            }
        });

    });
});
$("#userTable").hide();
});