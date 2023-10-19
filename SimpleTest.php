<?php
//Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
use PHPUnit\Framework\TestCase;//import class TestCase dari PHPUnit framework
require_once "Wordfangs.php"; //import file "Wordfangs.php" ke dalam testing script

class SimpleTest extends TestCase{//class SimpleTest meng extends framework Testcase
    public function testCountWords(){
        $Wf = new Wordcount();//membuat objek baru dari file Wordfangs.php dengan fungsi Wordcount()

        $TestSentence = "Saya makan nasi goreng";
        $WordCount = $Wf->countWords($TestSentence);//membuat variabel yang merujuk pada fungsi countWords() dari file Wordfangs.php dan diisi variabel dari $TestSentence

        $this->assertEquals(4,$WordCount);//untuk membandingkan hasil yang diinginkan dengan hasil yang dijalankan dari method countWords()
    }
}
?>