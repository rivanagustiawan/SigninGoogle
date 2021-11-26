<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Database Kepemudaan</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <script src="/js/multiple.js" type="text/javascript"></script>
    <link rel="icon" type="image/gif/png" href="/images/ic_logo.ico">
    <link rel="stylesheet" href="/css/multiple.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/datatables.min.css">
    <script src="/js/jquery.js"></script>
  </head>
  <body>
    
@include('partials.navbar')

<div class="container-fluid">
  <div class="row">
   @include('partials.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
      @yield('container')
    </main>
  </div>
</div>

    {{-- @include('sweetalert::alert') --}}
    <!-- main js -->
    <script src="/js/main.js"></script> 
     <!-- chart js -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- ScrollIt js -->
     <script src="/js/scrollIt.min.js"></script>
     <!-- Counterup -->
     <script src="/js/jquery.counterup.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script> 
    {{-- === --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#toutput").DataTable({
         
          "language": {
            "lengthMenu": "Menampilkan _MENU_ Data",
            "zeroRecords": "Data tidak ditemukan",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari :",
            "paginate": {
            "previous": "Kembali",
            "next": "Lanjut",
           
    },
    "searchPlaceholder": "Cari disini..",
        },
                 
                  "scrollX" : true,
                  "bAutoWidth" : false,
                  "ordering" : false,
                  "info":     false,
                  "lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
        });                       
    });
</script>

{{-- v2 --}}
    <script type="text/javascript">
    $(document).ready(function(){
        $("#toutput2").DataTable({
          "paging":   false,
        "ordering": false,
        "info":     false,
        "scrollX" : true,
        "bAutoWidth" : false,
        "searching": false

        });                       
    });
</script>
{{-- v3 --}}
    <script type="text/javascript">
    $(document).ready(function(){
        $("#toutput3").DataTable({
          "paging":   false,
        "ordering": false,
        "info":     false,
        "scrollX" : true,
        "bAutoWidth" : false,
        "searching": false

        });                       
    });
</script>

{{-- popup terima pendaftar --}}
<script>
  var checker = document.getElementById('defaultCheck1');
var sendbtn = document.getElementById('btn-terima');
// when unchecked or checked, run the function
checker.onchange = function(){
if(this.checked){
   sendbtn.disabled = false;
} else {
   sendbtn.disabled = true;
}

}

</script>




<script>
 // chart js
 var ctx = document.getElementById("myChart2").getContext('2d');
 
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["ATLET", "PELATIH", "WASIT", "PENGAWAS", "PRAMUKA", "PEMUDA"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 23, 2, 3],
					backgroundColor: [
					'rgba(30, 194, 139, 1)', 'rgba(30, 194, 139, 1)', 'rgba(30, 194, 139, 1)', 'rgba(30, 194, 139, 1)', 'rgba(30, 194, 139, 1)', 'rgba(30, 194, 139, 1)',
					
					],
					borderColor: [
                    'rgba(30, 194, 139, 1)',
					
					],
					borderWidth: 1
				}]
			},
			options: {
        
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
</Script>
  </body>
</html>
