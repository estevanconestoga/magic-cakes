
<form method="post" action="contact.php">
    <label><strong>FULL NAME</strong></label>
    <div>
        <input type="text" name="name" value="<?= @$name ?>">
        <span><?= @$errors['name'] ?></span>
    </div>
        <label><strong>EMAIL</strong></label>
    <div>
        <input type="email" name="email" value="<?= @$email ?>">
        <span><?= @$errors['email'] ?></span>
    </div>
        <label><strong>YOUR QUESTION</strong></label>
    <div>
        <textarea name="message"><?= @$message ?></textarea>
        <span><?= @$errors['message'] ?></span>
    </div>
        <div>
        <button class="btn-contact" type="submit" name="btnSubmit">SUBMIT</button>
    </div>
</form>