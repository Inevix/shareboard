<div class="col s12">
    <h1 class="center-align">
        ShareBoard
    </h1>
</div>
<?php if (isset($_SESSION['is_logged'])): ?>
    <div class="fixed-action-btn">
        <a href="<?= Helpers::getBaseUrl('shares/add'); ?>"
            class="btn-floating btn-large waves-effect waves-light red"
            title="Share something"
        >
            <i class="material-icons">add</i>
        </a>
    </div>
<?php endif; ?>
<div class="col s12">
    <?php if (count($viewModel)): ?>
        <?php foreach($viewModel as $item): ?>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        <?= $item['title']; ?>
                    </span>
                    <small>
                        <?= $item['create_date']; ?>
                    </small>
                    <hr/>
                    <p>
                        <?= $item['body']; ?>
                    </p>
                </div>
                <div class="card-action">
                    <a href="<?= $item['link']; ?>" target="_blank">
                        Go to website
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="center-align">
            Shared posts have not found!
        </p>
    <?php endif; ?>
</div>
