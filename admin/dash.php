<?php
include_once 'header.php'
?>
<div class="containers">
    <div class="flex1">
        <div class="con1">
            dashboard
        </div>
        <div class="flex2">
            <div class="con3">
                customercount
                <div class="count">56</div>
            </div>
            <div class="con4">
                order count
                <div class="count">59</div>
            </div>
        </div>
    </div>
    <!-- clock id for js -->
    <div class="con2">
        <center>
        <div class="clock">
            <table>
                <tr>
                    <td>
                        <span id="hours"></span>
                    </td>
                    <td>:</td>
                    <td>
                        <span id="minutes"></span>
                    </td>
                    <td>:</td>
                    <td>
                        <span id="seconds"></span>
                    </td>
                </tr>
            </table>
            <!-- <br> -->
            <div class="dateset">
                <span id="date"></span>/
                <span id="month"></span>/
                <span id="year"></span>
            </div>
        </div> 
        </center>  
    </div>
</div>

<?php
include_once 'footer.php'

?>