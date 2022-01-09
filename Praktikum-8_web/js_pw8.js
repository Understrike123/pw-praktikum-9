function pilih(){
    var pilihan=document.getElementById('select_1');
    console.log(pilihan);
    if(pilihan.value=="none"){

        signaturefilter(null);
    }
    else if(pilihan.value=="makanan"){
        signaturefilter("makanan");
    }
    else if(pilihan.value=="minuman"){
        signaturefilter("minuman");
    }
    else if(pilihan.value=="dessert"){
        signaturefilter("dessert");
    }
    else{
        ("");
    }
}

function signaturefilter(vals){

    $.getJSON("json_pw8.json", function(data){
        let menu=data.menu;
    
        if(vals){
            menu=menu.filter(function(value){

                return value.jenis==vals;
            });
        }
        
        $('#menu-card')
        .empty()
        .append(
            menu.map(function(each){

                return `
                <div class="col-md-4">
                <div class="card border-dark mb-3 bg-warning" style="max-width: 18rem;">
                  <div class="card-header"> Kategori: ${each.jenis}</div>
                  <div class="card-body text-dark">
                  <img src=${each.gambar} class="card-img-top" alt="..."> 
                  <h5 class="card-title">${each.nama}</h5>
                    <p class="card-text">${each.deskripsi}</p>
                    <p class="card-text">harga: RP. ${each.harga}</p>
                    <p class="card-text">estimasi waktu: ${each.estimasi}</p>
                    <button type="button" class="btn btn-outline-primary">Pesan</button>
                  </div>
                </div>
              </div>`;
            
            })
        );

    });
}