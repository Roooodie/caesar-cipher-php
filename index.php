<html>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <meta charset="UTF-8">
    <title>Caesar Cipher</title>


</head>
        <body>

        <div class="col-12 p-3 bg-info text-white">
            <div class="row">
                <div class="col">
                    Caesar Cipher Encryptor/Decryptor
                </div>
                <div class="col text-right">
                    Dibuat dengan sepenuh hati menggunakan PHP
                </div>
            </div>
        </div>
        
        <div class="col-12 p-3 bg-light text-dark" style="padding-bottom: 100px">

            <div class="container">
                <blockquote class="blockquote text-center" style="margin: 100px 0px">
                  <p class="mb-0">Caesar cipher adalah enkripsi berbasis karakter  paling sederhana dengan metode pertukaran atau subtitusi sebanyak berdasarkan offset, dimana tiap 1 karakter diganti dengan karakter yang berada di n (offset) digit sebelah kanan atau kirinya, tergantung arah pergeserannya.</p>
                  <footer class="blockquote-footer">Caesar Cipher</footer>
                </blockquote>

                <form action="index.php" method="get">
                
                    <div class="input-group mb-3">

                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Text :</span>
                        </div>
                        <textarea class="form-control" name="text"><?php if (isset($_GET['text'])) echo $_GET['text']; ?></textarea>
                      </div>
                    </div>
                    
                    <p>pilih offset : </p>
                    
                    <select name="offset" size="1">
                    <option value="<?php if (isset($_GET['offset'])) {print_r($_GET['offset']);} else {echo "0";} ?>"><?php if (isset($_GET['offset'])) {print_r($_GET['offset']);} else {echo "0";} ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    </select>

                    <div class="text-center">
                    <button type="Encrypt" name="encrypt" class="btn btn-primary btn-lg">Encrypt</button>  
                    <button type="Decrypt" name="decrypt" class="btn btn-primary btn-lg">Decrypt</button>       
                    </div>

                    
                </form>
                            
            </div>


            <div class="container text-center" style="margin-top:100px; margin-bottom: 100px">
                <h1 class="display-4">
                    Result :
                </h1>
                <p class="lead">

                    <?php
                function encrypt($str, $offset) {
                    $encrypted_text = "";
                    $offset = $offset % 26;
                    if($offset < 0) {
                        $offset += 26;
                    }
                    $i = 0;
                    while($i < strlen($str)) {
                        $c = strtoupper($str{$i});
                        if(($c >= "A") && ($c <= 'Z')) {
                            if((ord($c) + $offset) > ord("Z")) {
                                $encrypted_text .= chr(ord($c) + $offset - 26);
                            } else {
                                $encrypted_text .= chr(ord($c) + $offset);
                            }
                        } else {
                            $encrypted_text .= " ";
                        }
                        $i++;
                    }
                    return $encrypted_text;
                }

               function decrypt($str, $offset) {
                   $decrypted_text = "";
                   $offset = $offset % 26;
                   if($offset < 0) {
                       $offset += 26;
                   }
                   $i = 0;
                   while($i < strlen($str)) {
                       $c = strtoupper($str{$i});
                       if(($c >= "A") && ($c <= 'Z')) {
                           if((ord($c) - $offset) < ord("A")) {
                               $decrypted_text .= chr(ord($c) - $offset + 26);
                           } else {
                               $decrypted_text .= chr(ord($c) - $offset);
                           }
                       } else {
                           $decrypted_text .= " ";
                       }
                       $i++;
                   }
                   return $decrypted_text;
               }


                if (isset($_GET['encrypt']))
                    {
                        $text  = $_GET['text'] ;
                        $offset = $_GET['offset'] ;
                        $new_text = encrypt($text , $offset) ;
                        echo $new_text ;
                    }
                else if (isset($_GET['decrypt']))
                    {
                        $text  = $_GET['text'] ;
                        $offset = $_GET['offset'] ;
                        $new_text = decrypt($text , $offset) ;
                        echo $new_text ;
                    }

                ?>



                 </p>
            </div>

        </div>
        
        <div class="col-12 p-3 bg-dark text-white text-center">
            <!-- Footer -->
            <footer class="page-footer font-small blue">

              <!-- Copyright -->
              <div class="footer-copyright text-center ">© 2020 Copyright:
                <a href="https://t.me/Roooodie"> Sultan Baharuddin Ulil Amrie</a>
            </div>
            <div class="footer-copyright text-center">Dibuat untuk Mata Kuliah: Cyber Security
            </div>
            <div class="footer-copyright text-center ">Dosen Mata Kuliah:
                <a href="https://scholar.google.com/citations?hl=en&user=xgBf4toAAAAJ"> Irfan Syamsuddin, ST, PG.Dipl.BEC, M.Com.ISM,Ph.D</a>
            </div>
            <div class="footer-copyright text-center ">Program Studi:
                <a href="http://tkj.poliupg.ac.id/">D4 Teknik Komputer dan Jaringan</a>
              </div>
              <!-- Copyright -->

            </footer>
            <!-- Footer -->
        </div>

        </body>
</html>