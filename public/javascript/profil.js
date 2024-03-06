$.getJSON(window.location.origin ='/dataprofile', function(res){
    console.log(res)
    $('#nama').html(res.data.nama_lengkap)
    $('#bio').html(res.data.bio)
    $('#alamat').html(res.data.alamat)
    $('#fotoprofile').prop('src','/assets/'+res.data.avatar )
    $('#myprofil').prop('src','/assets/'+res.data.avatar )
})
var paginate = 1;
var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() >= $(document).height()){
        paginate++;
        loadMoreData(paginate);
    }
})


function loadMoreData(paginate){
    $.ajax({
        url: window.location.origin +'/getdataprofile/'+ '?page='+paginate,
        type: "GET",
        dataType: "JSON",

        success: function(e){
            console.log(e)
            e.datapost.data.map((x)=>{
                var hasilPencarian = x.likes.filter(function(hasil){
                    return hasil.id_user === e.id
                })
                if(hasilPencarian.length <= 0){
                    userlike = 0;
                } else {
                    userlike = hasilPencarian[0].id_user;
                }
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi_foto,
                    foto: x.url,
                    tanggal: moment(x.created_at).format('DD/MM/YYYY'),
                    jml_komentar: x.komentars_count,
                    jml_like: x.likes_count,
                    idUserLike: userlike,
                    useractive: e.id
                }
                dataExplore.push(datanya)
                console.log(userlike)
                console.log(e.id)
            })
            getExplore()
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    })
}

const getExplore =()=>{
    $('#dataprofil').html('')
    dataExplore.map((x, i)=>{
        $('#dataprofil').append(
            `
            <div class="flex mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="/exploredetail/${x.id}">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/assets/${x.foto}" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col font-fontutama">
                                <div>
                                   ${x.judul}
                                </div>
                                <div class="text-xs text-abuabu">
                                    ${x.tanggal}
                                </div>
                            </div>
                        </div>
                        <div>
                            <small>${x.jml_komentar}</small>
                            <span class="bi bi-chat-left-text"></span>
                            <small>${x.jml_like}</small>
                            <span class="bi ${x.idUserLike === x.useractive ? 'bi-heart-fill text-red-800': 'bi-heart'}" onclick="likes(this, ${x.id})"></span>
                            <a href="/edit/${x.id}" onclick="return confirm('Apakah Anda yakin ingin Mengedit Foto ini?')" class="bg-gray-300 px-1 rounded-md"><span class="bi bi-pencil-square"></span></a>
                            <a href="/hapus/${x.id}" onclick="return confirm('Apakah Anda yakin ingin menghapus Foto ini?')" class="text-red-600 px-1 rounded-md"><span class="bi bi-trash3"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            `
        )
    })
}


function likes(txt, id){
    $.ajax({
        url: window.location.origin +'/likes',
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id
        },
        success:function(res){
            console.log(res)
        },
        error:function(jqXHR, textStatus, errorThrown){
            alert('gagal')
        }
    })
}
