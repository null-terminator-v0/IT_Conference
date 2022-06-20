<?php
    $title = 'index';
    require_once "includes/header.php";
?>


    <h1 class="display-4 text-center text-secondary"><u>IT CONFERENCE</u></h1>
    <h1 class="display-6  text-center">Registration Page</h1>
    <br>

    <form name="signupForm" method="post">
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" autocomplete="off" required>

        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <select class="form-select" aria-label="Default select example" name="profession" id="profession" required>
                <option selected disabled hidden>select...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" autocomplete="off" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <!--    Button to submit sign up information and trigger modal to determine whether the data was saved into the database   -->
        <div class="d-grid gap-2">
            <button type="submit" id="submit" class="btn btn-dark" onclick="return modalToggle()">Submit</button>
        </div>
    </form>
<!--    data-bs-toggle="modal" data-bs-target="#modal"-->

    <!-- Modal to determine whether data was saved into the database    -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



<?php require_once "includes/footer.php"; ?>