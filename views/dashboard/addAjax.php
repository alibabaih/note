<style>
    .parentQ {
        z-index: 1;
        background: rgba(136, 66, 79, 0.25);
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: auto;
    }

    .card1 {
        position: relative;
        overflow: hidden;
        margin: 0.5rem 0 1rem 0;
        background-color: #fff;
        transition: box-shadow .25s;
        border-radius: 2px;
    }

    .blockQ {

    .qq {
            display: block;
        }
    }
</style>
<div class="parentQ">
    <div class="blockQ">
        <div class="qq">
<div class="row">
    <?php //print_r($this->data);?>
    <div class="col offset-s1 s10 offset-m2 m8 offset-l4 l4">
        <div style="box-shadow: 0 10px 55px 0 rgba(37, 36, 36, 0.57), 0 2px 10px 0 rgba(0, 0, 0, 0);" class="card1">
            <div class="card-content">
                <span class="close-add" style="float: right; cursor:pointer; padding-top:5px; padding-right:5px;">Закрыть</span>
                <form method="post" action="<?php echo URL; ?>dashboard/create">

                    <div class="input-field col s12">
                        <label class="active" for="date">Дата</label>
                        <input value="<?php echo $this->data['date']; ?>" id="date" type="date" class="datepicker" name="date"
                               placeholder="16.09.15">

                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $this->data['time']; ?>" id="time" name="time" type="text" class="validate"
                               placeholder="12:00">
                        <label class="active" for="time">Время</label>
                    </div>

                    <div class="input-field col s12">
                        <label style="position: initial">Место проведения</label>
                        <select  class="browser-default" name="place">
                            <?php if (Session::get('role') == 'default'): ?>
                                <option value="<?php echo Session::get('office'); ?>" selected><?php echo Session::get('office'); ?></option>
                            <?php endif; ?>
                            <option value="BOTTOM">Павла Мочалова</option>
                            <option value="TOP">Октябрьская</option>
                        </select>

                    </div>
                    <div class="input-field col s12">
                        <input value="" id="name" name="name" type="text" class="validate"
                               placeholder="Валентина Иванова">
                        <label class="active" for="name">Имя Фамилия</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="" id="phone" name="phone" type="text" class="validate"
                               placeholder="8 (904) 923-93-09">
                        <label class="active" for="phone">Мобильный телефон</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="" id="record" name="record" type="text" class="validate"
                               placeholder="Дополнительная информация">
                        <label class="active" for="record">Дополнительная информация</label>
                    </div>
                    <div style="margin-bottom: 20px;" class="input-field col s12">
                        <button style="display: block; margin: 0 auto;" class="btn waves-effect waves-light"
                                type="submit" name="action">Добавить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</div></div>

<script>
    $('.close-add').on('click', function() {
        $('.parentQ').remove();
    });

    //load goodies for form validation
    $('select').material_select();
    $(".button-collapse").sideNav();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        format: 'dd.mm.yy',
        firstDay: 1,
        monthsShort: [ 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ]
    });
    $("#phone").mask("8 (999) 999-99-99",{placeholder:"0"});
    $("#time").mask("99:99",{placeholder:"0"});
</script>