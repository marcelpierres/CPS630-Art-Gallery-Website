<!DOCTYPE html>
 <?php

?> 

<html>
<head>
     <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #frontholder{
            width: 100%;
            display: block;
            position: relative;
            height: 320px;
            background-image: url('res/banner.png');
            background-repeat: stretch;
            background-position: center;
            
        }
        
        h1{
            font-size: 120px;
            font-weight: 600;
        }

        #bannerText{
            position: fixed;
            color: white;
            top: 150px;
            left: 40px;
    
        }

        #form{
            padding-left: 40px;
            padding-top: 40px;
        }

        select{
            margin-right: 20px;
        }

        footer {
            position:fixed;
            bottom:0px;
            height:60px;
            width:100%;
            background-color:#7a9ec8;
            color:white;
        }
        
        footer p{
            padding: 15px;
        }

        #infoDisp{
            margin-top: 25px;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="/">TEAM 7</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">About Us <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">Blogs <span class="sr-only"></span></a>
                </li>
            </ul>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Shopping Cart</button>
        
        
    </nav>
    <div class= "modal fade" id="myModal" role="dialog">   
        <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <?php
          include 'shoppingcarth.php';
          ?>
        </div>
          
        <div class="modal-body">
          <form>
            Art Work <select>
                <option value="selectNull">Select</option>
                <option value="gothic">Gothic</option>
                <option value="renaissance">Renaissance</option>
                <option value="baroque">Baroque</option>
                <option value="premodern">Pre-modern</option>
                <option value="modern">Modern</option>
              </select>
            <br> <br>
              
            Amount: <input type="number" id="amt" value="1" >
            <br><br>
              
            Shipping Plan:
            <br>
            
            <p>Same Day Shipping: <input type="radio" name="plan" value="19.99" /> $19.99</p>
            <br>
            
            <p>Express Shipping:  <input type="radio" name="plan" value="10.99"/>  $10.99</p>
            <br>
              
            <p>Standard Shipping: <input type="radio" name="plan" value="5.99"/>  $5.99</p>  
            <br>
            <br>
            <br>
           <button type="button" onclick="total()"> Subtotal</button> subtotal:<span id="subtotal"> </span>
              <br><br>
            <input type="reset" />
            <input type="submit"/>
            </form>
        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>  
    </div>
  </div>
       
<!--   -->
        <div id="frontholder">
            <div id="bannerText">
                <h1>Team 7</h1>
            </div>
        </div>
        
        <!-- Main Area -->
        <div class="container" id="infoDisp">
                <div class="row">
                    <div class="col">
                        <img src="http://l7.alamy.com/zooms/9f5bb8e68d6d4ba58563fbb36ab14537/jan-brueghel-the-elder-1568-1625-flemish-artist-aewwbn.jpg" style="width:600px;">
                    </div>
                    <div class="col">
                        <p>Jan Brueghel the Younger</p>
                        <p>DOB / Death: September 13, 1601/September 1, 1678</p>
                        <p>Place of Living: Antwerp, Belgium</p>
                        <p>Genre: Baroque</p>
                        <p>Famous Works: Allegory of War</p>
                    </div>
                </div>
            </div>
        <!-- /Main Area -->


        <footer>
            <p><strong>TEAM # 7</strong> -- Made by: Marcel-Pierre Douglas, Sandy He, Aumkar Prajapati -- <strong>TEAM # 7</strong></p>
        </footer>
        
        <script type="text/javascript">
         function total(){
        var radio = document.getElementsByName('plan'); 
        var amount = parseFloat(document.getElementById('amt').value); 
       
        var plan = 0;
        for (var i=0, length = radio.length; i < length; i++){
           if (radio[i].checked)
               {
                   plan = parseFloat(radio[i].value);
                   break;
               }
            
            
        }
        
        var subtotal = plan * amount;
        document.getElementById("subtotal").innerHTML= subtotal;
    }
    </script>
        
    </body>
</html>  
