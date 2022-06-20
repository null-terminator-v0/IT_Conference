
<!--closing body div tag-->
</div>

<!--bootstrap script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--validation form and modal trigger script-->
<script type="text/javascript" src="scripts/form-modal.js"></script>

<!--    jQuery code for form validation     -->
<!--****************************************-->
<script>
    $(document).ready(function () {
        $("#signupForm").validate();
    });
</script>

<!--    FOOTER  -->
<!--horizontal line separating the copyright footer-->
<hr>
<div class="text-center text-secondary fst-italic">
<!--    copyright information generated from php code-->
    <?php
        echo 'Copyright &copy - ' . date(y);
    ?>
</div>

</body>
</html>