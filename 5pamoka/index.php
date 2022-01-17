<html>
    <head>
        <title>Formos</title>
    </head>
        <body>
            <div class="header">
                <ul>
                    <li><a href="#"></a>Home"></a></li>
                    <li><a href="#"></a>"About"></a></li>
                    <li><a href="#"></a>"Pages"></a></li>
                    <li><a href="#"></a>"log"></a></li>
                </ul>
            </div>
            <div class="content">
                <h1>Musu title</h1>
                <p>form pamoka</p>
                <!-- <form action="functions.php" method="post">
                    <input type="text" name="user_email" placeholder="email"/>
                    <input type="submit" value="OK" name="post"/>
                     -->
                <!-- </form> -->
               
                <form action="functions.php" method="post">
                    <!-- <input type="number" name="x" placeholder="x">
                    <input type="number" name="y" placeholder="y">
                    <input type="submit" value="ok" name="post"> -->
                    <input type="number" name="x" placeholder="x">
                        <select name="operator">
                            <option value="-">-</option>
                            <option value="+">+</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                    
                        </select>
                        <input type="number" name="y" placeholder="y">
                        <input  type="submit" value="calc">
                       
                </form>
            </div>
        </body>
        
</html>

<style>
.header{background: #0000ff; color: #ccc; border-bottom: 1px solid};

</style>