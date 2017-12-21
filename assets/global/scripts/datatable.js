/***
Wrapper/Helper Class for datagrid based on jQuery Datatable Plugin
***/
var Datatable = function() {

    var tableOptions; // main options
    var dataTable; // datatable object
    var table; // actual table jquery object
    var tableContainer; // actual table container object
    var tableWrapper; // actual table wrapper jquery object
    var tableInitialized = false;
    var ajaxParams = {}; // set filter mode
    var defaultParams = {}; // set default filter mode
    var the;

    var countSelectedRecords = function() {
        var selected = $('tbody > tr > td:nth-child(1) input[type="checkbox"]:checked', table).size();
        var text = tableOptions.dataTable.language.metronicGroupActions;
        if (selected > 0) {
            $('.table-group-actions > span', tableWrapper).text(text.replace("_TOTAL_", selected));
        } else {
            $('.table-group-actions > span', tableWrapper).text("");
        }
    };

    return {

        //main function to initiate the module
        init: function(options) {

            if (!$().dataTable) {
                return;
            }

            the = this;

            // default settings
            options = $.extend(true, {
                src: "", // actual table
                filterApplyAction: "filter",
                filterCancelAction: "filter_cancel",
                resetGroupActionInputOnSuccess: true,
                loadingMessage: 'Loading...',
                dataTable: {
                    "dom": "<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'<'table-group-actions pull-right'>>r><'table-responsive't><'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'>>", // datatable layout
                    "pageLength": 10, // default records per page
                    "language": {
					   "sProcessing":   "Sedang proses...",
					   "sLengthMenu":   "Tampilan _MENU_ entri",
					   "sZeroRecords":  "Tidak ditemukan data yang sesuai",
					   "sInfo":         "Tampilan _START_ sampai _END_ dari _TOTAL_ entri",
					   "sInfoEmpty":    "Tampilan 0 hingga 0 dari 0 entri",
					   "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
					   "sInfoPostFix":  "",
					   "sSearch":       "Cari:",
					   "sUrl":          "",
					   "oPaginate": {
						   "sFirst":    "Awal",
						   "sPrevious": "Balik",
						   "sNext":     "Lanjut",
						   "sLast":     "Akhir"
					   }
					},
                    "buttons": [
                                    { extend: 'print', className: 'btn default' },
                                    { extend: 'copy', className: 'btn default' },
                                    { extend: 'pdf', className: 'btn default' },
                                    { extend: 'excel', className: 'btn default' },
                                    { extend: 'csv', className: 'btn default' },
                                    {
                                        text: 'Reload',
                                        className: 'btn default',
                                        action: function ( e, dt, node, config ) {
                                            dt.ajax.reload();
                                            alert('Datatable reloaded!');
                                        }
                                    }
                    ],

                    "orderCellsTop": true,
                    "columnDefs": [{ // define columns sorting options(by default all columns are sortable extept the first checkbox column)
                        'orderable': false,
                        'targets': [0]
                    }],

                    "pagingType": "bootstrap_extended", // pagination type(bootstrap, bootstrap_full_number or bootstrap_extended)
                    "autoWidth": false, // disable fixed width and enable fluid table
                    "processing": false, // enable/disable display message box on record load
                    "serverSide": true, // enable/disable server side ajax loading

                    "ajax": { // define ajax settings
                        "url": "", // ajax URL
                        "type": "POST", // request type
                        "timeout": 20000,
                        "data": function(data) { // add request parameters before submit
                            $.each(ajaxParams, function(key, value) {
                                data[key] = value;
                            });
                            $.each(defaultParams, function(key, value) {
                                data[key] = value;
                            });
                            App.blockUI({
                                message: tableOptions.loadingMessage,
                                target: tableContainer,
                                overlayColor: 'none',
                                cenrerY: true,
                                boxed: true
                            });
                        },
                        "dataSrc": function(res) { // Manipulate the data returned from the server
                            if (res.customActionMessage) {
                                App.alert({
                                    type: (res.customActionStatus == 'OK' ? 'success' : 'danger'),
                                    icon: (res.customActionStatus == 'OK' ? 'check' : 'warning'),
                                    message: res.customActionMessage,
                                    container: tableWrapper,
                                    place: 'prepend'
                                });
                            }

                            if (res.customActionStatus) {
                                if (tableOptions.resetGroupActionInputOnSuccess) {
                                    $('.table-group-action-input', tableWrapper).val("");
                                }
                            }

                            if ($('.group-checkable', table).size() === 1) {
                                $('.group-checkable', table).attr("checked", false);
                            }

                            if (tableOptions.onSuccess) {
                                tableOptions.onSuccess.call(undefined, the, res);
                            }

                            App.unblockUI(tableContainer);

                            return res.data;
                        },
                        "error": function() { // handle general connection errors
                            if (tableOptions.onError) {
                                tableOptions.onError.call(undefined, the);
                            }

                            App.alert({
                                type: 'danger',
                                icon: 'warning',
                                message: tableOptions.dataTable.language.metronicAjaxRequestGeneralError,
                                container: tableWrapper,
                                place: 'prepend'
                            });

                            App.unblockUI(tableContainer);
                        }
                    },

                    "drawCallback": function(oSettings) { // run some code on table redraw
                        if (tableInitialized === false) { // check if table has been initialized
                            tableInitialized = true; // set table initialized
                            table.show(); // display table
                        }
                        countSelectedRecords(); // reset selected records indicator

                        // callback for ajax data load
                        if (tableOptions.onDataLoad) {
                            tableOptions.onDataLoad.call(undefined, the);
                        }
                    }
                }
            }, options);

            tableOptions = options;

            // create table's jquery object
            table = $(options.src);
            tableContainer = table.parents(".table-container");

            // apply the special class that used to restyle the default datatable
            var tmp = $.fn.dataTableExt.oStdClasses;

            $.fn.dataTableExt.oStdClasses.sWrapper = $.fn.dataTableExt.oStdClasses.sWrapper + " dataTables_extended_wrapper";
            $.fn.dataTableExt.oStdClasses.sFilterInput = "form-control input-xs input-sm input-inline";
            $.fn.dataTableExt.oStdClasses.sLengthSelect = "form-control input-xs input-sm input-inline";

            // initialize a datatable
            dataTable = table.DataTable(options.dataTable);

            // revert back to default
            $.fn.dataTableExt.oStdClasses.sWrapper = tmp.sWrapper;
            $.fn.dataTableExt.oStdClasses.sFilterInput = tmp.sFilterInput;
            $.fn.dataTableExt.oStdClasses.sLengthSelect = tmp.sLengthSelect;

            // get table wrapper
            tableWrapper = table.parents('.dataTables_wrapper');

            // build table group actions panel
            if ($('.table-actions-wrapper', tableContainer).size() === 1) {
                $('.table-group-actions', tableWrapper).html($('.table-actions-wrapper', tableContainer).html()); // place the panel inside the wrapper
                $('.table-actions-wrapper', tableContainer).remove(); // remove the template container
            }
            // handle group checkboxes check/uncheck
            $('.group-checkable', table).change(function() {
                var set = table.find('tbody > tr > td:nth-child(1) input[type="checkbox"]');
                var checked = $(this).prop("checked");
                $(set).each(function() {
                    $(this).prop("checked", checked);
                });
                countSelectedRecords();
            });

            // handle row's checkbox click
            table.on('change', 'tbody > tr > td:nth-child(1) input[type="checkbox"]', function() {
                countSelectedRecords();
            });

            // handle filter submit button click
            table.on('click', '.filter-submit', function(e) {
                e.preventDefault();
                the.submitFilter();
            });

            // handle filter submit button click
            table.on('change', '.form-filter', function(e) {
                e.preventDefault();
                the.submitFilter();
            });

            // handle filter cancel button click
            table.on('click', '.filter-cancel', function(e) {
                e.preventDefault();
                the.resetFilter();
            });

            // handle filter cancel button click
            table.on('click', '.delete', function(e) {
                e.preventDefault();
                var url_del = $(this).data('url');
                var title = $(this).data('title');

                swal({
                //   title: "Delete <i class=\"red\">"+title+"</i> ?",
                //   text: $(this).data('title'),
                  html : "Delete <b>"+title+"</b> ?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then(function(){
                    console.log(url_del);
                    $.post(url_del, {param1: 'value1'}, function(data, textStatus, xhr) {
                        if (data.success == true) {
                            swal("Deleted!", "Data telah terhapus", "success");
                            dataTable.ajax.reload();
                        }else{
                            swal("Opps!", data.message, "warning");
                        }
                    });
                });
            });
			table.on('click', '.confirmreport', function(e) {
                e.preventDefault();
                var url_del = $(this).data('url');
				var title = $(this).data('title');

                swal({
                  html : "Yakin data laporan semester "+title+" dikirim?<br> Data yang telah dikirim tidak dapat dirubah!<br><br>Jika nantinya terdapat perubahan silahkan menghubungi Dinas Lingkungan Hidup Kota Surabaya memalui surat resmi",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Kirim Data'
                }).then(function(){
                    console.log(url_del);
                    $.post(url_del, {param1: 'value1'}, function(data, textStatus, xhr) {
                        if (data.success == true) {
                            swal("Terkirim!", "Data telah Terkirim", "success");
                            dataTable.ajax.reload();
                        }else{
                            swal("Opps!", data.message, "warning");
                        }
                    });
                });
            });

            //handle load modal
            // handle filter cancel button click
            // table.on('click', '.openmodal', function(e) {
            //     e.preventDefault();
            //     $('#temp_modal').load( $(this).attr("data-url"), { "modal": true }, function() {
            //     //   alert( "Load was performed." );
            //     });
            // });

            // handle checked action
            the.getTableWrapper().on('click', '.table-group-action-submit', function (e) {
                e.preventDefault();
                var action = $(".table-group-action-input", the.getTableWrapper());
                if (action.val() != "" && the.getSelectedRowsCount() > 0) {
                    the.setAjaxParam("customActionType", "group_action");
                    the.setAjaxParam("customActionName", action.val());
                    the.setAjaxParam("id", the.getSelectedRows());
                    the.getDataTable().ajax.reload();
                    the.clearAjaxParams();
                } else if (action.val() == "") {
                    App.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'Please select an action',
                        container: the.getTableWrapper(),
                        place: 'prepend'
                    });
                } else if (the.getSelectedRowsCount() === 0) {
                    App.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'No record selected',
                        container: the.getTableWrapper(),
                        place: 'prepend'
                    });
                }
            });

            // handle datatable custom tools
            $('#datatable_ajax_tools > li > a.tool-action').on('click', function() {
                var action = $(this).attr('data-action');
                the.getDataTable().button(action).trigger();
            });
        },

        submitFilter: function() {
            the.setAjaxParam("action", tableOptions.filterApplyAction);

            // get all typeable inputs
            $('textarea.form-filter, select.form-filter, input.form-filter:not([type="radio"],[type="checkbox"])', table).each(function() {
                the.setAjaxParam($(this).attr("name"), $(this).val());
            });

            // get all checkboxes
            $('input.form-filter[type="checkbox"]:checked', table).each(function() {
                the.addAjaxParam($(this).attr("name"), $(this).val());
            });

            // get all radio buttons
            $('input.form-filter[type="radio"]:checked', table).each(function() {
                the.setAjaxParam($(this).attr("name"), $(this).val());
            });

            dataTable.ajax.reload();
        },

        resetFilter: function() {
            $('textarea.form-filter, select.form-filter, input.form-filter', table).each(function() {
                $(this).val("");
            });
            $('select.select2-ajax, select.select2', table).each(function() {
                $(this).trigger("change");
            });
            $('input.form-filter[type="checkbox"]', table).each(function() {
                $(this).attr("checked", false);
            });
            the.clearAjaxParams();
            the.addAjaxParam("action", tableOptions.filterCancelAction);
            dataTable.ajax.reload();
        },

        getSelectedRowsCount: function() {
            return $('tbody > tr > td:nth-child(1) input[type="checkbox"]:checked', table).size();
        },

        getSelectedRows: function() {
            var rows = [];
            $('tbody > tr > td:nth-child(1) input[type="checkbox"]:checked', table).each(function() {
                rows.push($(this).val());
            });

            return rows;
        },

        setAjaxParam: function(name, value) {
            ajaxParams[name] = value;
        },

        addAjaxParam: function(name, value) {
            if (!ajaxParams[name]) {
                ajaxParams[name] = [];
            }

            skip = false;
            for (var i = 0; i < (ajaxParams[name]).length; i++) { // check for duplicates
                if (ajaxParams[name][i] === value) {
                    skip = true;
                }
            }

            if (skip === false) {
                ajaxParams[name].push(value);
            }
        },

        clearAjaxParams: function(name, value) {
            ajaxParams = {};
        },

        setDefaultParam: function(name, value) {
            defaultParams[name] = value;
        },

        addDefaultParam: function(name, value) {
            if (!defaultParams[name]) {
                defaultParams[name] = [];
            }

            skip = false;
            for (var i = 0; i < (defaultParams[name]).length; i++) { // check for duplicates
                if (defaultParams[name][i] === value) {
                    skip = true;
                }
            }

            if (skip === false) {
                defaultParams[name].push(value);
            }
        },

        clearDefaultParams: function(name, value) {
            defaultParams = {};
        },

        getDataTable: function() {
            return dataTable;
        },

        getTableWrapper: function() {
            return tableWrapper;
        },

        gettableContainer: function() {
            return tableContainer;
        },

        getTable: function() {
            return table;
        }

    };

};
