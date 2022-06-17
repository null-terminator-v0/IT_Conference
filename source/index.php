<?php
$title = 'index';
require_once "includes/header.php";
?>


    <h1 class="display-4 text-center text-secondary"><u>IT CONFERENCE</u></h1>
    <h1 class="display-6  text-center">Registration Page</h1>
    <br>

    <form>
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstname" autocomplete="off" required>

        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastname" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <select class="form-select" aria-label="Default select example" id="profession" required>
                <option selected disabled hidden>select...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="off" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn bg-color">Submit</button>
        </div>
    </form>


<?php require_once "includes/footer.php"; ?>