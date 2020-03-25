<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="libs/css/profile.css">
<link rel="stylesheet" type="text/css" href="libs/css/custom.css">

<?php include "header.php"; ?>


<div class="container register">
        <div class="row">




<div class="col-md-8 register-right">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Inscription</h3>

                <form id="_user-form" method="post" action="user_register.php" role="form">

                    <div class="controls">
                    <div class="row register-form">

                        
                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder=" Nom *" name="firstname" value="" />
                            </div>
                            
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Prénom *"  name="lastname" value="" />
                            </div>
                           
                        
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder=" Email *" name="email" value="" />
                            </div>
                                                      
                           <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mot de passe *" name="password" value="" />
                            </div>

                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" name="phone" />
                            </div>
                    
                            <!--<input type="submit" class="btnRegister"  value="Register"/>-->
                            <input type="submit" class="btn btn-success btn-send" value="Inscription">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                           
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="male" checked>
                                <span> Homme </span> 
                            </label>
                            
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="female">
                                <span>Femme </span> 
                            </label>
                        
                            </div>
                          </div>
                    </div>
                 </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
        



<script src="javascript/validator.js"></script>

<script>
$(function () {
    $('#_user-form').validator();
    $('#_user-form').on('submit', function (e) {

        if (!e.isDefaultPrevented()) {
            var url = "user_register.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),

                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#_user-form').find('.messages').html(alertBox);
                       // $('#contact-form')[0].reset();
                        //grecaptcha.reset();
                    }
                }
            });
            return false;
        }
    })
});

</script>
            
                