<?php
class Wordcount{
    public function countWords($sentence){
        return count(explode(" ",$sentence));//fungsi count() untuk menghitung panjang array
        //fungsi explode() digunakan untuk mengubah kalimat menjadi array setiap kata pada kalimat.
    }
}
?>