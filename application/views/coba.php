<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar jQuery Duniailkom</title>
<script src="jquery-2.1.4.js"></script>
<script>
   $(document).ready(function() {
  
     $("#tombol").click(function() {
       var nilai = $("#nama").val();
       alert(nilai);
     })
  
   });
   </script>
</head>
<body>
Nama: <input type="text" id="nama" value="Duniailkom...">
<button id="tombol">Ambil Nilai</button>
</body>
</html>