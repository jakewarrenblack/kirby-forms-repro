<head>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25383427.js"></script>
    <!-- End of HubSpot Embed Code -->
</head>

<?php

$top_text = $page->subtitle()->kt();
$bottom_text = $page->disclaimer()->kt();

?>

<?php snippet('blocks/header') ?>
<!-- $part->intendedTemplate() -->
<main id="main-content top" tabindex="-1" role="main">

    <div class="top-page-padding">


        <div class="edges-2xl">
            <div class="join-us-intro">
                <?= $page->title()->isNotEmpty() ? '<h1 class="sr-only">' . $page->title() . '</h1>' : '' ?>                

                <?php if ($top_text->isNotEmpty()) : ?>
                    <p>
                        <?= $top_text ?>
                    </p>
                <?php endif ?>
            </div>            

            <?php snippet('form') ?>                        

            <?php if ($bottom_text->isNotEmpty()) : ?>
                <div class="p-sm form-bottom-text">
                    <?= $bottom_text ?>
                </div>
            <?php endif ?>
        </div>
    </div>

    <?php snippet('footer') ?>
</main>

<!-- <script src="/scripts/scroll-progress.js" defer></script> -->
<!-- <script src="/scripts/burger-menu.js" defer></script> -->

<?= js([
    'assets/js/scroll-progress.js',
    'assets/js/burger-menu.js',
    '@auto',
]) ?>

</body>

</html>