<?php
include_once 'header.php';
?>
<div class="heroban">
    <div class="topic">Reservations</div>
    <table class='reserve'>
        <tr>
            <th>Reservation No</th>
            <th>Event</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        <!-- <tr>
            <td id="oNo">R001</td>
            <td id="event">Birthday Party</td>
            <td id="customer">Mr perera</td>
            <td id="date">2023 / 04 / 3</td>
            <td id='Time'>23:76</td>
        </tr> -->
        <?php
            require_once 'dbh/reserve.php';
        ?>
    </table>

    <div class="del">
        <div class="delete-sec">
            <h4>Enter  Revervation No. Want to Delete</h4>
            <form action="dbh/deleteorder.php" method="post">
                <input type="number" name="rId">
            
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