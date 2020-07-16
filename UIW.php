
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Organization Chart Plugin</title>
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="jquery.orgchart.css">
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    #chart-container { height:  620px; }
    .orgchart { background: white; }
  </style>
</head>
<body>

  <div id="chart-container"></div>

  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.orgchart.js"></script>
  <script type="text/javascript">
   var nama = 'RAIS';
    $(function() {

    var datascource = {
      'name': nama,
      'title': 'General manager',
      'children': [

          { 'name': nama, 'title': 'Pejabat ' ,
          'children':[

                { 'name': nama, 'title': 'Pejabat Pelaksana Keselamatan<br>,kesehatan kerja dan lingkungan' },
                { 'name': nama, 'title': 'Pejabat Pelaksana Pengadaan' },
                { 'name': nama, 'title': 'Pejabat Perencana Pengadaan' },
        ]
},



        
      

        { 'name': nama, 'title': 'Senior Manager Keuangan',
          'children': [
            { 'name': nama, 'title': 'Manager Akuntansi',
            'children': [                 
              { 'name': nama, 'title': 'Assistant Manager Akuntansi AT dan PDP' },
              { 'name': nama, 'title': 'Assistant Manager Akuntansi Umum dan Biaya' }
                        ]
            },


            { 'name': nama, 'title': 'Manager Keuangan',
              'children': [                 
              { 'name': nama, 'title': 'Assistant Manager Pengelolaan Pendapatan' },
              { 'name': nama, 'title': 'Assistant Manager Verifikasi' },
			  { 'name': nama, 'title': 'Assistant Manager Pembayaran' },
			  { 'name': nama, 'title': 'Assistant Manager Pajak dan Asuransi' }
			  
                          ]
            }

          ]
        },



         { 'name': nama, 'title': ' Senior Manager Niaga dan Pelayanan Pelanggan',
          'children': [
            { 'name': nama, 'title': 'Manager Administrasi Niaga',
            'children': [                 
              { 'name': nama, 'title': 'Assistant Manager Pengendalian Piutang' },
			  
                        ]
						
            },
 { 'name': nama, 'title': 'Manager Layanan Prioritas'},
  { 'name': nama, 'title': 'Manager Pengelolaan Pembangkit Independent Power Producer dan Excess Power'},     

            { 'name': nama, 'title': 'Manager Revenue Assurance dan Mekanisme Niaga',
              'children': [                 
              { 'name': nama, 'title': 'Assistant Manager Revenue Assurance' },
              { 'name': nama, 'title': 'Manager Strategi Pemasaran' },
			  { 'name': nama, 'title': 'Assistant Manager Manajemen Billing' },
			  { 'name': nama, 'title': 'Assistant Manager Contact Center Supervisor' }
                             ]
            }

          ]
        },
		
 { 'name': nama, 'title': 'Senior Manager Perencanaan',
          'children': [
            { 'name': nama, 'title': 'Manager Perencanaan Sistem Kelistrikan' },                 
              { 'name': nama, 'title':'Manager Perencanaan Pengusahaan' }
			  
                        ]
            },

{ 'name': nama, 'title': 'Senior Manager Sumber Daya Manusia dan Umum',
          'children': [
            { 'name': nama, 'title': 'Manager Administrasi SDM',
            'children': [                 
              { 'name': nama, 'title': 'Assistant Manager Administrasi SDM' },
			  { 'name': nama, 'title': 'Assistant Manager Hubungan Industrial dan Pengawasan Tenaga Kerja' },
              { 'name': nama, 'title': 'Assistant Manager Kesejahteraan Pegawai' }
                        ]
            },


            { 'name': nama, 'title': 'Manager Administrasi Umum dan Fasilitas',
              'children': [                
			  { 'name': nama, 'title': 'Assistant Manager Pengelolaan Fasilitas Kantor' },
			  { 'name': nama, 'title': 'Assistant Manager Sekretariat' }
	 		  
                          ]
            },
			{ 'name': nama, 'title': 'Manager Komunikasi',
              'children': [                
			  { 'name': nama, 'title': 'Assistant Manager Komunikasi' },
			  { 'name': nama, 'title': 'Assistant Manager CSR dan PKBL' },
			  { 'name': nama, 'title': 'Assistant Manager Manajemen Stakeholder' }
			  
                          ]
		
            },

{ 'name': nama, 'title': 'Manager Pengamanan dan Pendayagunaan Aset Properti'},    

            { 'name': nama, 'title': 'Manager Pengembangan SDM',
              'children': [                 
			  { 'name': nama, 'title': 'Assistant Manager Pengembangan SDM' },
			  { 'name': nama, 'title': 'Assistant Manager Kinerja dan Perencanaan Tenaga Kerja' }
                             ]
            },

          ]
        },
		
  { 'name': nama, 'title': 'Senior Manager Teknik',
          'children': [
            { 'name': nama, 'title': 'Manager Efisiensi, Pengukuran dan Mutu Sistem Distribusi',
            'children': [                 
			  { 'name': nama, 'title': 'Assistant Manager Pengendalian Sistem Meter' },
              { 'name': nama, 'title': 'Assistant Manager Penertiban Pemakaian Tenaga Listrik' }
                        ]
            },


            { 'name': nama, 'title': 'Manager Pembangkitan'},
          
			{ 'name': nama, 'title': 'Manager Pengendalian Operasi Sistem Distribusi',
              'children': [               
			  { 'name': nama, 'title': 'Assistant Manager PDKB' }
			  
                          ]
		
            },

            { 'name': nama, 'title': 'Manager Perencanaan Pola Operasi dan Pemeliharaan Sistem Distribusi',
              'children': [  
			  { 'name': nama, 'title': 'Assistant Manager Pengelolaan Aset Distribusi' },
			  { 'name': nama, 'title': 'Assistant Manager Pengelolaan Konstruksi Distribusi' },
			  { 'name': nama, 'title': 'Assistant Manager Logistik' },
			  { 'name': nama, 'title': 'Assistant Manager Logistik' }
                             ]
           },

          ]
        },

]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'nodeContent': 'title',
      'verticalLevel': 3,
      'visibleLevel': 4
    });

  });
  </script>
  </body>
</html>