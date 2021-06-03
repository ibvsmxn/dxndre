<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    document.querySelectorAll('.nav-link').forEach(item => {
        item.addEventListener('click', event => {
            document.getElementById("navbarNavDropdown").classList.remove("show");
        })
    })
</script>

<footer>
    <span>&copy; <?php echo date("Y"); ?> D'André Phillips</span>
    <span>Website produced by <a href="https://www.linkedin.com/in/dxndre" target="_blank">D'André Phillips</a></span>
</footer>

</body>
</html>
