<script>

        function refresh(){
        <?php 
            if($_SESSION['url']!=''){ 
        ?>
            window.location = "<?PHP echo $_SESSION['url']; ?>";
        <?php 
           } else{
        ?>
            window.location = "admin/index.php"
        <?php 
            }
        ?>
        }

        function error(){ 
          
            // $("#span_sale").html('<font color="green"><i class="fa fa-check" aria-hidden="true"></i></font>');
            // $("#span_stock").html('<font color="green"><i class="fa fa-check" aria-hidden="true"></i></font>');
            
            alert("Can not login. Please check your username and password.");
            document.getElementById("error").innerHTML = "username and password.";
            $("#loadMe").modal('hide');
        }

        function check(){
            
            var user = document.getElementById("username").value;
            var pass = document.getElementById("password").value;
            
            if(user == ""){

                $("#span_sale").html('<font color="green"><i class="fa fa-check" aria-hidden="true"></i></font>');
                $("#span_stock").html('<font color="green"><i class="fa fa-check" aria-hidden="true"></i></font>'); 
                $("#loadMe").modal('hide');
                alert("Please input username.");
                document.getElementById("error").innerHTML = "Please input username."; 
                return false;
            }else if (pass == ''){
              
                $("#span_sale").html('<font color="green"><i class="fa fa-check" aria-hidden="true"></i></font>');
                $("#span_stock").html('<font color="green"><i class="fa fa-check" aria-hidden="true"></i></font>'); 
                $("#loadMe").modal('hide');
                alert("Please input password.");
                document.getElementById("error").innerHTML = "Please input password."; 
                return false;
            }

            return true;

        }

    </script>
    
    
    
    <div class="message-box" style="min-height: calc(100vh - 51px);text-align: center;">
        <br>
        <br>
        <div style="margin:auto;width: 20%;background: whitesmoke;border-radius: 12px;border-style: dotted;">
        <iframe id="checklogin" name="checklogin" src="" style="width:0px;height:0px;border:0"></iframe>
            <form role="form" method="post" action="check_login.php" onSubmit="return check();" target="checklogin">
                <div class="pop-up">
                    <h1>
                        <p align="center">
                            | LOGIN | 
                        </p>
                    </h1>
                </div>
                <p>
                    Username : <input type="text" id="username" name="username" class="input100 form-control" style="text-align: center;border-radius: 5px;" placeholder="Username" />
                </p>
                <p>
                    Password : <input type="password" id="password" name="password" class="input100 form-control" style="text-align: center;border-radius: 5px;" placeholder="Password" />
                    <div align="center" id="error" name="error" style="color:#F00;padding:8px;"></div>
                </p>
                <br>
                <p style="border-bottom-style: ridge;width: 80%;margin: auto;"></p>
                <br>
                <div style="height:50px;">
					<button type="submit" class="btn-green" style="width: 30%;height: 40px;font-weight: 900;">
						Login
					</button>
                </div>
                <br>
            </form>
        </div>
    </div>