<script src="https://cdn.tailwindcss.com"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-screen h-screen bg-slate-400 pt-40">
    <div class="container mx-auto">
        <div class="m-auto w-96 h-20 bg-white">
            <form action="" name="form1">
                <input type="text" name="no" id="no" value="" class="text-center w-full h-full text-4xl font-bold">
            </form>
        </div>
        <div class="m-auto w-96 h-96 bg-white shadow-lg">
            <div class="h-1/5  w-full flex">
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='1'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">1</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='2'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">2</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='3'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">3</button>
                </div>
            </div>
            <div class="h-1/5  w-full flex">
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='4'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">4</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='5'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">5</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='6'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">6</button>
                </div>
            </div>
            <div class="h-1/5  w-full flex">
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='7'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">7</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='8'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">8</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='8'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">9</button>
                </div>
            </div>
            <div class="h-1/5  w-full flex">
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='*'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">*</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='0'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">0</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                    <button onclick = "form1.no.value +='#'" class="bg-blue-200 hover:bg-blue-400 rounded-full w-14 h-14 p-3">#</button>
                </div>
            </div>
            <div class="h-1/5  w-full flex">
                <div class="h-full w-4/6 text-center pt-3">
                    <button onclick="call()" class="bg-green-200 hover:bg-green-400 rounded-full w-48 h-14 p-3">Call</button>
                </div>
                <div class="h-full w-2/6 text-center pt-3">
                <button onclick="form1.no.value = form1.no.value.slice(0, -1)" class="bg-red-300 hover:bg-red-500 rounded-full w-14 h-14 p-3">←</button>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
    function call() {
        if (form1.no.value == "*858#") {
            var choice = prompt("Mau iPhone 15Plus dr Saskia Chadwick?\nHub *500*117#\n1. Transfer Pulsa\n2. Minta Pulsa\n3. Auto TP\n4. Delete Auto TP\n5. List Auto TP\n6. Cek Kupon Undian TP")
            if(choice == '1'){
                var nominal = prompt("Masukkan nominal pulsa yang akan ditransfer :")
                var tujuan = prompt("Masukkan nomor tujuan transfer pulsa :")
                alert("Berhasil transfer pulsa "+ nominal + " ke nomor " + tujuan)
            }else if(choice == '2'){
                var nominalMinta = prompt("Masukkan nominal pulsa yang akan diminta :")
                var tujuanMinta = prompt("Masukkan nomor tujuan minta pulsa :")
                alert("Mengirimkan permintaan "+ nominalMinta + " pulsa ke nomor " + tujuanMinta)
            }else if(choice == '3'){
                var nominalAutoTP = prompt("Masukkan nominal pulsa yang akan transfer :")
                var tujuanAutoTP = prompt("Masukkan nomor tujuan transfer pulsa :")
                var tanggalAutoTP = prompt("Masukkan tanggal transfer pulsa :")
                alert("Berhasil mengatur auto transfer pada tangga "+ tanggalAutoTP+" dengan nominal "+ nominalAutoTP + " ke nomor " + tujuanAutoTP)
            }else if(choice == '4'){
                var hapusAutoTP = prompt("List AutoTP :\n1. 25 January 20024 - 10.000 - 082158114721\n2. 28 Mei 2024 - 50.000 - 085157878221\n3. 29 Juli 2024 - 100.000 - 08981438845\nPilih AutoTP yang mau dihapus : ")
                switch (hapusAutoTP) {
                    case '1':
                        alert("Berhasil menghapus transfer '25 January 20024 - 10.000 - 082158114721'")
                        break;
                    case '2':
                        alert("Berhasil menghapus transfer '28 Mei 2024 - 50.000 - 085157878221'")
                        break;
                    case '3':
                        alert("Berhasil menghapus transfer '29 Juli 2024 - 100.000 - 08981438845'")
                        break;
                
                    default:
                    alert("Tidak ada AutoTP dengan ID tersebut")
                        break;
                }
            }else if(choice == '5'){
                alert("List AutoTP :\n1. 25 January 20024 - 10.000 - 082158114721\n2. 28 Mei 2024 - 50.000 - 085157878221\n3. 29 Juli 2024 - 100.000 - 08981438845")
            }else if(choice == '6'){
                alert("Maaf nomor anda tidak menang undian, coba lagi lain kali")
            }else{
                alert("Pilihan tidak tersedia, Pilih menu yang disediakan")
            }
        }

        form1.no.value = '';
    }
</script>

</html>
