<?php
echo "Initial PHP setup";
?>

<!DOCTYPE>
<html>
<link rel="stylesheet" href="style.css">

<body>
    <!-- Ways to run php code -->

    <?php echo 'First way to run php code'; ?>

    <?= 'Shorthand for echo tag' ?>.

    <? echo 'this code is within short tags, but will only work ' .
        'if short_open_tag is enabled'; ?>

    <!-- statement expression -->
    <?php if (false): ?>
        This line executes when condition is true.
    <?php else: ?>
        This line executes when condition is false.
    <?php endif; ?>

    <!-- <p <?php if (true): ?> class="highlight" <?php endif; ?>>This is a paragraph.</p> -->
    <p class="<?php echo true ? 'highlight' : ''; ?>">
        This is a paragraph.
    </p>

</body>

</html>
