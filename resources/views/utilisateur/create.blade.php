<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   @include('index.head')
</head>
<body class="register">
    @include('index.navbar')
    <div class="regiter-container">
        <form>
            <div class="row">
                <h2>Register</h2>
                <div class="container">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="text" placeholder="UserId"/>
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="Password" placeholder="Password"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="password" placeholder="Re-enter Password"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="NUMBER" placeholder="PhoneNumber"/>
                    <div class="input-icon"><i class="fa fa-phone"></i></div>
                </div>
            </div>
            <div class="row">
                <div class="col-half">
                    <h4>Gender</h4>
                    <div class="input-group">
                        <input type="radio" name="gender" value="male" id="gender-male"/>
                        <label for="gender-male">Male</label>
                        <input type="radio" name="gender" value="female" id="gender-female"/>
                        <label for="gender-female">Female</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>First Name</h4>
                <div class="input-group">
                    <input type="Text" name="payment-method" placeholder="Please Enter Your First Name" id="payment-method-card" checked="true"/>
                    <div class="input-group input-group-icon"></div>
                    <div class="row"></div>
                </div>
                <h4>Last Name</h4>
                <div class="input-group">
                    <input type="Text" name="payment-method" placeholder="Please Enter Your Last Name" id="payment-method-card" checked="true"/>
                    <div class="input-group input-group-icon"></div>
                    <div class="row"></div>
                </div>
                <h4>E-mail</h4>
                <div class="input-group">
                    <input type="Text" name="payment-method" placeholder="Please Enter Your E-mail" id="payment-method-card" checked="true"/>
                    <div class="input-group input-group-icon"></div>
                    <div class="row"></div>
                </div>
                <h4>Address</h4>
                <div class="input-group">
                    <input type="Text" name="payment-method" placeholder="Please Enter Your Address" id="payment-method-card" checked="true"/>
                    <div class="input-group input-group-icon"></div>
                    <div class="row"></div>
                </div>
                <h4>Terms and Conditions</h4>
                <div class="input-group">
                    <input type="checkbox" id="terms"/>
                    <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
                </div>
                <div class="input-group">
                    <input type="button" value="Submit" style="background-color:#fed136;font-size:20px;font-weight: bold;"/>
                </div>
            </div>
        </form>
    </div>
    @include('index.script')
</body>
</html>