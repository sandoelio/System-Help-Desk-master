    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
               
                <?php
                    if(isset($_COOKIE['tecnico'])){
                        $namepc = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                        echo "<h5 class='phfooter'>Nome do dispositivo: $namepc</h5>"; 
                    }
                ?>
                    <p class="">&copy; Sandoelio Silva.</p>
                    <h5 class="center">(71) 99999-9999 | email@gmail.com </h5>
                </div>
            </div>
        </div> 
    </footer>
<script src='http://code.jquery.com/jquery-latest.js'></script>   
<script src="js/bootstrap.min.js"></script> 
</body>
</html>   