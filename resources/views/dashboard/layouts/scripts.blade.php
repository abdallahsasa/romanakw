<!--=================================
 jquery -->

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{asset('dashboard/js/jquery-3.6.0.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{asset('dashboard/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script> var plugin_path = '{{asset('/dashboard/js/')}}';</script>

<!-- chart -->
<script src="{{asset('dashboard/js/chart-init.js')}}"></script>

<!-- calendar -->
<script src="{{asset('dashboard/js/calendar.init.js')}}"></script>

<!-- charts sparkline -->
<script src="{{asset('dashboard/js/sparkline.init.js')}}"></script>

<!-- charts morris -->
<script src="{{asset('dashboard/js/morris.init.js')}}"></script>

<!-- datepicker -->
<script src="{{asset('dashboard/js/datepicker.js')}}"></script>

<!-- sweetalert2 -->
<script src="{{asset('dashboard/js/sweetalert2.js')}}"></script>

<!-- toastr -->
<script src="{{asset('dashboard/js/toastr.js')}}"></script>

<!-- validation -->
<script src="{{asset('dashboard/js/validation.js')}}"></script>

<!-- lobilist -->
<script src="{{asset('dashboard/js/lobilist.js')}}"></script>

<!-- custom -->
<script src="{{asset('dashboard/js/custom.js')}}"></script>

{{--    Tagify - tags input component Library--}}
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>


{{--Multi Select  DropDown--}}
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script>
    $(document).ready(function(){

        var multipleCancelButton = new Choices('.choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount:5,
            searchResultLimit:5,
            allowHTML: true,
            renderChoiceLimit:5,
            loadingText: 'Loading...',
            uniqueItemText: 'Only unique values can be added',
            silent: false,

        });
    });
</script>

{{--End Multi Select  DropDown--}}
