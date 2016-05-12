
<div class="row">

        <div class="input-field col s12 m12 l12">
            <input type="search" id="search" class="validate">
            <label for="search">Поиск</label>
        </div>

        <div class="col s12 m12 l12">
        <table class="centered responsive-table striped">
            <thead style="border: 1px solid #BCBCBC;">
                <tr>
                    <th>ID</th>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Место</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Доп информация</th>
                </tr>
            </thead>
            <tbody style="border: 1px solid #BCBCBC;">
                <?php foreach ($this->notes as $key=>$value) :?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php $phpdate = strtotime( $value['date'] ); echo  date( 'd.m.Y', $phpdate ); ?></td>
                        <td><?php echo $value['time']; ?></td>
                        <td><?php echo $value['place']; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['phone']; ?></td>
                        <td><?php echo substr($value['record'], 0, 50); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>