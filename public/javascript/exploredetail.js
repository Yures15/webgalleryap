var segmentTerakhir = window.location.href.split('/').pop();

$.ajax({
    url: window.location.origin +'/exploredetail/'+segmentTerakhir+'/getdatadetail',
    type: "GET",
    dataType: "JSON",
    success: function(res){
        console.log(res)
        $('#fotodetail').prop('src', '/assets/'+res.dataDetailFoto.url)
        $('#fotouser').prop('src', '/assets/'+res.dataDetailFoto.user.avatar)
        $('#judulfoto').html(res.dataDetailFoto.judul_foto)
        $('#deskripsifoto').html(res.dataDetailFoto.deskripsi_foto)
        $('#username').html(res.dataDetailFoto.user.username)
        $('#username').prop('href', '/otherpin/'+res.dataDetailFoto.user.id)
        ambilKomentar()
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('gagal')
    }
})

function ambilKomentar(){
    $.getJSON(window.location.origin +'/exploredetail/getKomentar/'+segmentTerakhir, function(res){
        console.log(res)
        if(res.data.length === 0){
            $('#listkomentar').html('<div class="font-fontutama">Belum ada komentar</div>')
        } else {
            comment= []
            res.data.map((x)=>{
                let datacomentar = {
                    idUser: x.user.id,
                    pengirim: x.user.nama_lengkap,
                    waktu: x.created_at,
                    isikomentar: x.isi_komentar,
                    potopengirim: x.user.avatar
                }
                comment.push(datacomentar);
            })
            tampilkankomentar()
        }
    })
}

const tampilkankomentar = ()=>{
    $('#listkomentar').html('')
    comment.map((x, i)=>{
        $('#listkomentar').append(`
        <div class="flex flex-row justify-start mt-4">
        <a href="/otherpin/${x.idUser}" class="w-1/4 overflow-hidden">
            <img src="/assets/${x.potopengirim}" class="w-10 h-10 border-2 rounded-full" alt="">
        </a>
        <div class="flex flex-col mr-2">
            <h5 class="text-sm">${x.pengirim}</h5>
            <small class="text-xs text-abuabu">${new Date(x.waktu).toLocaleDateString("id")}</small>
        </div>
        <h5 class="text-sm">${x.isikomentar}</h5>
    </div>`)
    })
}

function kirimkomentar(){
    $.ajax({
        url: window.location.origin +'/exploredetail/kirimkomentar',
        type: "POST",
        dataType: "JSON",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: segmentTerakhir,
            isi_komentar: $('input[name="textkomentar"]').val()
        },
        success: function(res){
            location.reload()
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal mengirim komentar')
        }
    })
}
