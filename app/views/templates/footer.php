
<script src="<?= BASEURL;?>/js/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>

<script>
    $(".navbar .container .nav-link").on("click", function() {
        $(".nav").find(".active").removeClas("active");
        $(this).addClass("active");
    });
</script>
</body>

</html>