<?php
$items = isset($items) ? $items : [];
?>

<div class="container">
    <?php foreach ($items as $item) { ?>
    <div class="product-item-wrapper <?php echo $item["class"]; ?>">
        <div class="product-item">
            <div class=" product-image">
                <figure>
                    <img src="<?php echo $item["image"]; ?>" alt="image-event-content">
                </figure>
            </div>
            <div class="col-lg-10 product-info">
                <h4 class="data-item-title">
                    <?php echo $item["title"]; ?>
                </h4>
                <p class="data-item-description">
                    <?php echo $item["description"]; ?>
                </p>
                <table class="data-item-table w-auto">
                    <?php foreach ($item["prices"] as $key=>$price) { ?>
                        <tr>
                            <td class="small">
                                <?php echo $key; ?>
                            </td>
                            <td class="small">
                                <?php echo $price; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <div class="order-wrapper">
                    <span class="small">Anzahl:</span>
                    <select>
                        <option value="v1">1</option>
                        <option value="v2">2</option>
                        <option value="v3">3</option>
                        <option value="v4">4</option>
                        <option value="v5">5</option>
                    </select>
                    <button class="outline">In den Warenkorb</button>
                </div>
            </div>
        </div>

    </div>
    <?php } ?>
</div>
