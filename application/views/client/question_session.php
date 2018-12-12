<script>
    sessionStorage.setItem('questions', JSON.stringify(<?=$questions?>));
    //document.write(sessionStorage.getItem('questions'));
    window.location.replace("/testing/question/1");
</script>
