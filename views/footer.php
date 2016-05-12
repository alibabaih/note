<script src="<?php echo URL; ?>assets/js/salvattore.js"></script>
<!-- App javascript -->

<script src="<?php echo URL; ?>assets/js/materialize.js"></script>
<script src="<?php echo URL; ?>assets/js/underscore-min.js"></script>
<script src="//code.angularjs.org/1.4.6/angular.min.js"></script>
<script src="//code.angularjs.org/1.4.6/angular-resource.js"></script>
<script src="<?php echo URL; ?>assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        $('select').material_select();
        $(".button-collapse").sideNav();
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
            format: 'dd.mm.yy',
            firstDay: 1,
            monthsShort: [ 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ]
        });
        $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
        $("#phone").mask("8 (999) 999-99-99",{placeholder:"0"});
        $("#time").mask("99:99",{placeholder:"0"});
    });
</script>


<script src="<?php echo URL; ?>assets/js/jquery.quicksearch.js"></script>
<script type="text/javascript">
    $('input#search').quicksearch('table tbody tr');
</script>

    </body>
</html>
