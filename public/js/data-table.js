$(function() {
  'use strict';

  $(function() {
    $('#dataTableKelas').DataTable({

        buttons:[
            'searchPanes'
        ],
        dom: 'Bfrtip',
        columnDefs:[
            {
                searchPanes:{
                    show: true,
                },
                targets: [ 1,],
            },
        ],
      "aLengthMenu": [
        [10, 30, 50, -1],
        [10, 30, 50, "All"]
      ],
      "iDisplayLength": 10,
        language: {
            searchPanes: {
                clearMessage: 'Reset Filter',
                collapse: {0: 'Filter Jurusan', _: 'Search Options (%d)'}
            }
        },
    });
    $('#dataTableKelas').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Search');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      length_sel.removeClass('form-control-sm');
    });
  });

    $(function() {
        $('#dataTableSiswa').DataTable({

            buttons:[
                'searchPanes'
            ],
            dom: 'Bfrtip',
            columnDefs:[
                {
                    searchPanes:{
                        show: true,
                    },
                    targets: [ 7,1],
                },
            ],
            "aLengthMenu": [
                [10, 30, 50, -1],
                [10, 30, 50, "All"]
            ],
            "iDisplayLength": 10,
            language: {
                searchPanes: {
                    clearMessage: 'Reset Filter',
                    collapse: {0: 'Filter Siswa', _: 'Search Options (%d)'}
                }
            },
        });
        $('#dataTableSiswa').each(function() {
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder', 'Search');
            search_input.removeClass('form-control-sm');
            // LENGTH - Inline-Form control
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.removeClass('form-control-sm');
        });
    });

    $(function() {
        $('#dataTableOrtu').DataTable({

            buttons:[
                'searchPanes'
            ],
        });
        $('#dataTableOrtu').each(function() {
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder', 'Search');
            search_input.removeClass('form-control-sm');
            // LENGTH - Inline-Form control
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.removeClass('form-control-sm');
        });
    });
    $(function() {
        $('#dataTableJurusan').DataTable({

            buttons:[
                'searchPanes'
            ],
        });
        $('#dataTableJurusan').each(function() {
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder', 'Search');
            search_input.removeClass('form-control-sm');
            // LENGTH - Inline-Form control
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.removeClass('form-control-sm');
        });
    });
});
