<?php
include_once 'header.php';
?>
<div class="heroban">
    <div class="topic">Customers</div>
    <table class='reserve'>
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact No</th>
        </tr>
        <!-- <tr>
            <td id="cNo">       c001            </td>
            <td id="fName">     Nihal  </td>
            <td id="lName">  perera       </td>
            <td id="email">      Nihalkaraya@gmailcom   </td>
            <td id='contact'>      0786767677           </td>
        </tr> -->
        <?php
            require_once 'dbh/logindata.php';
        ?>
    </table>

    <div class="del">
        <div class="delete-sec">
            <h4>Enter  Customer ID Want to Remove</h4>
            <form action="dbh/deleteuser.php" method="post">
                <input type="number" name="cId">
            
        </div>
        <div class="buttonlist">
            <button type="submit">Delete</button>
            
        </div>
        </form>
    </div>

</div>



<?php
include_once 'footer.php';
?>