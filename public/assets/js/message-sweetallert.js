const swal = $('.swal').data('swal');

if(swal){
    swal({
        title: "Berhasil!",
        text: "Data berhasil di simpan!",
        icon: "success",
      });
}