<?php require('partials/head.php'); ?>

    <h2>My Tasks</h2>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Submit Your Name</h2>

    <form action="/names" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>
