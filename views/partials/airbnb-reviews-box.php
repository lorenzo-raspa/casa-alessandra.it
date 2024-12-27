<!-- AirBnB review box -->
<?php foreach($airbnbReviews as $review): ?>
    <div class="review">
        <div class="review-meta-box">
            <div class="review-rate-box airbnb-review">
                <span class="review-rate"><?=$review["rate"]?></span>
            </div>
            <div class="review-info-box">
                <h3 class="review-author"><?= $review["author"]?> - <span class="review-country"><?= $review["country"]?></span></h3>
                <h4 class="review-date"><?= $review["date"]?></h4>
            </div>
        </div>
        
        <p class="review-content"><?= $review["content"] ?></p>
    </div>
<?php endforeach ?>
<!-- // end airbnb review box -->
