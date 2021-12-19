<html>
    <head>
        <title>Interner Bereich</title>
        <script src="/verteilteAnwendungen/frontend/scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="/verteilteAnwendungen/frontend/scripts/intern.js" type="text/javascript"></script> 
    </head>
    <body>
        <div class="container"> 
        <?php
            $username = $_GET['username'];
            $groupId = $_GET['GroupId'];

            if($username != null && $groupId != null){

            
        ?>

            <a href="/verteilteAnwendungen/frontend/index.html" class="backLink">Zur&uuml;ck</a>
            <table id="userTable" border="1" >
                <thead>
                    <tr>
                        <th width="5%">S.no</th>
                        <th width="20%">Name</th>
                        <th width="30%">Email</th>
                        <th width="20%">Credit Card</th>
                        <th width="20%">CVV</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <?php 
            } else { ?>
            <div class="error">
                <p>unauthorized</P>
            </div>
                
            <?php
            }
            ?>
        </div>
    </body>
</html>