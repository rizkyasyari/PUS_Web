$( document ).ready(function() {
    console.log( "ready!" );

    var root = window.origin+'/spus/public';

    $( "#kode_kelas" ).change(function() {
        var id = $(this).val();
        var url =  root+'/api/get_kelas/'+id;

        // alert(id);
        $.ajax({
            type:"get",
            dataType : "json",
            url: url,
            success: function(data) {
                console.log(data.hasil);
                $('#tahun-ajaran').val(data.hasil.tahun_ajaran);
                $('#jurusan').val(data.hasil.nama_jurusan);
                $('#id_jurusan').val(data.hasil.id_jurusan);
                $('#id_tahun_ajaran').val(data.hasil.id_ta);
            }

        });
    });
});
//
// $( document ).ready(function() {
//     console.log( "ready!" );
//
//     var root = window.origin+'/spus/public';
//
//     $( "#pembayaran" ).change(function() {
//         var id = $(this).val();
//         var url =  root+'/api/get_pembayaran/'+id;
//
//         // alert(id);
//         $.ajax({
//             type:"get",
//             dataType : "json",
//             url: url,
//             success: function(data) {
//                 console.log(data.hasil);
//                 $('#nominal').val(data.hasil.tahun_ajaran);
//             }
//
//         });
//     });
// });

