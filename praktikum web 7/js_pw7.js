function ubah(){
    var input_=document.getElementById("aceh");
    var output_=document.getElementById("strong_");

    var option=document.getElementsByTagName('select');
    
    
    var provinsi=document.getElemenById('province').value;

    
    console.log(provinsi);
    if(provinsi=="aceh"){

        output_.innerHTML="Aceh";
        option[1].getElementsByTagName('option')[1].innerHTML="Kabupaten Aceh Barat";
        option[1].getElementsByTagName('option')[1].value="aceh_barat";
        option[1].getElementsByTagName('option')[2].innerHTML="Kabupaten Aceh Besar";
        option[1].getElementsByTagName('option')[2].value="aceh_barat";
        option[1].getElementsByTagName('option')[3].innerHTML="Kabupaten Aceh Jaya";
        option[1].getElementsByTagName('option')[3].value="aceh_jaya";
        option[1].getElementsByTagName('option')[4].innerHTML="Kabupaten Aceh Selatan";
        option[1].getElementsByTagName('option')[4].value="aceh_selatan";
        option[1].getElementsByTagName('option')[5].innerHTML="Kabupaten Aceh Singkil";
        option[1].getElementsByTagName('option')[5].value="aceh_singkil";
       
        
        
    }
    else if(provinsi==""){
        output_.innerHTML="";
        
    }
    else if(provinsi=="sumut"){
        output_.innerHTML="Sumatera Utara";
        option[0].getElementsByTagName('option')[1].innerHTML="Kabupaten Asahan";
        option[0].getElementsByTagName('option')[1].value="asahan";
        option[0].getElementsByTagName('option')[2].innerHTML="Kabupaten Batu Bara";
        option[0].getElementsByTagName('option')[2].value="batubara";
        option[0].getElementsByTagName('option')[3].innerHTML="Kabupaten Dariri";
        option[0].getElementsByTagName('option')[3].value="dairi";
        option[0].getElementsByTagName('option')[4].innerHTML="Kabupaten Deki Serdang";
        option[0].getElementsByTagName('option')[4].value="deki_serdang";
        option[0].getElementsByTagName('option')[5].innerHTML="Kabupaten Karo";
        option[0].getElementsByTagName('option')[5].value="karo";
       
    }
    else if(provinsi=="sumbar"){
        output_.innerHTML="Sumatera Barat";
        option[0].getElementsByTagName('option')[1].innerHTML="Kabupaten Agam";
        option[0].getElementsByTagName('option')[1].value="agam";
        option[0].getElementsByTagName('option')[2].innerHTML="Kabupaten Dharmasraya";
        option[0].getElementsByTagName('option')[2].value="dharmasraya";
        option[0].getElementsByTagName('option')[3].innerHTML="Kabupaten Padang Pariaman";
        option[0].getElementsByTagName('option')[3].value="padang_pariaman";
        option[0].getElementsByTagName('option')[4].innerHTML="Kabupaten Pasaman";
        option[0].getElementsByTagName('option')[4].value="pasaman";
        option[0].getElementsByTagName('option')[5].innerHTML="Kabupaten Sijunjung";
        option[0].getElementsByTagName('option')[5].value="sijunjung";
       
    }
    else if(provinsi=="sumsel"){
        output_.innerHTML="Sumater Selatan";
        option[0].getElementsByTagName('option')[1].innerHTML="Kabupaten Banyuasin";
        option[0].getElementsByTagName('option')[1].value="banyuasin";
        option[0].getElementsByTagName('option')[2].innerHTML="Kabupaten Empat Lawang";
        option[0].getElementsByTagName('option')[2].value="empat_lawang";
        option[0].getElementsByTagName('option')[3].innerHTML="Kabupaten Lahat";
        option[0].getElementsByTagName('option')[3].value="lahat";
        option[0].getElementsByTagName('option')[4].innerHTML="Kabupaten Muara Enim";
        option[0].getElementsByTagName('option')[4].value="muara_enim";
        option[0].getElementsByTagName('option')[5].innerHTML="Kabupaten Palembang";
        option[0].getElementsByTagName('option')[5].value="palembang";
       
    }
    else if(provinsi=="bengkulu"){
        output_.innerHTML="Bengkulu";
        option[0].getElementsByTagName('option')[1].innerHTML="Kabupaten Bengkulu Selatan";
        option[0].getElementsByTagName('option')[1].value="bengkulu_selatan";
        option[0].getElementsByTagName('option')[2].innerHTML="Kabupaten Bengkulu Tengah";
        option[0].getElementsByTagName('option')[2].value="bengkulu_tengah";
        option[0].getElementsByTagName('option')[3].innerHTML="Kabupaten Kaur";
        option[0].getElementsByTagName('option')[3].value="Kaur";
        option[0].getElementsByTagName('option')[4].innerHTML="Kabupaten Kepahiang";
        option[0].getElementsByTagName('option')[4].value="kepahiang";
        option[0].getElementsByTagName('option')[5].innerHTML="Kabupaten Lebong";
        option[0].getElementsByTagName('option')[5].value="lebong";
       
    }

    
    
}
function result_(){

    var provinsi=document.getElemenById('province');

    var text=document.getElemenById('realtext');
    var kota=document.getElemenById('city');

    text.innerHTML="Provinsi " +provinsi.value + "Di kota" + kota.value + " ";

}
function darkmode() {
    var body = document.body;

    const light=document.getElemenById('darkmode');

    if (body.classList == 'dark-mode') {
        document.bgColor='white';
    } 
    else {
        body.classList = 'dark-mode';
      }
 }