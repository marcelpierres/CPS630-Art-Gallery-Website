<!DOCTYPE html>
 <?php

?> 

<html>
<head>
      <title>Maintain</title>
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
         p.spacebottom{
            padding-bottom: 150px;
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
                <h1> </h1>
            </div>
        </div>
        
        <!-- Main Area -->
        <div>
        <h4>View Artwork</h4>
        <form action="http://www2.scs.ryerson.ca/~mdsamuel/veiwartwork.php">
    <input type="submit" value="VIEW EXISTING ART" />
        </form>
        <div>
        <h4>Add Artwork</h4>
        <form method="POST" action="http://www2.scs.ryerson.ca/~mdsamuel/addartwork.php">
            Title of Artwork
            <input type="text" name="artname"><br>
            Artist
            <input type="text" name="artist"><br>
            Date of Creation
            <input type="date" name="datecreate"><br>
            Location
            <input type="text" name="location"><br>
            Colour Type
            <input type="text" name="colour"><br>
            Artwork Dimensions
            <input type="text" name="dim"><br>
            Artwork Price
            <input type="text" name="price"><br>
            Artwork Genre
            <select name="genre">
                <option value="selectNull">Select</option>
                <option value="1">Gothic</option>
                <option value="2">Renaissance</option>
                <option value="3">Baroque</option>
                <option value="4">Pre-modern</option>
                <option value="5">Modern</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        
        <div>
        <h4>Delete Artwork</h4>
        <form method="POST" action="http://www2.scs.ryerson.ca/~mdsamuel/deleteartwork.php">
            Title of Artwork
            <input type="text" name="artname"><br>
            Artist
            <input type="text" name="artist"><br>
            Date of Creation
            <input type="date" name="datecreate"><br>
            Location
            <input type="text" name="location"><br>
            Colour Type
            <input type="text" name="colour"><br>
            Artwork Dimensions
            <input type="text" name="dim"><br>
            Artwork Price
            <input type="text" name="price"><br>
            Artwork Genre
            <select name="genre">
                <option value="selectNull">Select</option>
                <option value="1">Gothic</option>
                <option value="2">Renaissance</option>
                <option value="3">Baroque</option>
                <option value="4">Pre-modern</option>
                <option value="5">Modern</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        
        
        
        
        </div>
        <!-- /Main Area -->

<p class="spacebottom"></p> 
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