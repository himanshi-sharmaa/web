z<html>
<head>
    <title>Main registration page</title>
    <style>
        body{
            background: #ccc;
        }
        .container{
            font-family: sans-serif;
            font-size: 15px;
            margin-top: auto;
            padding:10px;
        }
        #sub{
            font-size: 20px;
            padding: 5px;
            border-radius: 5px;
            background:green;
        }
        #sub:hover{
            background: red;
        }
    </style>
    <script src="validationfile.js">
      function validate(){
            var name=document.f1.name.value;
            var reg=document.f1.regno.value;
            var email=document.f1.email.value;
            var ph=document.f1.phoneno.value;
            var address=document.f1.adress.value;
            alert("Hello");
            if(name===""){
                alert("Name cannot be empty");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <center>
<div class="container">
    <form name="f1" method="post" action="#" onsubmit="return validate()" >
        <h1>USER DETAILS</h1>
    <table>
        <tr>
        <th>Name:</th>
        <td><input type="text" name="name"></td>
        </tr>
        
        <tr>
        <th>Reg no:</th>
        <td><input type="text" name="regno"></td>
        </tr>
        
        <tr>
        <th>Phone no:</th>
        <td><input type="text" name="phoneno"></td>
        </tr>
        
        <tr>
        <th>Email(email):</th>
        <td><input type="email" name="email"></td>
        </tr>
        
        <tr>
        <th>Gender(radiobutton):</th>
        <td><input type="radio" value="male" name="gender">Male<br>
            <input type="radio" value="female" name="gender">Female<br>
            <input type="radio" value="other" name="gender">Other
        </td>
        </tr>
        
        <tr>
        <th>Subjects(checkbox):</th>
        <td>
            <input type="checkbox" name="subject" value="Maths">Maths<br>
            <input type="checkbox" name="subject" value="Science">Science<br>
            <input type="checkbox" name="subject" value="SST">Sst
        </td>
        </tr>
        
        <tr>
        <th>DOB(Date):</th>
        <td><input type="date" name="date"></td>
        </tr>
        
        <tr>
        <th>Address(textbox):</th>
        <td><textarea id="address" rows="3" cols="50">Enter your address here...
            </textarea></td>
        </tr>
        
        <tr>
        <th>Area(dropdown):</th>
        <td><select>
                <option name="area" value="tilak nagar">Tilak nagar</option>
                <option name="area" value="janakpuri">Janakpuri</option>
                <option name="area" value="dwarka">dwarka</option>
            </select>
        </td>
        </tr>
        <tr>
            <td><center><input type="submit" name="submit" value="submit" id="sub"></center></td>
        </tr>
    </table>
    </form>
</div>    
    </center>
</body>
</html>