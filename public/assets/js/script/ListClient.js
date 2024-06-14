/**
 * 
 */
$(document).ready(function(){
	
	$('table tbody.listcli').on('click','tr#select',function() {
		
				var id= $(this).find('td:first').text()

		});
				
		
	
	
	
		$('#dt-basic-example').dataTable(
        	                {
        	                    responsive: true,
        	                    dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
        	                        "<'row'<'col-sm-12'tr>>" +
        	                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        	                    buttons: [
        	                       
        	                        {
        	                            extend: 'print',
        	                            text: '<i class="fal fa-print"> Imprimer</i>',
        	                            titleAttr: 'Print Table',
        	                            className: 'btn-outline-default'
        	                        }

        	                    ],
        	                    //columnDefs: [
        	                        //{
        	                         //   targets: -1,
        	                         //   title: '',
        	                         //   orderable: false,
        	                         //   render: function(data, type, full, meta)
        	                          //  {

        	                                /*
        	                                -- ES6
        	                                -- convert using https://babeljs.io online transpiler
        	                                return `
        	                                <a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>
        	                                	<i class="fal fa-times"></i>
        	                                </a>
        	                                <div class='dropdown d-inline-block dropleft '>
        	                                	<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>
        	                                		<i class="fal fa-ellipsis-v"></i>
        	                                	</a>
        	                                	<div class='dropdown-menu'>
        	                                		<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>
        	                                		<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>
        	                                	</div>
        	                                </div>`;
        	                                	
        	                                ES5 example below:	

        	                                */
        	                              //  return null;
        	                        //    },
        	                      //  },

        	                   // ]

        	                });
        			
        		

})