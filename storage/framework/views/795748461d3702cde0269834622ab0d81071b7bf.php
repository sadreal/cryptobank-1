<script type="text/javascript">
	var _url = "<?php echo e(url('')); ?>";
	var _media_url = "<?php echo e(isset($parent_id) ? url('media/get_table_data/'.$parent_id) : url('media/get_table_data')); ?>";
	var _date_format = "<?php echo e(get_option('date_format','Y-m-d')); ?>";
	var _backend_direction = "<?php echo e(get_option('backend_direction','ltr')); ?>";

	var $lang_alert_title = "<?php echo e(_lang('Are you sure?')); ?>";
	var $lang_alert_message = "<?php echo e(_lang('Once deleted, you will not be able to recover this information !')); ?>";
	var $lang_confirm_button_text = "<?php echo e(_lang('Yes, delete it!')); ?>";
	var $lang_cancel_button_text = "<?php echo e(_lang('Cancel')); ?>";
    var $lang_no_data_found = "<?php echo e(_lang('No Data Found')); ?>";
	var $lang_showing = "<?php echo e(_lang('Showing')); ?>";
	var $lang_to = "<?php echo e(_lang('to')); ?>";
	var $lang_of = "<?php echo e(_lang('of')); ?>";
	var $lang_entries = "<?php echo e(_lang('Entries')); ?>";
	var $lang_showing_0_to_0_of_0_entries = "<?php echo e(_lang('Showing 0 To 0 Of 0 Entries')); ?>";
	var $lang_show = "<?php echo e(_lang('Show')); ?>";
	var $lang_loading = "<?php echo e(_lang('Loading...')); ?>";
	var $lang_processing = "<?php echo e(_lang('Processing...')); ?>";
	var $lang_search = "<?php echo e(_lang('Search')); ?>";
	var $lang_no_matching_records_found = "<?php echo e(_lang('No matching records found')); ?>";
	var $lang_first = "<?php echo e(_lang('First')); ?>";
	var $lang_last = "<?php echo e(_lang('Last')); ?>";
	var $lang_next = "<?php echo e(_lang('Next')); ?>";
	var $lang_previous = "<?php echo e(_lang('Previous')); ?>";
	var $lang_copy = "<?php echo e(_lang('Copy')); ?>";
	var $lang_excel = "<?php echo e(_lang('Excel')); ?>";
	var $lang_pdf = "<?php echo e(_lang('PDF')); ?>";
	var $lang_print = "<?php echo e(_lang('Print')); ?>";
	var $lang_add_new = "<?php echo e(_lang('Add New')); ?>";
	var $lang_select_one = "<?php echo e(_lang('Select One')); ?>";
</script><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/layouts/others/languages.blade.php ENDPATH**/ ?>