<!--   Core JS Files  -->
     <!-- <script src="{{('assets/js/jquery.min.js')}}"type="text/javascript"></script> -->
    <!--  <script src="../assets/css/jquery.min.js"type="text/javascript"></script> -->
     <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    {!! Html::script('assets/js/bootstrap.min.js')!!}

   
  {!! Html::script('assets/js/perfect-scrollbar.jquery.min.js')!!}


    {!! Html::script('assets/js/jquery.validate.min.js')!!}

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset('assets/js/moment.min.js')}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{asset('assets/js/bootstrap-selectpicker.js')}}"></script>

    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
        <script src="{{asset('assets/js/bootstrap-switch-tags.min.js')}}"></script>

    <!--  Charts Plugin -->
    <script src="{{asset('assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="{{asset('assets/js/sweetalert2.js')}}"></script>

    <!-- Vector Map plugin -->
    <script src="{{asset('assets/js/jquery-jvectormap.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Wizard Plugin    -->
    <script src="{{asset('assets/js/jquery.bootstrap.wizard.min.js')}}"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="{{asset('assets/js/bootstrap-table.js')}}"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="{{asset('assets/js/jquery.datatables.js')}}"></script>


    <!--  Full Calendar Plugin    -->
    <script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
    <script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.1')}}"></script>

    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('assets/js/demo.js')}}"></script>
       <script type="text/javascript">





        $().ready(function(){

     

            // Init DatetimePicker
            demo.initFormExtendedDatetimepickers();
        });


          $().ready(function(){

            // Code for the Validator
            var $validator = $('.card-wizard form').validate({
                  rules: {
                    firstname: {
                      required: true,
                      minlength: 3
                    },
                    lastname: {
                      required: true,
                      minlength: 3
                    },
                    email: {
                      required: true,
                      minlength: 3,
                    }
                },

                 highlight: function(element) {
                    $(element).parent().addClass('has-error').removeClass('has-success');
                 },
                 success: function(element) {
                    $(element).parent().addClass('has-success').removeClass('has-error');
                 }
            });

            // Wizard Initialization
            $('.card-wizard').bootstrapWizard({
                'tabClass': 'nav nav-pills',
                'nextSelector': '.btn-next',
                'previousSelector': '.btn-previous',

                onNext: function(tab, navigation, index) {
                    var $valid = $('.card-wizard form').valid();
                    if(!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }
                },

                onInit : function(tab, navigation, index){
                    //check number of tabs and fill the entire row
                    var $total = navigation.find('li').length;
                    var $wizard = navigation.closest('.card-wizard');



                    refreshAnimation($wizard, index);

                    $('.moving-tab').css('transition','transform 0s');
               },

                onTabClick : function(tab, navigation, index){
                    var $valid = $('.card-wizard form').valid();

                    if(!$valid){
                        return false;
                    } else{
                        return true;
                    }
                },

                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;

                    var $wizard = navigation.closest('.card-wizard');

                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $($wizard).find('.btn-next').hide();
                        $($wizard).find('.btn-finish').show();
                    } else {
                        $($wizard).find('.btn-next').show();
                        $($wizard).find('.btn-finish').hide();
                    }

                    var checkbox = $('.footer-checkbox');

                    if( !index == 0 ){
                        $(checkbox).css({
                            'opacity':'0',
                            'visibility':'hidden',
                            'position':'absolute'
                        });
                    } else {
                        $(checkbox).css({
                            'opacity':'1',
                            'visibility':'visible'
                        });
                    }

                    refreshAnimation($wizard, index);
                }
            });


            // Prepare the preview for profile picture
            $("#wizard-picture").change(function(){
                readURL(this);
            });

            $('[data-toggle="wizard-radio"]').click(function(){
                wizard = $(this).closest('.card-wizard');
                wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
                $(this).addClass('active');
                $(wizard).find('[type="radio"]').removeAttr('checked');
                $(this).find('[type="radio"]').attr('checked','true');
            });

            $('[data-toggle="wizard-checkbox"]').click(function(){
                if( $(this).hasClass('active')){
                    $(this).removeClass('active');
                    $(this).find('[type="checkbox"]').removeAttr('checked');
                } else {
                    $(this).addClass('active');
                    $(this).find('[type="checkbox"]').attr('checked','true');
                }
            });

            $('.set-full-height').css('height', 'auto');

             //Function to show image before upload

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(window).resize(function(){
                $('.card-wizard').each(function(){
                    $wizard = $(this);

                    index = $wizard.bootstrapWizard('currentIndex');
                    refreshAnimation($wizard, index);

                    $('.moving-tab').css({
                        'transition': 'transform 0s'
                    });
                });
            });

            function refreshAnimation($wizard, index){
                $total = $wizard.find('.nav li').length;
                $li_width = 100/$total;

                total_steps = $wizard.find('.nav li').length;
                move_distance = $wizard.width() / total_steps;
                index_temp = index;
                vertical_level = 0;

                mobile_device = $(document).width() < 600 && $total > 3;

                if(mobile_device){
                    move_distance = $wizard.width() / 2;
                    index_temp = index % 2;
                    $li_width = 50;
                }

                $wizard.find('.nav li').css('width',$li_width + '%');

                step_width = move_distance;
                move_distance = move_distance * index_temp;

                $current = index + 1;

                if($current == 1 || (mobile_device == true && (index % 2 == 0) )){
                    move_distance -= 8;
                } else if($current == total_steps || (mobile_device == true && (index % 2 == 1))){
                    move_distance += 8;
                }

                if(mobile_device){
                    vertical_level = parseInt(index / 2);
                    vertical_level = vertical_level * 38;
                }
               

                $wizard.find('.moving-tab').css('width', step_width);
                $('.moving-tab').css({
                    'transform':'translate3d(' + move_distance + 'px, ' + vertical_level +  'px, 0)',
                    'transition': 'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'

                });
            }

        });

        function onFinishWizard(){
            //here you can do something, sent the form to server via ajax and show a success message with swal

            swal("Good job!", "You clicked the finish button!", "success");

      

        }


         var $table = $('#bootstrap-table');

       

        $().ready(function(){
            window.operateEvents = {
                'click .view': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click view icon, row: ', info);
                    console.log(info);

                },
                'click .edit': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click edit icon, row: ', info);
                    console.log(info);
                  
                },
                'click .remove': function (e, value, row, index) {
                    console.log(row);
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
                }
            };

            $table.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 8,
                clickToSelect: false,
                pageList: [8,10,25,50,100],

                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });

            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });


        });


        $(document).ready(function(){

            lbd.checkFullPageBackgroundImage();

        });



        $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true,
            language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on( 'click', '.edit', function () {
            $tr = $(this).closest('tr');

            if($tr.hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
        } );

        // Delete a record
        table.on( 'click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        } );

        //Like record
        table.on( 'click', '.like', function () {
            alert('You clicked on Like button');
        });
    });

        $().ready(function(){

            $('#registerFormValidation').validate();
            $('#loginFormValidation').validate();
            $('#allInputsFormValidation').validate();

        });
    </script>