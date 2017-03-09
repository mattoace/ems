loadUrl = "/back/Smtp.php";
var editor; 
$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {	
                ajax: loadUrl,
		table: "#mySmtpTable",
		fields: [ {
				label: "Smtp Host:",
				name: "host"
			}, {
				label: "Port:",
				name: "port"
			},
                        {
				label: "Smtp username:",
				name: "ems_smtp.username"
			},{
				label: "Smtp password:",
				name: "pass"
			}, {
				label: "Default email:",
				name: "default_from_email"
			}, {
				label: "Default email password:",
				name: "default_from_email_password"//,
                //type:"password"
			},{
				label: "Default from name:",
				name: "default_from_name"
			},{
				label: "Default mail heading (Subject):",
				name: "default_mail_heading"
			},{
				label: "Smtp type:",
				name: "smtp_type"
			}
		]
	} );

	// Activate an inline edit on click of a table cell
	$('#mySmtpTable').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editor.inline( this );
	} );

	table = $('#mySmtpTable').DataTable( {
		dom: "Bfrtip",
		ajax: loadUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "host" },
			{ data: "port" },
			{ data: "ems_smtp.username" },
			{ data: "pass" },
			{ data: "default_from_email" },
			{ data: "default_from_email_password" },
			{ data: "default_from_name" },
			{ data: "default_mail_heading" },
			{ data: "smtp_type" }				
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editor },
			{ extend: "edit",   editor: editor },
			{ extend: "remove", editor: editor }                      
		]
	} );
        
        editor.on( 'open', function ( e, json, data ) {
  
          });
          
        table.on( 'click', 'tr', function (id) {
    
                
         });
} );

function gotoRoles(obj){    
    alert(obj);
}

