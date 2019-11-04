<html>
    <head>
        <title>
            Clothing Store
        </title>
        <link href="7styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <h1 style="color:red"> Label MN </h1>
        </div>
         <div id="cloths">  </div>
        <div id="clr">
            
            <div>
           
        <div id="sh"></div>
        <div id="hd"></div>    
        </div>
            <form action="2nd.php" method="post">
        <div>
            <h1>Select</h1><br>
            
            <ul>
                <li>
              T-shirt: <input type="checkbox" name="cloths" value="T-shirt"> 
                </li>
                <li>
              Hoodie: <input type="checkbox" name="cloths" value="Hoodie">
                </li>
            </ul>
            <div>
            <h1>Clothing items</h1> <br>
            Men: <input type="radio" name="d1" value="men"><br>
            Women: <input type="radio" name="d1" value='women'><br>
            Children:<input type="radio" name="d1" value="child">
            </div>
            <div>
                <h3 style="display:inline-block;">Number</h3>
                <select name="qa">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    
                </select>
                <h3 style="display:inline-block;">
                 Size
                </h3>
                <select name="si" required>
                    <option>xs</option>
                    <option>s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                    <option>xxl</option>
                        
                </select >
                <h3  style="display:inline-block;">
                    Color
                </h3>
                <select name="co">
                    <option>Red</option>
                    <option>Blue</option>
                    <option>Green</option>
                    <option>Yellow</option>
                </select>
                
            </div>
            
            
        </div>
                 <center> <input type="submit" name="b1" value="SUBMIT"> </center>

                </form>
        </div>
        <div>
                       
        </div>
         
        
    </body>
</html>
