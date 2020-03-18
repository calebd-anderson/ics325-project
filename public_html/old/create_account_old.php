<?php
require('header');
?>
    <fieldset>
    <legend>Movie Rental Form</legend>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <table style="border: 0px;">
            <tbody>
                <?php
                    //PHP
                ?>
            </tbody>
        </table>   
        <div><span class="texterror"><strong>* Required field:</strong></span></div>
        <span class="text">Please enter your name:</span>
        <span class="texterror">* <?php echo $nameErr;?></span>
        <input type="text" placeholder="Your name." name="user" size="20" maxlength="25" class="hilightable" />                
        <span class="text">Quantity(&lt;=20):</span>
        <span class="texterror">* <?php echo $quantityErr;?></span>
        <input type="text" placeholder="<=20" name="quantity" size="2" maxlength="2" class="hilightable"/>
        <input type="submit" value="Submit Order" class="btn" />
    </form>
    </fieldset>
    <aside style="background-color:black; position: absolute;">
        <samp>
            <?php
                //PHP
            ?>
        </samp>
    </aside>   
<?php
require('footer');
?>
