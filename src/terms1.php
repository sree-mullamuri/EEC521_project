        <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
<section class="product-detail rmsa ulwec container cont-size ">
    <button class="accordion">Terms & Condition</button>
                <?php
$ret=mysqli_query($con,"select * from tourfacts where id=1 ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

<div class="panel">
  <p><?php echo $row['description1']; ?></p>
</div>
<?php } ?>
    <button class="accordion">Payment Terms</button>
                <?php
$ret=mysqli_query($con,"select * from tourfacts where id=1 ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

<div class="panel">
  <p><?php echo $row['description2']; ?></p>
</div>
<?php } ?>

    <button class="accordion">Cancellation Policy</button>
                <?php
$ret=mysqli_query($con,"select * from tourfacts where id=1 ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

<div class="panel">
  <p><?php echo $row['description3']; ?></p>
</div>
<?php } ?>

</section>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
