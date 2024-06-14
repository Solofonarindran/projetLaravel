$("document").ready(function(){
        			
        			
        			
        			$("#listmodal").click(function(){
						
										$("tbody.researchpneu").empty()
										$("tbody.tabOperation").empty()
										
										//$('input:text[name=recherche]').val("")
										
										$(".recherche").keyup(function(){
											
				        					var dInput = $('input:text[name=recherche]').val()
				        					 
				        					var data={
												"name":dInput,
												"button":"researchcli"
											}
				        					
				        					$.ajax({
												type:"post",
												url:"Recherche",
												dataType:"json",
												data:data,
												success:function(response){
													
													let data=""
													let taille=response.length
													
													//clear the contents in the table when the response is come on
													$("tbody.research").empty()
													
													if(taille==1){
														let tab=response[0]
														if(tab==null){
															
															var row=$("<tr>")
															var col=$("<td>").attr("colspan","6")
															var h3=$("<h3>").attr("style","display:flex;justify-content:center ;letter-spacing:2px; text-transform:capitalize")
																			.text("Aucun résultat")
																	
															
																			  
																			  
															col.append(h3)	
				                                        	row.append(col)
				                                        	
				                                        	$("tbody.research").append(row)
					                                    }else{
															
															data='<tr class="select" id="test">'
															
															for(let i=0;i<5;i++){
																data+='<td>'+tab[i]+'</td>'
																
															}
															
															data+='<td><button type="button" id="select" class="select btn btn-outline-success btn-sm ml-2">Select</button></td></tr>'
															
														}
														
													}else{
														
														 
														 $.each(response,function(index,value){
															 
															 data+='<tr class="select"><td>'+value[0]+'</td><td>'+value[1]+'</td><td>'+value[2]+
															 	 '</td><td>'+value[3]+'</td><td>'+value[4]+'</td><td><button type="button" id="select" class="select btn btn-outline-success btn-sm ml-2" >Select</button></td>'
														 })
													}
													
													$("tbody.research").html(data)
				                                        		
				                                        	
															
													
												}
												
											})
												
				        					
										})
					
						
								})
					
					
        			
					
					$("table tbody.research").on('click','tr.select',()=>{
						
									var id= $(this).find('td:first').text()
									var name=$(this).find('td:nth-child(2)').text()
									var adress=$(this).find('td:nth-child(3)').text()
									var town=$(this).find('td:nth-child(4)').text()
									var phone=$(this).find('td:nth-child(5)').text()	
							
						
						//	if($('input:text[name=showname]').val()!=''){
								
								
								$("#btnConfirmNewAchat").click()
								
								$("#btnAccepted").on('click',()=>{
						
									
									//var idCli=$("input:text[name=showid]").val()
								   //	location.reload()
									
									$('input:text[name=showid]').val(id)
									$('input:text[name=showname]').val(name)
									$('input:text[name=showadress]').val(adress)
									$('input:text[name=showtown]').val(town)
									$('input:text[name=showphone]').val(phone)
									
									var data={"action":"CheckNewComID",
											   "idCli":id
											  }
										
									
									$.ajax({
										
										type:"post",
										url:"CommandeServlet",
										dataType:"json",
										data:data,
										success:function(response){
											$('input:text[name=numCommande]').val(response[0])
											$('input:text[name=dateCommande]').val(response[1])
										}
									})
									
								})
								
								
								
						//	}else{
								
									
									
									$('input:text[name=showid]').val(id)
									$('input:text[name=showname]').val(name)
									$('input:text[name=showadress]').val(adress)
									$('input:text[name=showtown]').val(town)
									$('input:text[name=showphone]').val(phone)
									
									$("tbody.research").empty()
									$("#modalcliclose").click()
									
									
							
							//}
					})
					
					
					
					$("#operation").on("click",function(){
						
						$(".recherchepneu").keyup(function(){
							
        					var dInput = $('input:text[name=recherchepneu]').val()
        					        					 
        					var data={
								"name":dInput,
								"button":"operation"
							}
        					
        					$.ajax({
								type:"post",
								url:"Recherche",
								dataType:"json",
								data:data,
								success:function(response){
									
									let data=""
									let taille=response.length
									
									//clear the contents in the table when the response is come on
									$("tbody.research").empty()
									
									if(taille==1){
										let tab=response[0]
										if(tab==null){
											
											var row=$("<tr>")
											var col=$("<td>").attr("colspan","5")
											var h3=$("<h3>").attr("style","display:flex;justify-content:center ;letter-spacing:2px; text-transform:capitalize")
															.text("Aucun résultat")
													
										
															  
											col.append(h3)	
                                        	row.append(col)
                                        	
                                        	$("tbody.researchpneu").html(row)
	                                    }else{
											
											data='<tr class="select" id="test">'
											
											for(let i=0;i<5;i++){
												data+='<td>'+tab[i]+'</td>'
												if(i==0){
													$('input:text[name=idpneu]').val(tab[i])
												}
											}
											
											data+='<td><button type="button" id="select" class="select btn btn-outline-success btn-sm ml-2">Select</button></td></tr>'
											
										}
										
									}else{
										
										 
										 $.each(response,function(index,value){
											 
											 data+='<tr class="select"><td>'+value[0]+'</td><td>'+value[1]+'</td><td>'+parseFloat(value[2])+
											 	 '</td><td>'+value[3]+'</td><td>'+value[4]+'</td><td><button type="button" id="select" class="select btn btn-outline-success btn-sm ml-2" >Select</button></td></tr>'
										 })
									}
									
									$("tbody.researchpneu").html(data)
                                        		
                                        	
											
									
								}
								
							})
        					
						})
						
					
						
					})
					
					
					
        			$("table tbody.researchpneu").on('click','tr',()=>{
					
						$("input:text[name=recherchepneu]").val("")
						//var idpneu=$(this).find('td:first').text()
						
						//Effacer tous les autres tables existants
						$("tbody.research").empty()
						$("tbody.tabOpération").empty()
						
						
						var ref=$(this).find('td:nth-child(2)').text()
						
						
						$('input:text[name=showreference]').val(ref)
						
					})
        			
        			
        			//prevent the user to press a negative number 
        			$("#number").keyup(()=>{
						
						 	var test= $("input[name=number]").val()
							var nbr=parseInt(test)
							
							if(nbr<0){
								$("input[name=number]").val("")
							}
					})
        			
        			
        			
        			$('#insertcontenir').on('click',()=>{
						
						var idpneu= $('input:text[name=idpneu]').val()
						var idcommande= $('input:text[name=numCommande]').val()
						var number=$('input[name=number]').val()
						var idcli=$('input:text[name=showid]').val()
						
						var data={
							"action":"insertcontenir",
							"idpneu":idpneu,
							"idcli":idcli,
							"idcommande":idcommande,
							"number":number
							
						}
						
						
						$.ajax({
							type:"post",
							url:"Contenir",
							dataType:"json",
							data:data,
							success:function(response){
								$("input:text[name=showMouvRef]").val(response[0])
								$("input:text[name=showMouvMark]").val(response[1])
								$("input:text[name=showStockRec]").val(response[2])
								$("input:text[name=showStockUpdate]").val(response[3])
								
								$("#btnTransparent").click()
								
							}
						})
						
						
						
						/*	$.ajax({
							type:"post",
							url:"Tabcontenir",
							dataType:"json",
							data:data,
							success:function(response){
								console.log(response)
								var data=''
							/*$.each(response,function(index,value){
											 
									 data+='<tr><td>'+value[0]+'</td><td>'+value[1]+'</td><td>'+value[2]+
									 	 '</td><td>'+value[3]+'</td><td>'+value[4]+'</td></tr>'
								 })
								 
								$("tbody.tabOperation").html(data)
							
							}
						})*/	
						
						
						
					})
        			
        			$("#btnfermerTransparent").on('click',()=>{
						
						$("tbody.researchpneu").empty()
						$("input[name=number]").val("")
						$("input:text[name=showreference]").val("");
						
						//$("#operation").click()
						
					})
        			
        		
        			
        			
        			
        			
        			
        			
        			$('#dt-basic-example').dataTable(
        	                {
        	                    responsive: true,
        	                     dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
        	                          "<'row'<'col-sm-12'tr>>" +
        	                          "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        	                    buttons: [
        	                       
        	                        {
        	                            extend: 'print',
        	                            text: '<i class="fal fa-print"></i>',
        	                            titleAttr: 'Print Table',
        	                            className: 'btn-outline-default'
        	                        }

        	                    ],
        	                   /* columnDefs: [
        	                        {
        	                            targets: -1,
        	                            title: 'Montant',
        	                            orderable: false,
        	                            render: function(data, type, full, meta)
        	                            {

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

        	                                
        	                               	return null
        	                                //return "\n\t\t\t\t\t\t<button class='btn  btn-outline-success  waves-effect waves-themed'><i class='fal fa-cart-arrow-down '> Add</i></button>\n\t\t\t\t\t\t\</div>\n\t\t\t\t\t\t</div>";
        	                            },
        	                        },

        	                    ]*/

        	                })
        			
        		})