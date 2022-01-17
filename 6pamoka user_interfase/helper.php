<?php
function clearEmail($email)
{
    return trim(strtolower($email));
}

function isEmailValid($email)
{
    return strpos($email, '@') !== false;

}

function isPasswordValid($pass1, $pass2)
{
    return $pass1 === $pass2 && strlen($pass1) > 3;
}


// $list = array
// (
//     'Aman,18,2000'
//     'Rohit,20,24000'
// );
// $file = fopen(filename:'sample_text.csv',mode:'m');
// foreach ($list as $line)
// {
//     fputcsv($file,explode(separator:',',$line));

// }
// // fclose($file);
// function writeToCsv($data,$filename){
//     $file = fopen($filename,mode:'w');
//     foreach ($data as $element);
//     }
//     fclose($file);
// }
function writeToCsv($data, $fileName)
{
    $file = fopen($fileName, 'a');
    foreach ($data as $element) {
        fputcsv($file, $element);
    }
    fclose($file);
}

function readFromCsv($fileName)
{
    $fh = fopen($fileName, 'r');
    while (!feof($fh)) {
        $line = fgetcsv(fh);
        if (!empty($line)) {
            $data[] = $line;
        }
        fclose($fh);
        return $data;
    }
}
    function debug($data)
    {
        echo '<pre>';
        var_dump($data);
        die();
    }

    // function hashPassword($password)
    // {
    //     return


//     function hashPassword($password)
//     {
//         return md5(md5($passwrod) . 'banana');
// }

