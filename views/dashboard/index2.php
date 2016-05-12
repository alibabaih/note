<script>
    function confirm_delete() {
        return confirm('Вы уверены?');
    }
    $(document).ready(function() {
        $('.tr').on('click', function() {
            $(this).toggleClass('truncate-show');
        });
    });
</script>
<style>
    #tr {
        cursor: pointer;
    }
    .empty-record {
        height: 22px;
    }
</style>
<main class="light-grey">

    <ul class="collapsible main-accordion" data-collapsible="accordion">
        <li>
            <div class="collapsible-header">
                <h5 class="header">Август</h5>
            </div>
            <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                        <h6 class="header" style="float: left;">Календарь</h6>
                        <h6 class="header">Август</h6>

                        <div class="row"><div class="col s12 m12 l12" style="text-align: center;"><div style="    margin-top: 10px;display: inline-block; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 1px 5px 0 rgba(0, 0, 0, 0.06);   background-color: #F7F7F7;border-radius: 2px;">
                                    <?php for($i = 1; $i <= 31; $i++) { ?>
                                        <p style="text-align: center;margin: 0;padding: 5px; float: left; width: 45px; height: 45px;"><a style="color:#505050;padding-top: 6px;display: block;" href="#<?php echo $i; ?>"><?php echo $i; ?></a></p>
                                    <?php } ?>
                                </div></div>
                        </div>

                        <?php foreach ($this->month8 as $key => $value): ?>
                            <div id="grid" data-columns>
                                <div class="card">
                                    <div class="when" class="row">
                                        <div class="col s12">

                                            <h5 class="date-time"><a name="<?php echo date('j', strtotime($value['date'])); ?>"></a><?php echo date('d.m.y', strtotime($value['date'])); ?> в <?php echo substr($value['time'], 0, 5); ?></h5>
                                            <small class="where">
                                                <?php if($value['place'] == 'SOME') { echo SOME; } ?>
                                                <?php if($value['place'] == 'BOTTOM') { echo BOTTOM; } ?>
                                                <?php if($value['place'] == 'TOP') { echo TOP; } ?>
                                                <?php if($value['place'] == 'EMPTY_FIELD') { echo EMPTY_FIELD; } ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <p class="center-align person"><?php echo $value['name']; ?></p>
                                    <div class="divider person"></div>
                                    <p class="center-align person"><?php echo $value['phone']; ?></p>

                                    <?php if(empty($value['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                    <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $value['record']; ?></p>
                                    <div class="divider"></div>
                                    <div class="row edit">
                                        <div class="col s12">
                                            <span class="edit"><a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $value['id']; ?>">Удалить</a> | <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $value['id']; ?>">Изменить</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                <h5 class="header">Сентябрь</h5>
            </div>
            <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                        <h6 class="header" style="float: left;">Календарь</h6>
                        <h6 class="header">Сентябрь</h6>

                        <div class="row"><div class="col s12 m12 l12" style="text-align: center;"><div style="    margin-top: 10px;display: inline-block; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 1px 5px 0 rgba(0, 0, 0, 0.06);   background-color: #F7F7F7;border-radius: 2px;">
                            <?php for($i = 1; $i <= 31; $i++) { ?>
                                <p style="text-align: center;margin: 0;padding: 5px; float: left; width: 45px; height: 45px;"><a style="color:#505050;padding-top: 6px;display: block;" href="#<?php echo $i; ?>"><?php echo $i; ?></a></p>
                            <?php } ?>
                        </div></div></div>

                        <?php foreach ($this->month9 as $key => $value): ?>
                            <div id="grid" data-columns>
                                <div class="card">
                                    <div class="when" class="row">
                                        <div class="col s12">

                                            <h5 class="date-time"><a name="<?php echo date('j', strtotime($value['date'])); ?>"></a><?php echo date('d.m.y', strtotime($value['date'])); ?> в <?php echo substr($value['time'], 0, 5); ?></h5>
                                            <small class="where">
                                                <?php if($value['place'] == 'SOME') { echo SOME; } ?>
                                                <?php if($value['place'] == 'BOTTOM') { echo BOTTOM; } ?>
                                                <?php if($value['place'] == 'TOP') { echo TOP; } ?>
                                                <?php if($value['place'] == 'EMPTY_FIELD') { echo EMPTY_FIELD; } ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <p class="center-align person"><?php echo $value['name']; ?></p>
                                    <div class="divider person"></div>
                                    <p class="center-align person"><?php echo $value['phone']; ?></p>

                                    <?php if(empty($value['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                    <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $value['record']; ?></p>
                                    <div class="divider"></div>
                                    <div class="row edit">
                                        <div class="col s12">
                                            <span class="edit"><a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $value['id']; ?>">Удалить</a> | <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $value['id']; ?>">Изменить</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                <h5 class="header">Октябрь</h5>
            </div>
            <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                        <h6 class="header" style="float: left;">Календарь</h6>
                        <h6 class="header">Октябрь</h6>

                        <div class="row"><div class="col s12 m12 l12" style="text-align: center;"><div style="    margin-top: 10px;display: inline-block; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 1px 5px 0 rgba(0, 0, 0, 0.06);   background-color: #F7F7F7;border-radius: 2px;">
                                    <?php for($i = 1; $i <= 31; $i++) { ?>
                                        <p style="text-align: center;margin: 0;padding: 5px; float: left; width: 45px; height: 45px;"><a style="color:#505050;padding-top: 6px;display: block;" href="#<?php echo $i; ?>"><?php echo $i; ?></a></p>
                                    <?php } ?>
                                </div></div></div>

                        <?php foreach ($this->month10 as $key => $value): ?>
                            <div id="grid" data-columns>
                                <div class="card">
                                    <div class="when" class="row">
                                        <div class="col s12">

                                            <h5 class="date-time"><a name="<?php echo date('j', strtotime($value['date'])); ?>"></a><?php echo date('d.m.y', strtotime($value['date'])); ?> в <?php echo substr($value['time'], 0, 5); ?></h5>
                                            <small class="where">
                                                <?php if($value['place'] == 'SOME') { echo SOME; } ?>
                                                <?php if($value['place'] == 'BOTTOM') { echo BOTTOM; } ?>
                                                <?php if($value['place'] == 'TOP') { echo TOP; } ?>
                                                <?php if($value['place'] == 'EMPTY_FIELD') { echo EMPTY_FIELD; } ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <p class="center-align person"><?php echo $value['name']; ?></p>
                                    <div class="divider person"></div>
                                    <p class="center-align person"><?php echo $value['phone']; ?></p>

                                    <?php if(empty($value['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                    <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $value['record']; ?></p>
                                    <div class="divider"></div>
                                    <div class="row edit">
                                        <div class="col s12">
                                            <span class="edit"><a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $value['id']; ?>">Удалить</a> | <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $value['id']; ?>">Изменить</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                <h5 class="header">Ноябрь</h5>
            </div>
            <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                        <h6 class="header" style="float: left;">Календарь</h6>
                        <h6 class="header">Ноябрь</h6>

                        <div class="row"><div class="col s12 m12 l12" style="text-align: center;"><div style="    margin-top: 10px;display: inline-block; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 1px 5px 0 rgba(0, 0, 0, 0.06);   background-color: #F7F7F7;border-radius: 2px;">
                                    <?php for($i = 1; $i <= 31; $i++) { ?>
                                        <p style="text-align: center;margin: 0;padding: 5px; float: left; width: 45px; height: 45px;"><a style="color:#505050;padding-top: 6px;display: block;" href="#<?php echo $i; ?>"><?php echo $i; ?></a></p>
                                    <?php } ?>
                                </div></div></div>

                        <?php foreach ($this->month11 as $key => $value): ?>
                            <div id="grid" data-columns>
                                <div class="card">
                                    <div class="when" class="row">
                                        <div class="col s12">

                                            <h5 class="date-time"><a name="<?php echo date('j', strtotime($value['date'])); ?>"></a><?php echo date('d.m.y', strtotime($value['date'])); ?> в <?php echo substr($value['time'], 0, 5); ?></h5>
                                            <small class="where">
                                                <?php if($value['place'] == 'SOME') { echo SOME; } ?>
                                                <?php if($value['place'] == 'BOTTOM') { echo BOTTOM; } ?>
                                                <?php if($value['place'] == 'TOP') { echo TOP; } ?>
                                                <?php if($value['place'] == 'EMPTY_FIELD') { echo EMPTY_FIELD; } ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <p class="center-align person"><?php echo $value['name']; ?></p>
                                    <div class="divider person"></div>
                                    <p class="center-align person"><?php echo $value['phone']; ?></p>

                                    <?php if(empty($value['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                    <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $value['record']; ?></p>
                                    <div class="divider"></div>
                                    <div class="row edit">
                                        <div class="col s12">
                                            <span class="edit"><a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $value['id']; ?>">Удалить</a> | <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $value['id']; ?>">Изменить</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                <h5 class="header">Декабрь</h5>
            </div>
            <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                        <h6 class="header" style="float: left;">Календарь</h6>
                        <h6 class="header">Декабрь</h6>

                        <div class="row"><div class="col s12 m12 l12" style="text-align: center;"><div style="    margin-top: 10px;display: inline-block; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 1px 5px 0 rgba(0, 0, 0, 0.06);   background-color: #F7F7F7;border-radius: 2px;">
                                    <?php for($i = 1; $i <= 31; $i++) { ?>
                                        <p style="text-align: center;margin: 0;padding: 5px; float: left; width: 45px; height: 45px;"><a style="color:#505050;padding-top: 6px;display: block;" href="#<?php echo $i; ?>"><?php echo $i; ?></a></p>
                                    <?php } ?>
                                </div></div></div>

                        <?php foreach ($this->month12 as $key => $value): ?>
                            <div id="grid" data-columns>
                                <div class="card">
                                    <div class="when" class="row">
                                        <div class="col s12">

                                            <h5 class="date-time"><a name="<?php echo date('j', strtotime($value['date'])); ?>"></a><?php echo date('d.m.y', strtotime($value['date'])); ?> в <?php echo substr($value['time'], 0, 5); ?></h5>
                                            <small class="where">
                                                <?php if($value['place'] == 'SOME') { echo SOME; } ?>
                                                <?php if($value['place'] == 'BOTTOM') { echo BOTTOM; } ?>
                                                <?php if($value['place'] == 'TOP') { echo TOP; } ?>
                                                <?php if($value['place'] == 'EMPTY_FIELD') { echo EMPTY_FIELD; } ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <p class="center-align person"><?php echo $value['name']; ?></p>
                                    <div class="divider person"></div>
                                    <p class="center-align person"><?php echo $value['phone']; ?></p>

                                    <?php if(empty($value['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                    <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $value['record']; ?></p>
                                    <div class="divider"></div>
                                    <div class="row edit">
                                        <div class="col s12">
                                            <span class="edit"><a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $value['id']; ?>">Удалить</a> | <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $value['id']; ?>">Изменить</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</main>

<a style="position: fixed;bottom: 0;right: 0;border-radius: 2px;background-color: #EE6E73;margin-right: 10px;margin-bottom: 10px;" class="btn-floating btn-large waves-effect waves-light" href="<?php echo URL ?>dashboard/add"><i class="material-icons">note_add</i></a>

<script>
    $(document).ready(function() {
        moment.locale("ru");
        var months = {1: "Январь",2: "Февраль", 3: "Март",4: "Апрель", 5: "Май", 6: "Июнь", 7: "Июль", 8: "Август", 9: "Сентябрь", 10: "Октябрь", 11: "Ноябрь", 12: "Декабрь"};
        var month_now = moment().format("M"); //get current month number

        $('h5.header').each(function() {
            var month = $(this).text(); console.log(month);
            var intMonth = monthToNumber(month); //parseInt(month);console.log(typeof month); console.log(typeof month_now);var i = (month == month_now);console.log(i);
            if(intMonth == month_now) {
                $(this).parent().addClass('active');
            }
        });
        function monthToNumber(month) {
            for(var i = 1; i <= 12; i++) {
                if(months[i] == month) {
                    return i; //console.log('--' + i);
                }
            }
        }

    });
</script>

