<?php

    use wad\Client;
    include 'client.php';

    class ClientSeeder{
        public static function seedClients(){

            //$vehiclesClass = array();
            $clientsClass = [];

            $clientsClass[] = new Client( 'Robbie Stanton', '20', 'F', '463114561', 'provisional_2');
            $clientsClass[] = new Client( 'Hubert Haskins', '37', 'M', '456381499', 'open');
            $clientsClass[] = new Client( 'Trina Wilkinson', '36', 'F', '189842264', 'open');

            return $clientsClass;
        }
    }
?>

<!-- name: Robbie Stanton
age: 20
licenseNo: 463114561
licenseType: provisional_2
gender: M

name: Hubert Haskins
age: 37
licenseNo: 456381499
licenseType: open
gender: M

name: Trina Wilkinson
age: 36
licenseNo: 189842264
licenseType: open
gender: F

name: Tracy Ashley
age: 22
licenseNo: 131637347
licenseType: provisional_1
gender: F

name: Elias Dorsey
age: 66
licenseNo: 541385107
licenseType: open
gender: M

name: Raquel Bright
age: 25
licenseNo: 489956400
licenseType: provisional_2
gender: F

name: Bert Robbins
age: 40
licenseNo: 848625699
licenseType: open
gender: M

name: Mandy Fulton
age: 44
licenseNo: 566816835
licenseType: open
gender: F

name: Christi McKee
age: 78
licenseNo: 439787458
licenseType: open
gender: F

name: Abigail Hammond
age: 59
licenseNo: 050637716
licenseType: open
gender: {F

name: Meredith Ewing
age: 69
licenseNo: 555502853
licenseType: open
gender: F

name: Johanna Rivers
age: 57
licenseNo: 400870333
licenseType: open
gender: F


name: Danny Dalton
age: 43
licenseNo: 496724067
licenseType: open
gender: M -->