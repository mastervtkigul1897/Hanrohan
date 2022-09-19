<script src="assets/js/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
$(document).on('submit','#Register',function(e){
    e.preventDefault();
    $.ajax({
    method:"POST",
    url: "controller/register.php",
    data:$(this).serialize(),
    success: function(data){
    $('#msg2').html(data);
    $('#Register').find('input').val('')
}});
});

$(document).on('submit','#Login',function(e){
    e.preventDefault();
    $.ajax({
    method:"POST",
    url: "controller/login.php",
    data:$(this).serialize(),
    success: function(data){
    $('#msg').html(data);
    $('#Login').find('input').val('')
}});
});

$(document).on('submit','#BuyItemmallRPS<?php echo $rows[0]; ?>',function(e){
    e.preventDefault();
    $.ajax({
    method:"POST",
    url: "controller/buyitemmall_rps.php",
    data:$(this).serialize(),
    success: function(data){
    $('#msg<?php echo $rows[0]; ?>').html(data);
    $('#BuyItemmallRPS<?php echo $rows[0]; ?>').find('input').val('')
}});
});

</script>




