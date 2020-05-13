<?php require('partials/head.php'); ?>

<h2>Submit Your Name</h2>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li>
                <?= $user->name; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <form action="/users" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>
