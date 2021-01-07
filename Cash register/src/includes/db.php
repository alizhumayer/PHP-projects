<?php
include 'config.php';


function connectDb() {
    global $db;
    $conn = mysqli_connect(
            $db['host'],
            $db['user'],
            $db['pass'],
            $db['name']
          );
    if(!$conn) {
        die('Hiba! A kapcsolódás sikertelen' .
                mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf8');
    return $conn;
}

function closeDb($conn) {
    mysqli_close($conn);
}

function insertItem($conn, $tomb) {
    $sql = <<<EOT
            insert into tarca
            (penz, leiras)
            values
            ('{$tomb['penz']}', '{$tomb['leiras']}'}
EOT;

            if(mysqli_query($conn, $sql)) {
                return true;
            }else {
                echo mysqli_error($conn);
                return false;
               }
            }
/* lista */
function getitem($conn) {
    $sql = 'select az, penz, leiras, date(datum) as datum from tarca.';
    $res = mysqli_query($conn, $sql);
    $datas = array();
    while($sor = mysqli_fetch_assoc($res)) {
        array_push($datas, array(
            $sor['az'],
            $sor['penz'],
            $sor['leiras'],
            $sor['datum'],
        ));
    }
    return $datas;
}
    
/* egyenleg */ 
function getBalance($conn) {
    $sql = 'select sum(penz) as balanace from tarca';
    if( $res = mysqli_query($conn, $sql)) {
        $sor = mysqli_fetch_assoc($res);
    }else {
        echo "Hiba" . mysqli_error($conn);
    }
    return $sor['balance'];
}
            
            
            
            
            
            
            
              
