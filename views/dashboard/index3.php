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
<div class="results"></div>


    <ul class="collapsible main-accordion" data-collapsible="accordion">
        <li>
            <div class="collapsible-header">
                <h5 class="header">Сентябрь</h5>
            </div>
            <div class="collapsible-body">
                <div class="row">
                    <div class="col s12">
                        <h6 class="header" style="float: left;">Календарь</h6>
                        <h6 class="header">Сентябрь</h6>
                        <div class="row">
                            <div class="col s12 m12 l12" style="text-align: center;">
                                <div style="margin-top: 10px;display: inline-block; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 1px 5px 0 rgba(0, 0, 0, 0.06);   background-color: #F7F7F7;border-radius: 2px;">
                                    <?php for($i = 1; $i <= 31; $i++) { ?>
                                        <p style="text-align: center;margin: 0;padding: 5px; float: left; width: 45px; height: 45px;"><a style="color:#505050;padding-top: 6px;display: block;" href="#<?php echo $i; ?>"><?php echo $i; ?></a></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
<!--                        <hr />-->

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

                        <!-- Days calendar -->
                        <div class="row">
                            <div class="col s12 m12 l12" style="text-align: center;">
                                <div class="calendar-block">

                                    <style>
                                        #calendar3 {
                                            width: 100%;
                                            font: monospace;
                                            line-height: 1.2em;
                                            font-size: 15px;
                                            text-align: center;
                                        }
                                        #calendar3 thead tr:last-child {
                                            font-size: small;
                                            color: rgb(85, 85, 85);
                                        }
                                        #calendar3 tbody td {
                                            color: rgb(44, 86, 122);
                                            cursor: pointer;
                                        }
                                        #calendar3 tbody td:nth-child(n+6), #calendar3 .holiday-day {
                                            color: rgb(231, 140, 92);
                                        }
                                        #calendar3 tbody td.today-day {
                                            outline: 3px solid red;
                                        }
                                    </style>

                                    <table style="    margin: 0 auto;max-width: 350px; border: 1px solid #d0d0d0;    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.06), 0 1px 5px 0 rgba(0, 0, 0, 0.06);" class="centered" id="calendar3">
                                        <thead>
<!--                                        <tr>-->
<!--                                            <td colspan="4">-->
<!--                                                <select class="browser-default">-->
<!--                                                    <option value="0">Январь</option>-->
<!--                                                    <option value="1">Февраль</option>-->
<!--                                                    <option value="2">Март</option>-->
<!--                                                    <option value="3">Апрель</option>-->
<!--                                                    <option value="4">Май</option>-->
<!--                                                    <option value="5">Июнь</option>-->
<!--                                                    <option value="6">Июль</option>-->
<!--                                                    <option value="7">Август</option>-->
<!--                                                    <option value="8">Сентябрь</option>-->
<!--                                                    <option value="9">Октябрь</option>-->
<!--                                                    <option value="10">Ноябрь</option>-->
<!--                                                    <option value="11">Декабрь</option>-->
<!--                                                </select>-->
<!--                                            <td colspan="3">-->
<!--                                                <input type="number" value="" min="0" max="9999" size="4">-->
                                                <tr><th>Пн<th>Вт<th>Ср<th>Чт<th>Пт<th>Сб<th>Вс
                                        <tbody>
                                    </table>

                                    <script>
                                        function Calendar3(id, year, month) {
                                            var Dlast = new Date(year,month+1,0).getDate(),
                                                D = new Date(year,month,Dlast),
                                                DNlast = D.getDay(),
                                                DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
                                                calendar = '<tr>',
                                                m = document.querySelector('#'+id+' option[value="' + D.getMonth() + '"]'),
                                                g = document.querySelector('#'+id+' input');
                                            if (DNfirst != 0) {
                                                for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
                                            }else{
                                                for(var  i = 0; i < 6; i++) calendar += '<td>';
                                            }
                                            for(var  i = 1; i <= Dlast; i++) {
                                                if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
                                                    calendar += '<td class="icn today-day" id="icn_' + i + '">' + i;
                                                }else{
                                                    if (  // список официальных праздников
                                                    (i == 1 && D.getMonth() == 0 && ((D.getFullYear() > 1897 && D.getFullYear() < 1930) || D.getFullYear() > 1947)) || // Новый год
                                                    (i == 2 && D.getMonth() == 0 && D.getFullYear() > 1992) || // Новый год
                                                    ((i == 3 || i == 4 || i == 5 || i == 6 || i == 8) && D.getMonth() == 0 && D.getFullYear() > 2004) || // Новый год
                                                    (i == 7 && D.getMonth() == 0 && D.getFullYear() > 1990) || // Рождество Христово
                                                    (i == 23 && D.getMonth() == 1 && D.getFullYear() > 2001) || // День защитника Отечества
                                                    (i == 8 && D.getMonth() == 2 && D.getFullYear() > 1965) || // Международный женский день
                                                    (i == 1 && D.getMonth() == 4 && D.getFullYear() > 1917) || // Праздник Весны и Труда
                                                    (i == 9 && D.getMonth() == 4 && D.getFullYear() > 1964) || // День Победы
                                                    (i == 12 && D.getMonth() == 5 && D.getFullYear() > 1990) || // День России (декларации о государственном суверенитете Российской Федерации ознаменовала окончательный Распад СССР)
                                                    (i == 7 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 2005)) || // Октябрьская революция 1917 года
                                                    (i == 8 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 1992)) || // Октябрьская революция 1917 года
                                                    (i == 4 && D.getMonth() == 10 && D.getFullYear() > 2004) // День народного единства, который заменил Октябрьскую революцию 1917 года
                                                    ) {
                                                        calendar += '<td class="icn holiday-day" id="icn_' + i + '">' + i;
                                                    }else{
                                                        calendar += '<td class="icn" id="icn_' + i + '">' + i;
                                                    }
                                                }
                                                if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
                                                    calendar += '<tr>';
                                                }
                                            }
                                            for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
                                            document.querySelector('#'+id+' tbody').innerHTML = calendar;
                                            g.value = D.getFullYear();
                                            m.selected = true;
                                            if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {
                                                document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
                                            }
                                            document.querySelector('#'+id+' option[value="10"]').style.color = 'rgb(220, 0, 0)';
                                            //document.querySelector('#'+id+' option[value="' + new Date().getMonth() + '"]').style.color = 'rgb(220, 0, 0)'; // в выпадающем списке выделен текущий месяц
                                        }
                                        Calendar3("calendar3",new Date().getFullYear(),9);
                                        document.querySelector('#calendar3').onchange = function Kalendar3() {
                                            Calendar3("calendar3",document.querySelector('#calendar3 input').value,parseFloat(document.querySelector('#calendar3 select').options[document.querySelector('#calendar3 select').selectedIndex].value));
                                        }
                                    </script>

                                </div>
                            </div>
                        </div>
                        <!--/ Days calendar -->

                        <?php /*days var*/ $days = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);$day_1 = array();$day_2 = array();$day_3 = array();$day_4 = array();$day_5 = array();$day_6 = array();$day_7 = array();$day_8 = array();$day_9 = array();$day_10 = array();$day_11 = array();$day_12 = array();$day_13 = array();$day_14 = array();$day_15 = array();$day_16 = array();$day_17 = array();$day_18 = array();$day_19 = array();$day_20 = array();$day_21 = array();$day_22 = array();$day_23 = array();$day_24 = array();$day_25 = array();$day_26 = array();$day_27 = array();$day_28 = array();$day_29 = array();$day_30 = array();$day_31 = array();/*time var*/ $time_array = array("0" => array("time" => '09:00:00'), "1" => array("time" => '09:15:00'), "2" => array("time" => '09:30:00'), "3" => array("time" => '09:45:00'), "4" => array("time" => '10:00:00'), "5" => array("time" => '10:15:00'), "6" => array("time" => '10:30:00'), "7" => array("time" => '10:45:00'), "8" => array("time" => '11:00:00'), "9" => array("time" => '11:15:00'), "10" => array("time" => '11:30:00'), "11" => array("time" => '11:45:00'), "12" => array("time" => '12:00:00'), "13" => array("time" => '12:15:00'), "14" => array("time" => '12:30:00'), "15" => array("time" => '12:45:00'), "16" => array("time" => '13:00:00'), "17" => array("time" => '13:15:00'), "18" => array("time" => '13:30:00'), "19" => array("time" => '13:45:00'), "20" => array("time" => '14:00:00'), "21" => array("time" => '14:15:00'), "22" => array("time" => '14:30:00'), "23" => array("time" => '14:45:00'), "24" => array("time" => '15:00:00'), "25" => array("time" => '15:15:00'), "26" => array("time" => '15:30:00'), "27" => array("time" => '15:45:00'), "28" => array("time" => '16:00:00'), "29" => array("time" => '16:15:00'), "30" => array("time" => '16:30:00'), "31" => array("time" => '16:45:00'), "32" => array("time" => '17:00:00'), "33" => array("time" => '17:15:00'), "34" => array("time" => '17:30:00'), "35" => array("time" => '17:45:00'), "36" => array("time" => '18:00:00'), "37" => array("time" => '18:15:00'), "38" => array("time" => '18:30:00'), "39" => array("time" => '18:45:00'), "40" => array("time" => '19:00:00'));$day_records_1 = array();$day_records_2 = array();$day_records_3 = array();$day_records_4 = array();$day_records_5 = array();$day_records_6 = array();$day_records_7 = array();$day_records_8 = array();$day_records_9 = array();$day_records_10 = array();$day_records_11 = array();$day_records_12 = array();$day_records_13 = array();$day_records_14 = array();$day_records_15 = array();$day_records_16 = array();$day_records_17 = array();$day_records_18 = array();$day_records_19 = array();$day_records_20 = array();$day_records_21 = array();$day_records_22 = array();$day_records_23 = array();$day_records_24 = array();$day_records_25 = array();$day_records_26 = array();$day_records_27 = array();$day_records_28 = array();$day_records_29 = array();$day_records_30 = array();$$day_records_31 = array();?>

                        <?php foreach ($this->month10 as $key => $value) {
                            if(date('j', strtotime($value['date'])) == $days[0]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_1, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[1]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_2, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[2]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_3, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[3]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_4, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[4]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_5, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[5]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_6, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[6]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_7, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[7]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_8, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[8]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_9, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[9]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_10, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[10]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_11, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[11]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_12, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[12]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_13, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[13]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_14, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[14]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_15, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[15]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_16, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[16]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_17, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[17]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_18, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[18]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_19, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[19]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_20, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[20]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_21, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[21]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_22, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[22]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_23, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[23]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_24, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[24]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_25, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[25]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_26, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[26]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_27, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[27]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_28, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[28]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_29, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[29]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_30, $data);
                            }
                            if(date('j', strtotime($value['date'])) == $days[30]) {
                                $data = array();
                                $data['id'] = $value['id'];
                                $data['date'] = $value['date'];
                                $data['time'] = $value['time'];
                                $data['place'] = $value['place'];
                                $data['name'] = $value['name'];
                                $data['phone'] = $value['phone'];
                                $data['record'] = $value['record'];
                                array_push($day_31, $data);
                            }
                        } ?>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_1 as $key => $value){
                                if ($day_1[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_1[$key_time_array]['time']  = $day_1[$key]['time'];
                                    $day_records_1[$key_time_array]['name'] = $day_1[$key]['name'];

                                    $day_records_1[$key_time_array]['date'] = $day_1[$key]['date'];
                                    $day_records_1[$key_time_array]['place'] = $day_1[$key]['place'];
                                    $day_records_1[$key_time_array]['phone'] = $day_1[$key]['phone'];
                                    $day_records_1[$key_time_array]['record'] = $day_1[$key]['record'];
                                    $day_records_1[$key_time_array]['id'] = $day_1[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_1[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_1[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_2 as $key => $value){
                                if ($day_2[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_2[$key_time_array]['time']  = $day_2[$key]['time'];
                                    $day_records_2[$key_time_array]['name'] = $day_2[$key]['name'];

                                    $day_records_2[$key_time_array]['date'] = $day_2[$key]['date'];
                                    $day_records_2[$key_time_array]['place'] = $day_2[$key]['place'];
                                    $day_records_2[$key_time_array]['phone'] = $day_2[$key]['phone'];
                                    $day_records_2[$key_time_array]['record'] = $day_2[$key]['record'];
                                    $day_records_2[$key_time_array]['id'] = $day_2[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_2[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_2[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_3 as $key => $value){
                                if ($day_3[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_3[$key_time_array]['time']  = $day_3[$key]['time'];
                                    $day_records_3[$key_time_array]['name'] = $day_3[$key]['name'];

                                    $day_records_3[$key_time_array]['date'] = $day_3[$key]['date'];
                                    $day_records_3[$key_time_array]['place'] = $day_3[$key]['place'];
                                    $day_records_3[$key_time_array]['phone'] = $day_3[$key]['phone'];
                                    $day_records_3[$key_time_array]['record'] = $day_3[$key]['record'];
                                    $day_records_3[$key_time_array]['id'] = $day_3[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_3[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_3[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>

                        <div id="section_1" class="sections">

                            <h4 class="header"><a class="current-date" name="1">01.10.15</a></h4>


                            <?php foreach($day_records_1 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div id="section_2" class="sections">

                            <h4 class="header"><a name="2">02.10.15</a></h4>

                            <?php foreach($day_records_2 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_3" class="sections">

                            <h4 class="header"><a name="3">03.10.15</a></h4>

                            <?php foreach($day_records_3 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>


                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_4 as $key => $value){
                                if ($day_4[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_4[$key_time_array]['time']  = $day_4[$key]['time'];
                                    $day_records_4[$key_time_array]['name'] = $day_4[$key]['name'];

                                    $day_records_4[$key_time_array]['date'] = $day_4[$key]['date'];
                                    $day_records_4[$key_time_array]['place'] = $day_4[$key]['place'];
                                    $day_records_4[$key_time_array]['phone'] = $day_4[$key]['phone'];
                                    $day_records_4[$key_time_array]['record'] = $day_4[$key]['record'];
                                    $day_records_4[$key_time_array]['id'] = $day_4[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_4[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_4[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_5 as $key => $value){
                                if ($day_5[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_5[$key_time_array]['time']  = $day_5[$key]['time'];
                                    $day_records_5[$key_time_array]['name'] = $day_5[$key]['name'];

                                    $day_records_5[$key_time_array]['date'] = $day_5[$key]['date'];
                                    $day_records_5[$key_time_array]['place'] = $day_5[$key]['place'];
                                    $day_records_5[$key_time_array]['phone'] = $day_5[$key]['phone'];
                                    $day_records_5[$key_time_array]['record'] = $day_5[$key]['record'];
                                    $day_records_5[$key_time_array]['id'] = $day_5[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_5[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_5[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_6 as $key => $value){
                                if ($day_6[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_6[$key_time_array]['time']  = $day_6[$key]['time'];
                                    $day_records_6[$key_time_array]['name'] = $day_6[$key]['name'];

                                    $day_records_6[$key_time_array]['date'] = $day_6[$key]['date'];
                                    $day_records_6[$key_time_array]['place'] = $day_6[$key]['place'];
                                    $day_records_6[$key_time_array]['phone'] = $day_6[$key]['phone'];
                                    $day_records_6[$key_time_array]['record'] = $day_6[$key]['record'];
                                    $day_records_6[$key_time_array]['id'] = $day_6[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_6[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_6[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_4" class="sections">

                            <h4 class="header"><a name="4">04.10.15</a></h4>

                            <?php foreach($day_records_4 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_5" class="sections">

                            <h4 class="header"><a name="5">05.10.15</a></h4>

                            <?php foreach($day_records_5 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_6" class="sections">

                            <h4 class="header"><a name="6">06.10.15</a></h4>

                            <?php foreach($day_records_6 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_7 as $key => $value){
                                if ($day_7[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_7[$key_time_array]['time']  = $day_7[$key]['time'];
                                    $day_records_7[$key_time_array]['name'] = $day_7[$key]['name'];

                                    $day_records_7[$key_time_array]['date'] = $day_7[$key]['date'];
                                    $day_records_7[$key_time_array]['place'] = $day_7[$key]['place'];
                                    $day_records_7[$key_time_array]['phone'] = $day_7[$key]['phone'];
                                    $day_records_7[$key_time_array]['record'] = $day_7[$key]['record'];
                                    $day_records_7[$key_time_array]['id'] = $day_7[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_7[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_7[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_8 as $key => $value){
                                if ($day_8[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_8[$key_time_array]['time']  = $day_8[$key]['time'];
                                    $day_records_8[$key_time_array]['name'] = $day_8[$key]['name'];

                                    $day_records_8[$key_time_array]['date'] = $day_8[$key]['date'];
                                    $day_records_8[$key_time_array]['place'] = $day_8[$key]['place'];
                                    $day_records_8[$key_time_array]['phone'] = $day_8[$key]['phone'];
                                    $day_records_8[$key_time_array]['record'] = $day_8[$key]['record'];
                                    $day_records_8[$key_time_array]['id'] = $day_8[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_8[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_8[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_9 as $key => $value){
                                if ($day_9[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_9[$key_time_array]['time']  = $day_9[$key]['time'];
                                    $day_records_9[$key_time_array]['name'] = $day_9[$key]['name'];

                                    $day_records_9[$key_time_array]['date'] = $day_9[$key]['date'];
                                    $day_records_9[$key_time_array]['place'] = $day_9[$key]['place'];
                                    $day_records_9[$key_time_array]['phone'] = $day_9[$key]['phone'];
                                    $day_records_9[$key_time_array]['record'] = $day_9[$key]['record'];
                                    $day_records_9[$key_time_array]['id'] = $day_9[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_9[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_9[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_7" class="sections">

                            <h4 class="header"><a name="7">07.10.15</a></h4>

                            <?php foreach($day_records_7 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_8" class="sections">

                            <h4 class="header"><a name="8">08.10.15</a></h4>

                            <?php foreach($day_records_8 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_9" class="sections">

                            <h4 class="header"><a name="9">09.10.15</a></h4>

                            <?php foreach($day_records_9 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_10 as $key => $value){
                                if ($day_10[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_10[$key_time_array]['time']  = $day_10[$key]['time'];
                                    $day_records_10[$key_time_array]['name'] = $day_10[$key]['name'];

                                    $day_records_10[$key_time_array]['date'] = $day_10[$key]['date'];
                                    $day_records_10[$key_time_array]['place'] = $day_10[$key]['place'];
                                    $day_records_10[$key_time_array]['phone'] = $day_10[$key]['phone'];
                                    $day_records_10[$key_time_array]['record'] = $day_10[$key]['record'];
                                    $day_records_10[$key_time_array]['id'] = $day_10[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_10[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_10[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_11 as $key => $value){
                                if ($day_11[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_11[$key_time_array]['time']  = $day_11[$key]['time'];
                                    $day_records_11[$key_time_array]['name'] = $day_11[$key]['name'];

                                    $day_records_11[$key_time_array]['date'] = $day_11[$key]['date'];
                                    $day_records_11[$key_time_array]['place'] = $day_11[$key]['place'];
                                    $day_records_11[$key_time_array]['phone'] = $day_11[$key]['phone'];
                                    $day_records_11[$key_time_array]['record'] = $day_11[$key]['record'];
                                    $day_records_11[$key_time_array]['id'] = $day_11[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_11[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_11[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_12 as $key => $value){
                                if ($day_12[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_12[$key_time_array]['time']  = $day_12[$key]['time'];
                                    $day_records_12[$key_time_array]['name'] = $day_12[$key]['name'];

                                    $day_records_12[$key_time_array]['date'] = $day_12[$key]['date'];
                                    $day_records_12[$key_time_array]['place'] = $day_12[$key]['place'];
                                    $day_records_12[$key_time_array]['phone'] = $day_12[$key]['phone'];
                                    $day_records_12[$key_time_array]['record'] = $day_12[$key]['record'];
                                    $day_records_12[$key_time_array]['id'] = $day_12[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_12[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_12[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_10" class="sections">

                            <h4 class="header"><a name="10">10.10.15</a></h4>

                            <?php foreach($day_records_10 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_11" class="sections">

                            <h4 class="header"><a name="11">11.10.15</a></h4>

                            <?php foreach($day_records_11 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_12" class="sections">

                            <h4 class="header"><a name="12">12.10.15</a></h4>

                            <?php foreach($day_records_12 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_13 as $key => $value){
                                if ($day_13[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_13[$key_time_array]['time']  = $day_13[$key]['time'];
                                    $day_records_13[$key_time_array]['name'] = $day_13[$key]['name'];

                                    $day_records_13[$key_time_array]['date'] = $day_13[$key]['date'];
                                    $day_records_13[$key_time_array]['place'] = $day_13[$key]['place'];
                                    $day_records_13[$key_time_array]['phone'] = $day_13[$key]['phone'];
                                    $day_records_13[$key_time_array]['record'] = $day_13[$key]['record'];
                                    $day_records_13[$key_time_array]['id'] = $day_13[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_13[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_13[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_14 as $key => $value){
                                if ($day_14[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_14[$key_time_array]['time']  = $day_14[$key]['time'];
                                    $day_records_14[$key_time_array]['name'] = $day_14[$key]['name'];

                                    $day_records_14[$key_time_array]['date'] = $day_14[$key]['date'];
                                    $day_records_14[$key_time_array]['place'] = $day_14[$key]['place'];
                                    $day_records_14[$key_time_array]['phone'] = $day_14[$key]['phone'];
                                    $day_records_14[$key_time_array]['record'] = $day_14[$key]['record'];
                                    $day_records_14[$key_time_array]['id'] = $day_14[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_14[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_14[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_15 as $key => $value){
                                if ($day_15[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_15[$key_time_array]['time']  = $day_15[$key]['time'];
                                    $day_records_15[$key_time_array]['name'] = $day_15[$key]['name'];

                                    $day_records_15[$key_time_array]['date'] = $day_15[$key]['date'];
                                    $day_records_15[$key_time_array]['place'] = $day_15[$key]['place'];
                                    $day_records_15[$key_time_array]['phone'] = $day_15[$key]['phone'];
                                    $day_records_15[$key_time_array]['record'] = $day_15[$key]['record'];
                                    $day_records_15[$key_time_array]['id'] = $day_15[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_15[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_15[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_13" class="sections">

                            <h4 class="header"><a name="13">13.10.15</a></h4>

                            <?php foreach($day_records_13 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_14" class="sections">

                            <h4 class="header"><a name="14">14.10.15</a></h4>

                            <?php foreach($day_records_14 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_15" class="sections">

                            <h4 class="header"><a name="15">15.10.15</a></h4>

                            <?php foreach($day_records_15 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_16 as $key => $value){
                                if ($day_16[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_16[$key_time_array]['time']  = $day_16[$key]['time'];
                                    $day_records_16[$key_time_array]['name'] = $day_16[$key]['name'];

                                    $day_records_16[$key_time_array]['date'] = $day_16[$key]['date'];
                                    $day_records_16[$key_time_array]['place'] = $day_16[$key]['place'];
                                    $day_records_16[$key_time_array]['phone'] = $day_16[$key]['phone'];
                                    $day_records_16[$key_time_array]['record'] = $day_16[$key]['record'];
                                    $day_records_16[$key_time_array]['id'] = $day_16[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_16[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_16[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_17 as $key => $value){
                                if ($day_17[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_17[$key_time_array]['time']  = $day_17[$key]['time'];
                                    $day_records_17[$key_time_array]['name'] = $day_17[$key]['name'];

                                    $day_records_17[$key_time_array]['date'] = $day_17[$key]['date'];
                                    $day_records_17[$key_time_array]['place'] = $day_17[$key]['place'];
                                    $day_records_17[$key_time_array]['phone'] = $day_17[$key]['phone'];
                                    $day_records_17[$key_time_array]['record'] = $day_17[$key]['record'];
                                    $day_records_17[$key_time_array]['id'] = $day_17[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_17[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_17[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_18 as $key => $value){
                                if ($day_18[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_18[$key_time_array]['time']  = $day_18[$key]['time'];
                                    $day_records_18[$key_time_array]['name'] = $day_18[$key]['name'];

                                    $day_records_18[$key_time_array]['date'] = $day_18[$key]['date'];
                                    $day_records_18[$key_time_array]['place'] = $day_18[$key]['place'];
                                    $day_records_18[$key_time_array]['phone'] = $day_18[$key]['phone'];
                                    $day_records_18[$key_time_array]['record'] = $day_18[$key]['record'];
                                    $day_records_18[$key_time_array]['id'] = $day_18[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_18[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_18[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_16" class="sections">

                            <h4 class="header"><a name="16">16.10.15</a></h4>

                            <?php foreach($day_records_16 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_17" class="sections">

                            <h4 class="header"><a name="17">17.10.15</a></h4>

                            <?php foreach($day_records_17 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_18" class="sections">

                            <h4 class="header"><a name="18">18.10.15</a></h4>

                            <?php foreach($day_records_18 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_19 as $key => $value){
                                if ($day_19[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_19[$key_time_array]['time']  = $day_19[$key]['time'];
                                    $day_records_19[$key_time_array]['name'] = $day_19[$key]['name'];

                                    $day_records_19[$key_time_array]['date'] = $day_19[$key]['date'];
                                    $day_records_19[$key_time_array]['place'] = $day_19[$key]['place'];
                                    $day_records_19[$key_time_array]['phone'] = $day_19[$key]['phone'];
                                    $day_records_19[$key_time_array]['record'] = $day_19[$key]['record'];
                                    $day_records_19[$key_time_array]['id'] = $day_19[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_19[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_19[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_20 as $key => $value){
                                if ($day_20[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_20[$key_time_array]['time']  = $day_20[$key]['time'];
                                    $day_records_20[$key_time_array]['name'] = $day_20[$key]['name'];

                                    $day_records_20[$key_time_array]['date'] = $day_20[$key]['date'];
                                    $day_records_20[$key_time_array]['place'] = $day_20[$key]['place'];
                                    $day_records_20[$key_time_array]['phone'] = $day_20[$key]['phone'];
                                    $day_records_20[$key_time_array]['record'] = $day_20[$key]['record'];
                                    $day_records_20[$key_time_array]['id'] = $day_20[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_20[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_20[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_21 as $key => $value){
                                if ($day_21[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_21[$key_time_array]['time']  = $day_21[$key]['time'];
                                    $day_records_21[$key_time_array]['name'] = $day_21[$key]['name'];

                                    $day_records_21[$key_time_array]['date'] = $day_21[$key]['date'];
                                    $day_records_21[$key_time_array]['place'] = $day_21[$key]['place'];
                                    $day_records_21[$key_time_array]['phone'] = $day_21[$key]['phone'];
                                    $day_records_21[$key_time_array]['record'] = $day_21[$key]['record'];
                                    $day_records_21[$key_time_array]['id'] = $day_21[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_21[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_21[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_19" class="sections">

                            <h4 class="header"><a name="19">19.10.15</a></h4>

                            <?php foreach($day_records_19 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_20" class="sections">

                            <h4 class="header"><a name="20">20.10.15</a></h4>

                            <?php foreach($day_records_20 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_21" class="sections">

                            <h4 class="header"><a name="21">21.10.15</a></h4>

                            <?php foreach($day_records_21 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_22 as $key => $value){
                                if ($day_22[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_22[$key_time_array]['time']  = $day_22[$key]['time'];
                                    $day_records_22[$key_time_array]['name'] = $day_22[$key]['name'];

                                    $day_records_22[$key_time_array]['date'] = $day_22[$key]['date'];
                                    $day_records_22[$key_time_array]['place'] = $day_22[$key]['place'];
                                    $day_records_22[$key_time_array]['phone'] = $day_22[$key]['phone'];
                                    $day_records_22[$key_time_array]['record'] = $day_22[$key]['record'];
                                    $day_records_22[$key_time_array]['id'] = $day_22[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_22[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_22[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_23 as $key => $value){
                                if ($day_23[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_23[$key_time_array]['time']  = $day_23[$key]['time'];
                                    $day_records_23[$key_time_array]['name'] = $day_23[$key]['name'];

                                    $day_records_23[$key_time_array]['date'] = $day_23[$key]['date'];
                                    $day_records_23[$key_time_array]['place'] = $day_23[$key]['place'];
                                    $day_records_23[$key_time_array]['phone'] = $day_23[$key]['phone'];
                                    $day_records_23[$key_time_array]['record'] = $day_23[$key]['record'];
                                    $day_records_23[$key_time_array]['id'] = $day_23[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_23[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_23[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_24 as $key => $value){
                                if ($day_24[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_24[$key_time_array]['time']  = $day_24[$key]['time'];
                                    $day_records_24[$key_time_array]['name'] = $day_24[$key]['name'];

                                    $day_records_24[$key_time_array]['date'] = $day_24[$key]['date'];
                                    $day_records_24[$key_time_array]['place'] = $day_24[$key]['place'];
                                    $day_records_24[$key_time_array]['phone'] = $day_24[$key]['phone'];
                                    $day_records_24[$key_time_array]['record'] = $day_24[$key]['record'];
                                    $day_records_24[$key_time_array]['id'] = $day_24[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_24[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_24[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_22" class="sections">

                            <h4 class="header"><a name="22">22.10.15</a></h4>

                            <?php foreach($day_records_22 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_23" class="sections">

                            <h4 class="header"><a name="23">23.10.15</a></h4>

                            <?php foreach($day_records_23 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_24" class="sections">

                            <h4 class="header"><a name="24">24.10.15</a></h4>

                            <?php foreach($day_records_24 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_25 as $key => $value){
                                if ($day_25[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_25[$key_time_array]['time']  = $day_25[$key]['time'];
                                    $day_records_25[$key_time_array]['name'] = $day_25[$key]['name'];

                                    $day_records_25[$key_time_array]['date'] = $day_25[$key]['date'];
                                    $day_records_25[$key_time_array]['place'] = $day_25[$key]['place'];
                                    $day_records_25[$key_time_array]['phone'] = $day_25[$key]['phone'];
                                    $day_records_25[$key_time_array]['record'] = $day_25[$key]['record'];
                                    $day_records_25[$key_time_array]['id'] = $day_25[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_25[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_25[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_26 as $key => $value){
                                if ($day_26[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_26[$key_time_array]['time']  = $day_26[$key]['time'];
                                    $day_records_26[$key_time_array]['name'] = $day_26[$key]['name'];

                                    $day_records_26[$key_time_array]['date'] = $day_26[$key]['date'];
                                    $day_records_26[$key_time_array]['place'] = $day_26[$key]['place'];
                                    $day_records_26[$key_time_array]['phone'] = $day_26[$key]['phone'];
                                    $day_records_26[$key_time_array]['record'] = $day_26[$key]['record'];
                                    $day_records_26[$key_time_array]['id'] = $day_26[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_26[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_26[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_27 as $key => $value){
                                if ($day_27[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_27[$key_time_array]['time']  = $day_27[$key]['time'];
                                    $day_records_27[$key_time_array]['name'] = $day_27[$key]['name'];

                                    $day_records_27[$key_time_array]['date'] = $day_27[$key]['date'];
                                    $day_records_27[$key_time_array]['place'] = $day_27[$key]['place'];
                                    $day_records_27[$key_time_array]['phone'] = $day_27[$key]['phone'];
                                    $day_records_27[$key_time_array]['record'] = $day_27[$key]['record'];
                                    $day_records_27[$key_time_array]['id'] = $day_27[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_27[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_27[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_25" class="sections">

                            <h4 class="header"><a name="25">25.10.15</a></h4>

                            <?php foreach($day_records_25 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_26" class="sections">

                            <h4 class="header"><a name="26">26.10.15</a></h4>

                            <?php foreach($day_records_26 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_27" class="sections">

                            <h4 class="header"><a name="27">27.10.15</a></h4>

                            <?php foreach($day_records_27 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_28 as $key => $value){
                                if ($day_28[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_28[$key_time_array]['time']  = $day_28[$key]['time'];
                                    $day_records_28[$key_time_array]['name'] = $day_28[$key]['name'];

                                    $day_records_28[$key_time_array]['date'] = $day_28[$key]['date'];
                                    $day_records_28[$key_time_array]['place'] = $day_28[$key]['place'];
                                    $day_records_28[$key_time_array]['phone'] = $day_28[$key]['phone'];
                                    $day_records_28[$key_time_array]['record'] = $day_28[$key]['record'];
                                    $day_records_28[$key_time_array]['id'] = $day_28[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_28[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_28[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_29 as $key => $value){
                                if ($day_29[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_29[$key_time_array]['time']  = $day_29[$key]['time'];
                                    $day_records_29[$key_time_array]['name'] = $day_29[$key]['name'];

                                    $day_records_29[$key_time_array]['date'] = $day_29[$key]['date'];
                                    $day_records_29[$key_time_array]['place'] = $day_29[$key]['place'];
                                    $day_records_29[$key_time_array]['phone'] = $day_29[$key]['phone'];
                                    $day_records_29[$key_time_array]['record'] = $day_29[$key]['record'];
                                    $day_records_29[$key_time_array]['id'] = $day_29[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_29[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_29[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_30 as $key => $value){
                                if ($day_30[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_30[$key_time_array]['time']  = $day_30[$key]['time'];
                                    $day_records_30[$key_time_array]['name'] = $day_30[$key]['name'];

                                    $day_records_30[$key_time_array]['date'] = $day_30[$key]['date'];
                                    $day_records_30[$key_time_array]['place'] = $day_30[$key]['place'];
                                    $day_records_30[$key_time_array]['phone'] = $day_30[$key]['phone'];
                                    $day_records_30[$key_time_array]['record'] = $day_30[$key]['record'];
                                    $day_records_30[$key_time_array]['id'] = $day_30[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_30[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_30[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_28" class="sections">

                            <h4 class="header"><a name="28">28.10.15</a></h4>

                            <?php foreach($day_records_28 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_29" class="sections">

                            <h4 class="header"><a name="29">29.10.15</a></h4>

                            <?php foreach($day_records_29 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>
                        <div id="section_30" class="sections">

                            <h4 class="header"><a name="30">30.10.15</a></h4>

                            <?php foreach($day_records_30 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                        <?php foreach ($time_array as $key_time_array => $value_time_array){
                            $found = false;

                            foreach ($day_31 as $key => $value){
                                if ($day_31[$key]['time'] == $time_array[$key_time_array]['time']) {
                                    $day_records_31[$key_time_array]['time']  = $day_31[$key]['time'];
                                    $day_records_31[$key_time_array]['name'] = $day_31[$key]['name'];

                                    $day_records_31[$key_time_array]['date'] = $day_31[$key]['date'];
                                    $day_records_31[$key_time_array]['place'] = $day_31[$key]['place'];
                                    $day_records_31[$key_time_array]['phone'] = $day_31[$key]['phone'];
                                    $day_records_31[$key_time_array]['record'] = $day_31[$key]['record'];
                                    $day_records_31[$key_time_array]['id'] = $day_31[$key]['id'];

                                    $found = true;
                                }
                            }
                            if (!$found){
                                //add
                                $day_records_31[$key_time_array]['time']  = $time_array[$key_time_array]['time'];
                                $day_records_31[$key_time_array]['name'] = "Время не занято";
                            }
                        } ?>
                        <div id="section_31" class="sections">

                            <h4 class="header"><a name="31">31.10.15</a></h4>

                            <?php foreach($day_records_31 as $k => $v): ?>
                                <div id="grid" data-columns>
                                    <div class="card" <?php if(!isset($v['date'])) {echo 'style="height: 225.125px; background-image: url(img/skulls.png);"';} ?>>
                                        <div class="when" class="row">
                                            <div class="col s12">

                                                <h5 class="date-time"><?php echo substr($v['time'], 0, 5); ?></h5>
                                                <small class="where">
                                                    <?php if($v['place'] == 'BOTTOM') { echo 'Павла Мочалова'; } ?>
                                                    <?php if($v['place'] == 'TOP') { echo 'Октябрьская'; } ?>
                                                </small>
                                            </div>
                                        </div>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <p class="center-align person" <?php if($v['name'] == 'Время не занято') { echo 'style="margin-top: 100px; cursor:pointer; color: #485DFF; font-weight: 500;color: #4E3030;"'; } ?>><?php echo $v['name']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider person"></div><?php } ?>
                                        <p class="center-align person"><?php echo $v['phone']; ?></p>

                                        <?php if(empty($v['record'])) { echo '<div class="empty-record"></div>'; } ?>
                                        <p style="padding: inherit; margin: 0px 15px 20px 15px; color: #757575; text-align: center;" class="truncate tr"><?php echo $v['record']; ?></p>
                                        <?php if(isset($v['date'])) { ?><div class="divider"></div><?php } ?>
                                        <?php if(isset($v['date'])) { ?>
                                            <div class="row edit">
                                                <div class="col s12">
                                                <span class="edit">
                                                    <a style="color: #757575;" onclick="confirm_delete()" href="<?php echo URL; ?>dashboard/delete/<?php echo $v['id']; ?>">Удалить</a>
                                                    |
                                                    <a style="color: #757575;" href="<?php echo URL; ?>dashboard/edit/<?php echo $v['id']; ?>">Изменить</a></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>                                <?php endforeach; ?>

                        </div>

                    </div>
                </div>
            </div>
        </li>

    </ul>
</main>



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

        $(".sections").hide();

        $(".icn").click(function() {
            var num = this.id.match(/\d+/)[0];
            $(".sections").hide();
            $("#section_" + num).show();
        });

    });


    $('h5.date-time').on('click', function() {
        var self = this;
        var time = self.innerHTML;
        var date = $(self).parent().parent().parent().parent().parent().parent().find('h4.header').html();
        var strippedDate = date.replace(/(<([^>]+)>)/ig,"");
        //console.log(time);
        //console.log(strippedDate);


        $.ajax({
            type: 'POST',
            url: '<?php echo URL; ?>dashboard/getData',
            data: "time=" + time + "&date=" + strippedDate,
            success: function(data){
                //console.log(data);
                $('.results').html(data);
            }
        });



    });
</script>

