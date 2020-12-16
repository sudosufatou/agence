<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?=WEB_ROOT;?>public/css/style.css">
    <title></title>
    <style>
        .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

        </style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a test</h3>
                                <div class="row register-form">
                                    <div class="col-md-6"> <label>Numéro du compte</label>
                                    <div class="form-group">
                                            <input type="text" class="form-control" placeholder="" value="" />
                                        </div> <label>Prénom</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Prenom *" value="" />
                                        </div> <label>Nom</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom *" value="" />
                                        </div> <label>Genre</label>
                                        <div class="form-group">
                                        <select class="form-control" id="xyz">
                                                                <option>M</option>
                                                                <option>F</option>
                                        </select>

                                        </div><label>Date de Naissance</label>

                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Date de Naissance*" value="" />
                                        </div> <label>Lieu de Naissance</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="" value="" />
                                        </div>  <label>Parrain</label>            
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="" value="" /> 
                                        </div><label>Missionnaire</label> 
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="" value="" />
                                        </div> <label>Compagnie</label> 
                                        <div class="form-group">
                                           
                                            <select class="form-control" id="xyz">
                                                               
                                        </select>
                                        </div> <label>Date Aller</label>

                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="" value="" />
                                        </div> <label>Catégorie</label> 
                                      
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="" value="" />
                                        </div>  <label>Destination Aller</label> 
                                        <div class="form-group">
                                            
                                            <select class="form-control" id="xyz">
                                                               
                                                               </select>
                                        </div>
                                        
                                    
                                    </div>
                                    <div class="col-md-6">

                                    <div class="form-group">  <label>Date Retour</label> 
                                    <div class="form-group">
                                            <input type="date"/>
                                            <input type="time" class=""/>
                                        </div> <label>Destination Retour</label> <br>

                                        <div class="form-group"> 
                                            <select class="form-control" id="xyz">
                                                               
                                                               </select>
                                            
                                        </div> <label>N°Bus</label>

                                    </div>         
                                  
                                     
                                        

                        <div class="form-group">
                        <select class="form-control" id="xyz">
                       
                       </select>
    
</div>
                                        <label>Bus</label>
                                        <div class="form-group">
                                            <select class="form-control" id="xyz">
                                                               
                                                               </select>
                                        </div> 
                                        <label>Classe</label>
                                        <div class="form-group">
                                            <select class="form-control" id="xyz">
                                                               
                                                               </select>
                                        </div> 
                                        <label>Hotel Medine</label>

                                        <div class="form-group">
                                            <select class="form-control" id="xyz">
                                                               
                                                               </select>
                                        </div> <label>Chambre Medine</label>
                                        <div class="form-group">
                                            <select class="form-control" id="xyz">
                                                               
                                                               </select>
                                        </div> <label>Hotel Makkah</label>

                                        <div class="form-group">
                                            <select class="form-control" id="xyz">
                                                               
                                                               </select>
                                        </div> <label>Koulou Ziarra Médine</label>

                                        <div class="form-group">
                                            
                                            <input type="date"/>
                                            <input type="time" class=""/>
                                        </div> <label>Koulou Ziarra Makkah</label>


                                        <div class="form-group">
                                            
                                            <input type="date"/>
                                            <input type="time" class=""/>
                                        </div>
                                      
                                    </div>
                                    <input type="submit" text-align:center class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Prenom *" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Parrain*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Missionnaire *" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                    
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>
</html>