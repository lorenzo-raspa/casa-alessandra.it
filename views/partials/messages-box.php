<!-- Display error messages -->
<div class="input-box display-messages-box">
    <?php if(!empty($message) && !empty($message["success"])):?>
        <div class="success-message-box">
            <h4><?= $message["success"] ?></h4>
        </div>
    <?php elseif(!empty($message) && !empty($message["error"])): ?>
        <div class="error-message-box">
            <h4><?= $message["error"] ?></h4>
        </div>
    <?php endif; ?>
</div>