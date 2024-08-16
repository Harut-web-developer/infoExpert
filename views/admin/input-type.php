<?php if ($type == 0){?>
    <div class="col-sm-12">
        <span>Յոիթուբի հղում</span>
        <input type="url"  name="AcVideoLessons[video]" class="form-control" placeholder="https://www.youtube.com/..." required>
    </div>
<?php }elseif ($type == 1){?>
    <div class="col-sm-12">
        <span>Վիդեոդասեր</span>
        <input type="file" name="video" required>
    </div>
<?php }?>