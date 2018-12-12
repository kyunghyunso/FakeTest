<script>
    sessionStorage.setItem('questions', JSON.stringify(<?=$questions?>));
    //document.write(sessionStorage.getItem('questions'));
</script>
<?php
    redirect('testing/question/1');
?>