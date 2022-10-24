<html>
    <body>
        <style>
            select{
                width:100%;
            }
            button{
                border-radius: 4px;
                font-size: 18px;
                background-color: white;
            }
        </style>
        <section>
            
            <p align='center'>Silahkan Reservasi <br>
        
            <center>  
                <form action="<?= base_url('datasiswa/cetak'); ?>" method="post"> 
                    <table> 
                        <tr align="left" > 
                            <td >NIK</td> 
                            <td> 
                                <input type="text" name="nama" id="nama"> 
                            </td> 
                        </tr> 
                        <tr align="left"> 
                            <td>Nama Lengkap</td> 
                            <td>
                                <input type="text" name="nis" id="nis"> 
                                    
                            </td> 
                        </tr>
                        <tr align="left">
                            <td>Jenis Kelamin</td>  
                            <td>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan 
                        </tr>  
                        <tr align="left"> 
                            <td>Alamat</td> 
                            <td>
                                <input type="text" name="kelas" id="kelas" > 
                                
                            </td> 
                        </tr> 
                        <tr align="left"> 
                            <td>Tipe</td> 
                            <td>
                            <select name="tipe" id="tipe">
                                <option value=""></option>
                                <option value="Standart Room">Standart Room</option>
                                <option value=">Superior Room">Superior Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Twin Room">Twin Room</option>
                                <option value="Single Room">Single Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Family Room">Family Room</option>
                                <option value="Junior Suit">Junior Suit</option>
                            </select>
                                    
                            </td> 
                        </tr> 
                        <tr align="left"> 
                            <td>Tanggal checkin</td>  
                            <td>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" > 
                                    
                            </td> 
                        </tr> 
                        <tr align="left"> 
                            <td>Lama inap</td> 
                            <td>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" > 
                            </td> 
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <button type="submit">Simpan</button>
                            </td>
                        </tr>
                    </table>          
                </form> 
            </center> 
        </section>
    </body>
</html>
