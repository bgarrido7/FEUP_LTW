

<h3> <?php echo htmlentities($houseName);  ?></h3>

<p>arrival date: <?php echo htmlentities($arriveDate);  ?></p>
<p>stay length: <?php echo htmlentities($stayLenght);  ?> days </p>


<form action='../actions/action_deleteReserv.php' method="post">
<input type="hidden" name="owner">
<input type="hidden" name="houseID" value="<?php echo htmlentities($touristID);  ?>">
<input type="hidden" name="arrival" value="<?php echo htmlentities($arriveDate); ?>">
<input type="submit" name="submit" value="Delete Reservation">
</form>

    

     