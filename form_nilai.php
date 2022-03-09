<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_nilai.php">
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
        <option value="pw">Pemrograman Web</option>
        <option value="bing">Bahasa Inggris</option>
        <option value="uiux">UI UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
 $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
 $mata_kuliah = isset ($_POST['mata_kuliah']) ? $_POST['mata_kuliah'] :'';
 $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
 $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
 $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

 switch ($nilai_uts) {
     case 'A':
        $info = "Sangat Memuaskan";
        break;
        case 'B':
            $info = "Memuaskan";
            break;
        case 'C':
            $info = "Cukup";
            break;
        case 'D' :
            $info = "Kurang";
            break;
        case 'E' :
            $info = "Sangat Kurang";
            break;
}
switch ($nilai_uas) {
    case 'A':
       $info1 = "Sangat Memuaskan";
       break;
       case 'B':
           $info1 = "Memuaskan";
           break;
       case 'C':
           $info1 = "Cukup";
           break;
       case 'D' :
           $info1 = "Kurang";
           break;
       case 'E' :
           $info1 = "Sangat Kurang";
           break;
}
switch ($nilai_tugas) {
    case 'A':
       $info2 = "Sangat Memuaskan";
       break;
       case 'B':
           $info2 = "Memuaskan";
           break;
       case 'C':
           $info2 = "Cukup";
           break;
       case 'D' :
           $info2 = "Kurang";
           break;
       case 'E' :
           $info2 = "Sangat Kurang";
           break;
}


 echo 'Nama Lengkap : ' .$nama_lengkap;
 echo '<br/>Mata Kuliah : ' .$mata_kuliah;
 echo '<br/>Nilai UTS : ' .$info;
 echo '<br/>Nilai UAS : ' .$info1;
 echo '<br/>Nilai Tugas : ' .$info2;
