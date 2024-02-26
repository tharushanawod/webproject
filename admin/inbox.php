<?php
include_once 'header.php';
?>
<div class="heroban">
    <div class="topic">Inquiries</div>
    <table class='reserve'>
        <tr>
            <th>Msg ID</th>
            <th>Cus_ID</th>
            <th>Customer</th>
            <th>Message</th>
            <th width="400px">reply</th>
        </tr>
        <?php
            require_once 'dbh/msgs.php';
        ?>
        <!-- <tr>
            <td id="cNo">c001</td>
            <td id="msg">i wanto bla bla bla bla</td>
            <td id="reply">oke bla bla</td>
            <td id="date">2023 / 04 / 3</td>
            <td id='Time'>23:76</td>
            <td id="reply"><input type="text" name="" id="">
                            <button type="submit">Reply</button>
                            </td>
        </tr> -->
    </table>

    <!-- <div class="buttonlist">
        <button type="button">Delete</button>
        
    </div> -->

</div>



<?php
include_once 'footer.php';
?>