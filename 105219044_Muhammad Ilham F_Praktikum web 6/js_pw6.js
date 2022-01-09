const kategori=["Sosial","Rumah","Apartemen","Industri","Villa"];
const Abodemen=[10000,30000,50000,75000,100000];
const Tarif=[300,500,750,1000,1250];
const Pajak=[0,0.10,0.15,0.20,0.25];


var myTable= "<table class='tab_1'><tr><th>Kategori</th>";
    myTable+= "<th>Abadomen</th>";
    myTable+="<th>Tarif per-KWH</th>";
    myTable+="<th>Pajak</th></tr>"

    
  for (var i=0; i<kategori.length; i++) {
    myTable+="<tr><td>"+kategori[i]+"</td>";
    myTable+="<td>"+Abodemen[i]+"</td>";
    myTable+="<td>"+Tarif[i]+"</td>";
    myTable+="<td>"+Pajak[i]+"</td></tr>";
  }  
   myTable+="</table>";

   document.getElementById('tablePrint').innerHTML = myTable;

function tagihan(){
    var abodemen=0.0;
    const tarifKWH=[];
    var pajak=0.0;
    const subtotal=[];
 
    var index=1;
    var kategori_=document.getElementById("kategori").value;
    var sumHari=document.getElementById("hari").value;

    var name=document.getElementById("nama").value;
    var sos_display= "<table class='tab_tagihan'><tr><th>Jumlah &nbsp</th>";
    var jum_tagihan="<h1>Jumlah Tagihan</h1>";
    document.getElementById('tagihan_h1').innerHTML=jum_tagihan;
    
    var tagihan= "<table border='2'><tr><th>Nama pelanggan &nbsp</th>";
    
    tagihan+="<th>Kategori &nbsp</th>";
    tagihan+= "<th>Jumlah Pemakaian &nbsp</th></tr>";
    tagihan+="<tr><td>"+name+"</td>";
    tagihan+="<td>"+kategori_+"</td>";
    tagihan+="<td>"+sumHari+"</td></tr>";

    document.getElementById('jumlah_tagihan').innerHTML=tagihan;
    

    if(name=="" || sumHari==""){
        alert("masukkan nama atau jumlah hari yang benar");
    }
    else{
        sos_display+="<th>Tarif per-KWH &nbsp</th>";
        sos_display+= "<th>Abodemen &nbsp</th>";
        sos_display+="<th>Sub Total &nbsp</th></tr>"


        while(index <= sumHari){
            if(kategori_=="sosial"){
                tarifKWH[index]=Tarif[0]*index;
                abodemen=Abodemen[0];
                subtotal[index]=Abodemen[0]+tarifKWH[index];
                var pajak_sosial=Pajak[0];
                
                    sos_display+="<tr><td>"+index+"</td>";
                    sos_display+="<td>"+tarifKWH[index]+"</td>";
                    sos_display+="<td>"+Abodemen[0]+"</td>";
                    sos_display+="<td>"+subtotal[index]+"</td></tr>";
                    
                
                
            }
            else if(kategori_=="rumah"){
                tarifKWH[index]=Tarif[1]*index;
                abodemen=Abodemen[1];
                subtotal[index]=Abodemen[1]+tarifKWH[index];
                var pajak_rumah=Pajak[1];
                
                    sos_display+="<tr><td>"+index+"</td>";
                    sos_display+="<td>"+tarifKWH[index]+"</td>";
                    sos_display+="<td>"+Abodemen[0]+"</td>";
                    sos_display+="<td>"+subtotal[index]+"</td></tr>";
                    
                
            }
            
            else if(kategori_=="apartemen"){
                tarifKWH[index]=Tarif[2]*index;
                abodemen=Abodemen[2];
                subtotal[index]=Abodemen[2]+tarifKWH[index];
                var pajak_apartemen=Pajak[2];
                
                    sos_display+="<tr><td>"+index+"</td>";
                    sos_display+="<td>"+tarifKWH[index]+"</td>";
                    sos_display+="<td>"+Abodemen[0]+"</td>";
                    sos_display+="<td>"+subtotal[index]+"</td></tr>";
                    
                
            }
            
            else if(kategori_=="industri"){
                tarifKWH[index]=Tarif[3]*index;
                abodemen=Abodemen[3];
                subtotal[index]=Abodemen[3]+tarifKWH[index];
                var pajak_industri=Pajak[3];
                sos_display+="<tr><td>"+index+"</td>";
                    sos_display+="<td>"+tarifKWH[index]+"</td>";
                    sos_display+="<td>"+Abodemen[0]+"</td>";
                    sos_display+="<td>"+subtotal[index]+"</td></tr>";
                    
            }
            
            else if(kategori_=="villa"){
                tarifKWH[index]=Tarif[4]*index;
                abodemen=Abodemen[4];
                subtotal[index]=Abodemen[4]+tarifKWH[index];
                var pajak_villa=Pajak[4];
                sos_display+="<tr><td>"+index+"</td>";
                    sos_display+="<td>"+tarifKWH[index]+"</td>";
                    sos_display+="<td>"+Abodemen[0]+"</td>";
                    sos_display+="<td>"+subtotal[index]+"</td></tr>";
                    
            }
            index++;
        }
        var rincian="<h1>Rincian Tagihan</h1>";
    
        
        var jumlah_pajak=0.0;
        sos_display+="</table>";
         if(kategori_=="sosial"){
            jumlah_pajak=Pajak[0]*subtotal[sumHari];
            sos_display+="<p>"+"Pajak: &emsp;"+jumlah_pajak+"</p>";
            sos_display+="<p>"+"Subtotal: &emsp;"+subtotal[sumHari]+"</p>";
            var total=subtotal[sumHari]+jumlah_pajak;
            sos_display+="<p>"+"Bayar: &emsp;"+total+"</p>";
         

        }
        else if(kategori_=="rumah"){
            jumlah_pajak=pajak_rumah*subtotal[sumHari];
            sos_display+="<p>"+"Pajak: &emsp;"+jumlah_pajak+"</p>";
            sos_display+="<p>"+"Subtotal: &emsp;"+subtotal[sumHari]+"</p>";
            var total=subtotal[sumHari]+jumlah_pajak;
            sos_display+="<p>"+"Bayar: &emsp;"+total+"</p>";
         
        }
        else if(kategori_=="apartemen"){
            jumlah_pajak=Pajak[2]*subtotal[sumHari];
            sos_display+="<p>"+"Pajak: &emsp;"+jumlah_pajak+"</p>";
            sos_display+="<p>"+"Subtotal: &emsp;"+subtotal[sumHari]+"</p>";
            var total=subtotal[sumHari]+jumlah_pajak;
            sos_display+="<p>"+"Bayar: &emsp;"+total+"</p>";
         
        }
        else if(kategori_=="industri"){
            jumlah_pajak=Pajak[3]*subtotal[sumHari];
            sos_display+="<p>"+"Pajak: &emsp;"+jumlah_pajak+"</p>";
            sos_display+="<p>"+"Subtotal: &emsp;"+subtotal[sumHari]+"</p>";
            var total=subtotal[sumHari]+jumlah_pajak;
            sos_display+="<p>"+"Bayar: &emsp;"+total+"</p>";
         
        }
        else if(kategori_=="villa"){
            jumlah_pajak=Pajak[4]*subtotal[sumHari];
            sos_display+="<p>"+"Pajak: &emsp;"+jumlah_pajak+"</p>";
            sos_display+="<p>"+"Subtotal: &emsp;"+subtotal[sumHari]+"</p>";
            var total=subtotal[sumHari]+jumlah_pajak;
            sos_display+="<p>"+"Bayar: &emsp;"+total+"</p>";
            
            
        }

    }
    
   
    
    document.getElementById('sosial_display').innerHTML=sos_display;
    document.getElementById('rincian').innerHTML=rincian;
    
}