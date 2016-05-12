<div class="row">
    <div class="col offset-s1 s10 offset-m2 m8 offset-l4 l4">
        <div style="margin-top: 30px;" class="card">
            <div class="card-content">
                <form method="post" action="<?php echo URL ?>dashboard/update/<?php echo $this->note[0][id]; ?>">
                    <div class="input-field col s12">
                        <input value="<?php
                            $raw_date = $this->note[0][date]; //2016-01-09
                            $pieces = explode("-", $raw_date);
                            $proper_date = $pieces[2] . '.' . $pieces[1] . '.' . substr($pieces[0], 2); //09.01.16
                            echo $proper_date;
                        ?>" id="date" name="date" type="date"
                               class="datepicker">
                        <label class="active" for="time">Дата</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo substr($this->note[0][time],0,5); ?>" id="time" name="time" type="text"
                               class="validate"
                               placeholder="12:00">
                        <label class="active" for="time">Время</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="place">
                            <option value="BOTTOM"><?php echo BOTTOM; ?></option>
                            <option value="TOP"><?php echo TOP; ?></option>
                        </select>
                        <label>Место проведения</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $this->note[0][name]; ?>" id="name" name="name" type="text"
                               class="validate"
                               placeholder="Валентина Иванова">
                        <label class="active" for="name">Имя Фамилия</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $this->note[0][phone]; ?>" id="phone" name="phone" type="text"
                               class="validate"
                               placeholder="8 904 923 93 09">
                        <label class="active" for="phone">Мобильный телефон</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $this->note[0][record]; ?>" id="record" name="record" type="text"
                               class="validate"
                               placeholder="Дополнительная информация">
                        <label class="active" for="record">Дополнительная информация</label>
                    </div>
                    <div style="margin-bottom: 20px;" class="input-field col s12">
                        <button style="display: block; margin: 0 auto;" class="btn waves-effect waves-light"
                                type="submit" name="action">Изменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
