<?php
$class = isset($class) ? $class : '';
$btn = isset($btn) ? $btn : '';
$file = isset($file) ? $file : '';
$items = isset($items) ? $items : [];
$select = isset($select) ? $select : [];
$labels = isset($labels) ? $labels : [];
$label = isset($label) ? $label : '';
$email = isset($email) ? $email : '';
$textarea = isset($textarea) ? $textarea : '';
$alert = isset($alert) ? $alert : '';
$checkBoxes = isset($checkBoxes) ? $checkBoxes : '';
$checkBox = isset($checkBox) ? $checkBox : '';
?>
<div class="ce-forms">
    <div class="container">
        <div class="form-inline">


            <div class="form-group">
                <label class="control-label" for="verwaltersuche-269-datepicker-1">Bitte wählen
                    <span class="required">*</span>
                </label>
                <div class="input">
                    <div class="special-input-wrapper datepicker-filter">
                        <input required="required" class="datepicker-filter-input hasDatepicker" id="verwaltersuche-269-datepicker-1" type="text" name="tx_form_formframework[verwaltersuche-269][datepicker-1][date]" placeholder="DD-MM-JJJJ" readonly="readonly"><span class="input-placeholder">DD-MM-JJJJ*</span><input type="hidden" name="tx_form_formframework[verwaltersuche-269][datepicker-1][dateFormat]" value="DD-MM-JJJJ"><span class="input-placeholder">DD-MM-JJJJ*</span>
                    </div>
                </div>
            </div>
        </div>
        <form class="needs-validation" novalidate>
                <?php foreach ($items as $val) { ?>
                    <?php if( !empty( $val['title'] ) ): ?>
                        <p>
                            <?php echo $val['title']; ?>
                        </p>
                    <?php endif; ?>
                    <?php foreach ($val['input'] as $item) { ?>
                        <div class="special-input-wrapper">
                        <?php if( !empty( $item['placeholder'] ) ): ?>
                                <input class="special-input" type="text" placeholder=" <?php echo $item['placeholder']; ?>">
                        <?php endif; ?>
                        </div>
                    <?php } ?>
                <?php } ?>
                <select>
                    <?php foreach ($select as $val) { ?>
                        <?php if( !empty( $val['option'] ) ): ?>
                            <option>
                                <?php echo $val['option']; ?>
                            </option>
                        <?php endif; ?>
                    <?php } ?>
                </select>
                <?php foreach ($checkBoxes as $val) { ?>
                    <?php if( !empty( $val['title'] ) ): ?>
                        <p><?php echo $val['title']; ?> </p>
                    <?php endif; ?>

                    <?php foreach ($val['checkBox'] as $item) { ?>
                        <div class="cd-input-wrapper">
                            <?php if( !empty( $item['text'] ) ): ?>
                                <input type="checkbox" id="checkbox1">
                                <label class="checkbox-label" for="checkbox1"> <?php echo $item['text']; ?></label>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                <?php } ?>
                <?php if( !empty( $textarea ) ): ?>
                <div class="special-input-wrapper">
                    <textarea  class="special-input" placeholder="<?php echo $textarea; ?>">
                    </textarea>
                </div>
                <?php endif; ?>
                <div class="special-input-wrapper">
                    <textarea  class="special-input" placeholder="textarea">
                    </textarea>
                </div>
                <?php if( !empty( $btn ) ): ?>
                    <input type="submit" value="<?php echo $btn; ?>">
                 <?php endif; ?>
                <?php if( !empty( $file ) ): ?>
                    <input type="file" value="<?php echo $file; ?>">
                <?php endif; ?>
            </form>
    </div>
</div>


