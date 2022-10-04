<div class="dashHome container min-vh-100 d-flex align-items-center justify-content-center ">
    <div class="p-5">
        <h1 class="text-center">Your information</h1>
        <!-- <?php var_dump($_SESSION) ?> -->
        <form action="" id="dashProfileForm" method="post" onsubmit="return profileEditSubmit()">
            <!-- Username -->
            <label for="uname">Username</label><br>
            <input
             type="text" name="uname" id="uname" class="w-100 p-2"
             value="<?= $_SESSION['uname'] ?>"><br>

            <!-- Previous password -->
            <label for="u_profile_password">Password</label><br>
            <input
             type="password" name="u_profile_password" id="u_profile_password" class="w-100 p-2"
             value="" placeholder="required for updating"><br>

            <!-- New password -->
            <label for="new_password">New password</label><br>
            <input
             type="password" name="new_password" id="new_password" class="w-100 p-2"
             value=""><br>

            <!-- Confirm new password -->
            <label for="confirm_new_password">Confirm new password</label><br>
            <input
             type="password" name="confirm_new_password" id="confirm_new_password" class="w-100 p-2"
             value=""><br>

            <!-- Show password -->
            <input type="checkbox" name="show_pass" id="show_pass">
            <label for="show_pass">Show new password</label>

            <!-- Form submit button -->
            <input type="submit" name="formSubmitBtn" value="profile" class="btn btn-primary w-100 p-3">
        </form>
    </div>
</div>
