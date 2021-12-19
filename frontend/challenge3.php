<html>
    <head>
        <title>Challenge 3</title>
        <script src="/verteilteAnwendungen/frontend/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="/verteilteAnwendungen/frontend/js/login2.js" type="text/javascript"></script> 
    </head>
    <body>
    <a href="/verteilteAnwendungen/frontend/index.html" class="backLink">Zur&uuml;ck</a>
        <form>
            <p>Username</p><input type="text" size="40" maxlength="250" id="Username" name="Username">
            <p>Password</p><input type="password" size="40" maxlength="250" id="Password" name="Password">
            <input type="submit" name="submit" value="Login">
        </form>
        <table id="userTable" border="1" >
                <thead>
                    <tr>
                        <th width="5%">S.no</th>
                        <th width="20%">Nachname</th>
                        <th width="30%">Vorname</th>
                        <th width="20%">Username</th>
                        <th width="20%">Passwort</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
    </body>
</html>