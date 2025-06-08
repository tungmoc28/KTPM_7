    <div class="row">
        <div class="mt-3 col-md-4">
            <label for="giayto">Loại giấy tờ</label>
            <select name="giayto" id="giayto" class="form-control chosen-select" onchange="getthongtin(<?= $id ?>)">
                <option value="">Vui lòng chọn</option>
                <?php
                    foreach($data as $value){
                        ?>
                            <option value="<?= $value['id'] ?>"><?= $value['tengiayto'] ?></option>
                        <?php
                    }
                ?>
            </select>
        </div>
        <div id="vebangupload"></div>
    </div>
    <script type="text/javascript">
        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': {allow_single_deselect: true},
            '.chosen-select-no-single': {disable_search_threshold: 10},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "95%"}
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    </script>