<div class="message-box" style="min-height: calc(100vh - 51px);text-align: center;">
        <br>
        <br>
        <div class="message-content">
            <form role="form" method="post" onSubmit="return check();" action="./Login/check_login.php" enctype="multipart/form-data" target="checklogin">
                <div class="pop-up">
                    <h1>
                        <p align="center">
                            | REGISTER | 
                        </p>
                    </h1>
                </div>
                <p>
                    Username : <input class="input100 form-control" type="text" id="username" name="username" placeholder="username" style="text-align: center;">
                </p>
                <p>
                    Password : <input class="input100 form-control" type="password" id="password" name="password" placeholder="password" style="text-align: center;">
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